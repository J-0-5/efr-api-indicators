<?php

namespace App\Modules\MetricModule;

use App\Modules\MetricModule\Resources\WeeklyMetricResource;
use App\Traits\RestActions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WeeklyMetric extends Model
{
    use SoftDeletes, RestActions;
    protected $table = 'weekly_metrics';

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

    public function getWeeklyMetrics($request)
    {
        try {
            $weekly_metrics = $this::whereMetricReference($request->metric_reference)
                ->year($request->year)
                ->fromMonth($request->month)
                ->whereDate($request->day)
                ->get();

            if (count($weekly_metrics ?? []) == 0) {
                return $this->respond(404, null, 'weekly_metrics not found', 'no Weekly metrics found');
            }
            $weekly_metrics = WeeklyMetricResource::collection($weekly_metrics);
            return $this->respond(200, $weekly_metrics, null, 'Weekly metrics successfully found');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error searching Weekly metrics');
        }
    }
}
