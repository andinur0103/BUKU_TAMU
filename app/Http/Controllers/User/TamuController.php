<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TamuController extends Controller
{
    public function SimpanTamu(Request $request){
        $nama    = $request->nama;
        $telepon = $request->telepon;
        $email   = $request->email;
        $alamat  = $request->alamat;

        // dd($nama, $telepon, $email, $alamat);

        $data = new User();
        $data->nama = $nama;
        $data->telepon = $telepon;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->password = Hash::check('rahasia');
        $data->save();

        return redirect('/')->with('status', 'Data Berhasil Disimpan');

    }
}
