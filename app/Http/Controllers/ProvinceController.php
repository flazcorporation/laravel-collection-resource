<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Http\Resources\RegencyCollection;

class ProvinceController extends Controller
{
    public function index()
    {
        $data = Province::with(['regencies'])->get();
        return new RegencyCollection($data);
    }
}
