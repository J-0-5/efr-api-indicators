<?php

namespace App\Modules\MetricModule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CensusMetric extends Model
{
    use SoftDeletes;
    protected $table = 'census';

    protected $fillable = [
        'date',
        'metric_id',
        'value',
    ];
}
