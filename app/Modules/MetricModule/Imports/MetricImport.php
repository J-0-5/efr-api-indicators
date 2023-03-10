<?php

namespace App\Modules\MetricModule\Imports;

use App\Modules\MetricModule\CensusMetric;
use App\Modules\MetricModule\Metric;
use App\Modules\MetricModule\UsdaGrainPriceMetric;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class MetricImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        // dd(str_replace(',', '', '4,956,730'));
        // $references = $rows[0];
        // $step = 90000;
        // for ($i = $step; $i < $step + 6058; $i++) {
        //     $row = $rows[$i];
        //     foreach ($references as $index => $reference) {
        //         $value = $row[$index] ?? null;
        //         if ($index == 0 || is_null($value)) {
        //             continue;
        //         }
        //         $metric = Metric::where('reference', $reference)->first();
        //         CensusMetric::create([
        //             'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
        //             'metric_id' => $metric->id,
        //             'value' => $value,
        //         ]);
        //     }
        // }
    }
}
