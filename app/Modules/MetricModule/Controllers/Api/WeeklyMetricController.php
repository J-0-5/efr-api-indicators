<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\MetricModule\WeeklyMetric;
use Illuminate\Http\Request;

class WeeklyMetricController extends Controller
{
    protected $WeeklyMetricModel;

    public function __construct()
    {
        $this->WeeklyMetricModel = new WeeklyMetric();
    }

    public function index(Request $request)
    {
        return $this->WeeklyMetricModel->getWeeklyMetrics($request);
    }
}
