<?php

namespace App\Modules\MetricModule\Imports;

use App\Modules\MetricModule\Metric;
use App\Modules\MetricModule\MonthlyMetric;
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
                $value = doubleval(str_replace(',', '', $row[$index]));
                if ($index == 0 || $value == 0) {
                    continue;
                }
                $metric = Metric::where('reference', $reference)->first();
                WeeklyMetric::create([
                    'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]),
                    'metric_id' => $metric->id,
                    'value' => $value,
                ]);
            }
        }
    }
}
