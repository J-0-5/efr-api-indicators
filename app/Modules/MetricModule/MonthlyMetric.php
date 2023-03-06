<?php

namespace App\Modules\MetricModule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyMetric extends Model
{
    use SoftDeletes;
    protected $table = 'monthly_metrics';

    protected $fillable = [
        'date',
        'metric_id',
        'value',
    ];
}
