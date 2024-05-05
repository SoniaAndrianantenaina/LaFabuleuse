<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller{
    public function getAllServices(){
        $services = Service::all();
        return view('serviceList', compact('services'));
    }
}
