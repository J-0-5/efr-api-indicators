<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\MetricModule\AnnualMetric;
use Illuminate\Http\Request;

class AnnualMetricController extends Controller
{
    protected $AnnualMetricModel;

    public function __construct()
    {
        $this->AnnualMetricModel = new AnnualMetric();
    }

    public function index(Request $request)
    {
        return $this->AnnualMetricModel->getAnnualMetrics($request);
    }
}
