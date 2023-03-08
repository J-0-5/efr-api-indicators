<?php

namespace App\Modules\MetricModule;

use App\Modules\MetricModule\Resources\MonthlyMetricResource;
use App\Traits\RestActions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyMetric extends Model
{
    use SoftDeletes, RestActions;
    protected $table = 'monthly_metrics';

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

    public function getMonthlyMetrics($request)
    {
        try {
            $monthly_metrics = $this::whereMetricReference($request->metric_reference)
                ->year($request->year)
                ->fromMonth($request->month)
                ->get();

            if (count($monthly_metrics ?? []) == 0) {
                return $this->respond(404, null, 'monthly_metrics not found', 'no Monthly metrics found');
            }
            $monthly_metrics = MonthlyMetricResource::collection($monthly_metrics);
            return $this->respond(200, $monthly_metrics, null, 'Monthly metrics successfully found');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error searching Monthly metrics');
        }
    }
}
