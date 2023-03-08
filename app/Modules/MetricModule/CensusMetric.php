<?php

namespace App\Modules\MetricModule;

use App\Traits\RestActions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CensusMetric extends Model
{
    use SoftDeletes, RestActions;
    protected $table = 'census';

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

    public function getCensusMetrics($request)
    {
        try {
            $census_metrics = $this::whereMetricReference($request->metric_reference)
                ->get();

            if (count($census_metrics ?? []) == 0) {
                return $this->respond(404, null, 'census_metrics not found', 'no Census metrics found');
            }
            // $census_metrics = CensusMetricResource::collection($census_metrics);
            return $this->respond(200, $census_metrics, null, 'Census metrics successfully found');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error searching Census metrics');
        }
    }
}
