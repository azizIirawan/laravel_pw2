<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // jika nama table berbeda

    protected $table = "mahasiswa";

    // untuk mengatur kolom yg boleh di isi saat mass assigment
    protected $fillable = ['npm','nama', 'tempat_lahir' , 'tanggal_lahir'];

    // untuk mengatur kolom yg tidak boleh diisi

    protected $guard =[];
}
