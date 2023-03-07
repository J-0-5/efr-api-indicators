<?php

namespace App\Modules\MetricModule\Imports;

use App\Modules\MetricModule\CensusMetric;
use App\Modules\MetricModule\Metric;
use App\Modules\MetricModule\MonthlyMetric;
use App\Modules\MetricModule\UsdaGrainPriceMetric;
use App\Modules\MetricModule\WeeklyMetric;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MetricImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        // dd(str_replace(',', '', '4,956,730'));
        $references = [];
        foreach ($rows as $column => $row) {
            if ($column == 0) {
                $references = $row;
                continue;
            }
            foreach ($references as $index => $reference) {
                $value = $row[$index] ?? null;
                if ($index == 0 || is_null($value)) {
                    continue;
                }
                $metric = Metric::where('reference', $reference)->first();
                UsdaGrainPriceMetric::create([
                    'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                    'metric_id' => $metric->id,
                    'value' => $value,
                ]);
            }
        }
    }
}
