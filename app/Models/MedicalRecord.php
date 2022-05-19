<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = ['ct_scan', 'mri'];

    public function laboratoryTests()
    {
        return $this->belongsToMany(LaboratoryTest::class, 'medical_record_test', 'medical_record_id', 'test_id')->withPivot('active');
    }
}
