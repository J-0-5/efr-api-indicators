<?php

use Illuminate\Support\Facades\Route;

Route::post('metric/import', 'MetricModule\Api\Controllers\MetricController@import');