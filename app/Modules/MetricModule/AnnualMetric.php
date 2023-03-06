<?php

namespace App\Modules\MetricModule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnnualMetric extends Model
{
    use SoftDeletes;
    protected $table = 'weekly_metrics';

    protected $fillable = [
        'state',
        'date',
        'metric_id',
        'value',
    ];
}
