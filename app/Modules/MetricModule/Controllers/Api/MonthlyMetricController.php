<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\MetricModule\MonthlyMetric;
use Illuminate\Http\Request;

class MonthlyMetricController extends Controller
{
    protected $MonthlyMetricModel;

    public function __construct()
    {
        $this->MonthlyMetricModel = new MonthlyMetric();
    }

    public function index(Request $request)
    {
        return $this->MonthlyMetricModel->getMonthlyMetrics($request);
    }
}
