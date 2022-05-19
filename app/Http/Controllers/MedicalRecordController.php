<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicalRecordRequest;
use App\Http\Requests\UpdateMedicalRecordRequest;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicalRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicalRecordRequest $request)
    {
        $medicalRecord = MedicalRecord::create($request->validated());
        if ($request->tests)
            $medicalRecord->laboratoryTests()->attach($request->tests);
        return response()->success($medicalRecord, "medical record created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalRecord $medicalRecord)
    {
        $medicalRecord = $medicalRecord->load(['laboratoryTests' => function ($query) {
            $query->orderBy('type_id', 'asc');
        }, 'laboratoryTests.laboratoryTestType']);
        return response()->success($medicalRecord);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicalRecordRequest  $request
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicalRecordRequest $request, MedicalRecord $medicalRecord)
    {
        $medicalRecord->update($request->validated());
        if ($request->tests)
            $medicalRecord->laboratoryTests()->sync($request->tests);
        return response()->success($medicalRecord, "medical record updated successfully!");
    }
}
