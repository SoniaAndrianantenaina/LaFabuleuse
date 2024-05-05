<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServicesDetails;

class ServicesDetailsController extends Controller{
    public function getAllServicesDetails(){
        $servicesdetails = ServicesDetails::all();
        // return view('serviceList', compact('servicesdetails'));
        //liste des services details
    }
}
