<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\MetricModule\UsdaGrainPriceMetric;
use Illuminate\Http\Request;

class UsdaGrainPriceMetricController extends Controller
{
    protected $UsdaGrainPriceMetricModel;

    public function __construct()
    {
        $this->UsdaGrainPriceMetricModel = new UsdaGrainPriceMetric();
    }

    public function index(Request $request)
    {
        return $this->UsdaGrainPriceMetricModel->getUsdaGrainPriceMetrics($request);
    }
}
