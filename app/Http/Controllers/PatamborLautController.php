<?php

namespace App\Http\Controllers;

use App\Models\Patambor_laut;
use Illuminate\Http\Request;

class PatamborLautController extends Controller
{
    public function index(){

        $data = Patambor_laut::all();
        return view('patambor-laut.index',compact('data'));
    }
}
