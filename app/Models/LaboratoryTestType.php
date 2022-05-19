<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryTestType extends Model
{
    use HasFactory;

    public function laboratoryTests()
    {
        return $this->hasMany(LaboratoryTest::class, 'type_id');
    }
}
