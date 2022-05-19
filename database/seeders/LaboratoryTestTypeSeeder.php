<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratoryTestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratory_tests')->insert([
            [
                "name" => "Chest",
                "type_id" => 1,
            ],
            [
                "name" => "Cervical Vertebrae",
                "type_id" => 1,
            ],
            [
                "name" => "Thoracic Vertebrae",
                "type_id" => 1,
            ],
            [
                "name" => "Lumvar Vertebrae",
                "type_id" => 1,
            ],
            [
                "name" => "Lumbo Sacral Vertebrae",
                "type_id" => 1,
            ],
            [
                "name" => "Thoracal Lumbar Vertebrae",
                "type_id" => 1,
            ],
            [
                "name" => "Wrist Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Thoracic Inlet",
                "type_id" => 1,
            ],
            [
                "name" => "Shoulder Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Elbow Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Knee Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Sacro Iliac Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Pelvic Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Hip Joint",
                "type_id" => 1,
            ],
            [
                "name" => "Femoral",
                "type_id" => 1,
            ],
            [
                "name" => "Ankle",
                "type_id" => 1,
            ],
            [
                "name" => "Humerus",
                "type_id" => 1,
            ],
            [
                "name" => "Radius/Ulner",
                "type_id" => 1,
            ],
            [
                "name" => "Foot",
                "type_id" => 1,
            ],
            [
                "name" => "Tibia/Fibula",
                "type_id" => 1,
            ],
            [
                "name" => "Fingers",
                "type_id" => 1,
            ],
            [
                "name" => "Toes",
                "type_id" => 1,
            ],
            [
                "name" => "Obstetric",
                "type_id" => 2,
            ],
            [
                "name" => "Abdioninal",
                "type_id" => 2,
            ],
            [
                "name" => "Pelvis",
                "type_id" => 2,
            ],
            [
                "name" => "Prostate",
                "type_id" => 2,
            ],
            [
                "name" => "Breast",
                "type_id" => 2,
            ],
            [
                "name" => "Thyroid",
                "type_id" => 2,
            ],
        ]);
    }
}
