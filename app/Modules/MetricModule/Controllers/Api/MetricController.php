<?php

namespace App\Modules\MetricModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\RestActions;
use App\Modules\MetricModule\Imports\MetricImport;
use App\Modules\MetricModule\Metric;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MetricController extends Controller
{
    use RestActions;

    protected $MetricModel;

    public function __construct()
    {
        $this->MetricModel = new Metric();
    }

    public function import(Request $request)
    {
        try {
            if ($request->hasFile('excel_file')) {
                $document = $request->file('excel_file');
                $import = new MetricImport();
                $data = \Excel::import($import, $document);
                return $this->respond(200, $data, null, 'Metric successfully imported');
            }
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error importing Metric');
        }
    }
}
