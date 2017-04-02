<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
    public function awal(){
 	return "hello dari mahasiswacontroller";
 }
 public function tambah(){
 	return $this->simpan();
 }
 public function simpan(){
 	$mahasiswa = new mahasiswa();
 	$mahasiswa->nim    = '1515015011';
 	$mahasiswa->nama   = 'Gilbert Pranajaya Z';
 	$mahasiswa->alamat = 'Pasundan';
 	$mahasiswa->pengguna_id = '2';
 	$mahasiswa->save();
 	return"data dengan username {$mahasiswa->nama} telah disimpan";
 }
}
