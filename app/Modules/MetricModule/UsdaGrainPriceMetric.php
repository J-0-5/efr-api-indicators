<?php

namespace App\Modules\MetricModule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsdaGrainPriceMetric extends Model
{
    use SoftDeletes;
    protected $table = 'usda_grain_price';

    protected $fillable = [
        'date',
        'metric_id',
        'value',
    ];
}
