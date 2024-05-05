<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lieux;

class LieuxController extends Controller{
    public function getAllLieux(){
        $lieux = Lieux::all();
        ///view liste lieux
    }
}
