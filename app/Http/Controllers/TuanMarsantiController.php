<?php

namespace App\Http\Controllers;

use App\Models\Tuan_marsanti;
use Illuminate\Http\Request;

class TuanMarsantiController extends Controller
{
    public function index(){

        $data = Tuan_marsanti::all();
        return view('tuan-marsanti.index',compact('data'));
    }

    public function create(){
        return view('tuan-marsanti.create');
    }

    public function insert(Request $request){
        $request->validate(
            [
                "nomor" => "required|numeric",
                "nama" => "required|regex:/[a-zA-Z]/",
                "deskripsi"=> 'nullable', 'string', 'max:255'
            ],

            [
                "nomor.required" => 'Harap memasukkan data nomor ',
                "nomor.numeric" => 'Nomor hanya bisa dalam angka saja',
                "nama.required" => 'Harap memasukkan data Nama',
                "nama.alpha" => 'Nama hanya bisa dalam huruf saja',
            ]

        );
        Tuan_marsanti::create($request->all());

            return redirect()->route('tuan-marsanti')->with('success','Data Tuan Marsanti berhasil ditambahkan');
    }

}
