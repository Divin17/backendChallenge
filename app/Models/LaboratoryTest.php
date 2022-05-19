<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryTest extends Model
{
    use HasFactory;

    public function laboratoryTestType()
    {
        return $this->belongsTo(LaboratoryTestType::class, 'type_id');
    }
    public function medicalRecords()
    {
        return $this->belongsToMany(MedicalRecord::class, 'medical_record_test', 'test_id', 'medical_record_id')->withPivot('active');
    }
}
