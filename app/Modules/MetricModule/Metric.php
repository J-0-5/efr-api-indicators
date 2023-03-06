<?php

namespace App\Modules\MetricModule;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Metric extends Model
{
    protected $table = 'metrics';

    protected $fillable = [
        'associate_to',
        'reference',
        'source',
        'description',
        'unit',
        'frequency',
    ];

    public function validateMetric($request)
    {
        return Validator::make(
            $request->all(),
            [
                'associate_to' => 'nullable|string',
                'reference' => 'nullable|string',
                'source' => 'nullable|string',
                'description' => 'nullable|string',
                'unit' => 'nullable|string',
                'frequency' => 'nullable|string',
            ]
        );
    }

    public function saveMetric($request)
    {
        try {
            $validator = $this->validateMetric($request, 'create');

            if ($validator->fails()) {
                return $this->respond(500,  $validator->errors(), 'validation error', $validator->errors()->first());
            }

            $metric = $this::create($request->all());

            return $this->respond(200, $metric, null, 'Metric successfully created');
        } catch (\Exception $e) {
            return $this->respond(500, [], $e->getMessage() . ' | File: ' . $e->getFile() . ' | Line: ' . $e->getLine(), 'Error while creating Metric');
        }
    }
}
