<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\MetricModule\CensusMetric;
use Illuminate\Http\Request;

class CensusMetricController extends Controller
{
    protected $CensusMetricModel;

    public function __construct()
    {
        $this->CensusMetricModel = new CensusMetric();
    }

    public function index(Request $request)
    {
        return $this->CensusMetricModel->getCensusMetrics($request);
    }
}
