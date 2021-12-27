<?php

namespace App\Http\Controllers;

use App\Models\Generasi;
use Illuminate\Http\Request;

class GenerasiController extends Controller
{
    public function index(){

        $data = Generasi::all();
        return view('generasi.index',compact('data'));
    }

    public function create(){
        return view('generasi.create');
    }

    public function insert(Request $request){
        $request->validate(
            [
                "nomor" => "required|numeric",
                "nama" => "required|regex:/^[\s\w-]*$/",
                "domisili"=> "required|regex:/^[\s\w-]*$/"
            ],

            [
                "nomor.required" => 'Harap memasukkan data Nomor ',
                "nomor.numeric" => 'Nomor hanya bisa dalam angka saja',
                "nama.required" => 'Harap memasukkan data Nama',
                "nama.alpha" => 'Nama hanya bisa dalam huruf saja',
                "domisili.required" => 'Harap memasukkan data Domisili',
                "domisili.alpha" => 'Nama hanya bisa dalam huruf saja'
            ]

        );
        Generasi::create($request->all());

        return redirect()->route('generasi')->with('success','Data Generasi berhasil ditambahkan');
    }
}
