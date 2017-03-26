<?php
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit{ruangan}','RuanganController@edit');
Route::post('ruangan/edit{ruangan}','RuanganController@update');
Route::get('ruangan/hapus{ruangan}','RuanganController@hapus');


Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('/dosen/tambah','DosenController@awal');
Route::get('/dosenmatakuliah/tambah','DosenMatakuliahController@awal');
Route::get('/jadwalmatakuliah/tambah','JadwalMatakuliahController@awal');
Route::get('/mahasiswaa/tambah','MahasiswaaController@awal');
Route::get('/matakuliah/tambah','MatakuliahController@awal');
Route::get('/ruangan/tambah','RuanganController@awal');
Route::get('pengguna/{pengguna}', function ($pengguna)
{
    return "Hello world dari pengguna $pengguna";
});