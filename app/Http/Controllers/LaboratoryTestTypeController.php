<?php

namespace App\Http\Controllers;

use App\Models\LaboratoryTestType;
use Illuminate\Http\Request;

class LaboratoryTestTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratoryTestTypes = LaboratoryTestType::with('laboratoryTests')->get();
        return \response()->success($laboratoryTestTypes);
    }
}
