<?php

use Illuminate\Support\Facades\Route;

Route::post('metric/import', 'MetricModule\Controllers\Api\MetricController@import');
Route::get('annual-metric', 'MetricModule\Controllers\Api\AnnualMetricController@index');
Route::get('monthly-metric', 'MetricModule\Controllers\Api\MonthlyMetricController@index');
Route::get('weekly-metric', 'MetricModule\Controllers\Api\WeeklyMetricController@index');
Route::get('census-metric', 'MetricModule\Controllers\Api\CensusMetricController@index');
Route::get('usda-grain-price-metric', 'MetricModule\Controllers\Api\UsdaGrainPriceMetricController@index');
