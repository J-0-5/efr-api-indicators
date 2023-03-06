<?php

namespace App\Modules\MetricModule\Imports;

use App\Modules\MetricModule\Metric;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class MetricImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $id => $row) {
            if ($id < 67) {
                continue;
            }
            dd($row);
            
        }
    }
}
