<?php

use Illuminate\Support\Facades\Route;

Route::post('metric/import', 'MetricModule\Controllers\Api\MetricController@import');
Route::get('annual-metric', 'MetricModule\Controllers\Api\AnnualMetricController@index');
