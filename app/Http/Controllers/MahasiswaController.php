<?php

namespace App\Http\Controllers;


use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class ControllerMahasiswa extends Controller
{
    public function insertelq(){
        // public assigment
        // $mhs = new Mahasiswa();
        // $mhs->nama = "aziz irawan";
        // $mhs->npm = "2226250114";
        // $mhs->tempat_lahir = "palembang";
        // $mhs->tanggal_lahir = date("y-m-d");
        // $mhs->save();
        // dump($mhs);

        // Mas assigment
        $mhs = Mahasiswa::insert(
     [
        ['nama' => 'aziz irawan', 'npm' => '226250114', 'tempat_lahir' => 'palembang', 'tanggal_lahir' =>('y-m-d')],
        ['nama' => 'aziz irawan', 'npm' => '226250114', 'tempat_lahir' => 'palembang', 'tanggal_lahir' =>('y-m-d')
        ]
   ]

    );
    dump($mhs);

    }
    public function updateElq(){

    }
     public function DeleteElq(){
}
}
