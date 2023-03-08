<?php

namespace App\Modules\MetricModule;

use App\Modules\MetricModule\Resources\UsdaGrainPriceMetricResource;
use App\Traits\RestActions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsdaGrainPriceMetric extends Model
{
    use SoftDeletes, RestActions;

    protected $table = 'usda_grain_prices';

    protected $fillable = [
        'date',
        'metric_id',
        'value',
    ];

    public function getMetric()
    {
        return $this->belongsTo(Metric::class, 'metric_id');
    }

    public function scopeWhereMetricReference($query, $value)
    {
        if (!is_null($value)) {
            $query->whereHas('getMetric', function ($query) use ($value) {
                $query->where('reference', $value);
            });
        }
    }

    public function scopeYear($query, $value)
    {
        if (!is_null($value)) {
            $query->whereYear('date', $value);
        }
    }

    public function scopeFromMonth($query, $value)
    {
        if (!is_null($value)) {
            $query->whereMonth('date', $value);
        }
    }

    public function scopeWhereDate($query, $value)
    {
        if (!is_null($value)) {
            $query->whereDay('date', $value);
        }
    }

    public function getUsdaGrainPriceMetrics($request)
    {
        try {
            $usda_grain_price_metrics = $this::whereMetricReference($request->metric_reference)
                ->year($request->year)
                ->fromMonth($request->month)
                ->whereDate($request->day)
                ->get();

            if (count($usda_grain_price_metrics ?? []) == 0) {
                return $this->respond(404, null, 'usda_grain_price_metrics not found', 'no USDA Grain Price metrics found');
            }
            $usda_grain_price_metrics = UsdaGrainPriceMetricResource::collection($usda_grain_price_metrics);
            return $this->respond(200, $usda_grain_price_metrics, null, 'USDA Grain Price metrics successfully found');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error searching USDA Grain Price metrics');
        }
    }
}
