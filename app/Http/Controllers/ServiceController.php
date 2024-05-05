<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;

class ServiceController extends Controller{
    public function getAllServices(){
        $services = Services::all();
        return view('serviceList', compact('services'));
    }
}
