<?php

namespace App\Http\Controllers;
use App\Models\pesanan;

use Illuminate\Http\Request;

class pesananController extends Controller
{
    public function index()
     {
        $pesanan = pesanan::get();

        return view('pesanan.index',['data'=>$pesanan]); 

     }
     public function tambah(){ 
     return view ('pesanan.form');
     }
     public function simpan(Request $request) 
     {
     $data = [
        'kode_pesanan' =>$request->kode_pesanan,
        'jenis_cucian' =>$request->jenis_cucian,
        'kategori_cucian' =>$request->kategori_cucian,
        'jumlah_cucian' =>$request->jumlah_cucian, 
        'harga_cucian' =>$request->harga_cucian,

     ];
     pesanan::create($data); 
     return redirect()->route('pesanan');   
   
     }
     public function edit($id){
        $pesanan =pesanan::find($id);

        return view ('pesanan.form',['pesanan'=>$pesanan]); 

     }
     public function update($id,Request $request){
        $data = [
            'kode_pesanan' =>$request->kode_pesanan,
            'jenis_cucian' =>$request->jenis_cucian,
            'kategori_cucian' =>$request->kategori_cucian,
            'jumlah_cucian' =>$request->jumlah_cucian,
            'harga_cucian' =>$request->harga_cucian,
        ];
        pesanan::find($id)->update($data);
        return redirect()->route('pesanan');

     }
     public function hapus($id)  {
     pesanan::find($id)->delete();
     return redirect()->route('pesanan'); 
     }
   
     
}
