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

    public function create(){
        return view('patambor-laut.create');
    }

    public function insert(Request $request){
        $request->validate(
            [
            "nomor" => "required|numeric",
            "nama" => "required|regex:/[a-zA-Z]/",
            "deskripsi"=> 'nullable', 'string', 'max:255'
            ],

            [
                "nomor.required" => 'Harap memasukkan data Nomor ',
                "nomor.numeric" => 'Nomor hanya bisa dalam angka saja',
                "nama.required" => 'Harap memasukkan data Nama',
                "nama.alpha" => 'Nama hanya bisa dalam huruf saja',
            ]

        );
        Patambor_laut::create($request->all());

        return redirect()->route('patambor-laut')->with('success','Data Partambor Laut berhasil ditambahkan');
    }
}
