<?php

namespace App\Modules\MetricModule\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnualMetricResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id ?? null,
            'state' => $this->state ?? null,
            'date' => $this->date ?? null,
            'metric_id' => $this->metric_id ?? null,
            'metric_reference' => $this->getMetric->reference,
            'value' => $this->value ?? null,
        ];
    }
}
