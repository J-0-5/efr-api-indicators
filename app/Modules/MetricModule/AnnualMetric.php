<?php

namespace App\Modules\MetricModule;

use App\Modules\MetricModule\Resources\AnnualMetricResource;
use App\Traits\RestActions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnnualMetric extends Model
{
    use SoftDeletes, RestActions;

    protected $table = 'annual_metrics';

    protected $fillable = [
        'state',
        'date',
        'metric_id',
        'value',
    ];

    public function getMetric()
    {
        return $this->belongsTo(Metric::class, 'metric_id');
    }

    public function scopeWhereYear($query, $value)
    {
        if (!is_null($value)) {
            $query->where('date', $value);
        }
    }

    public function getAnnualMetrics($request)
    {
        try {
            $annual_metrics = $this::whereYear($request->year)->get();

            if (count($annual_metrics ?? []) == 0) {
                return $this->respond(404, null, 'annual_metrics not found', 'no Annual metrics found');
            }
            $annual_metrics = AnnualMetricResource::collection($annual_metrics);
            return $this->respond(200, $annual_metrics, null, 'Annual metrics successfully found');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error searching Metric');
        }
    }
}
