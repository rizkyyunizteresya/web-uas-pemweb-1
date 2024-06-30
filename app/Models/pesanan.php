<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    
    protected $table ='datapelanggan'; 
    protected $fillable = ['kode_pesanan','jenis_cucian','kategori_cucian','jumlah_cucian','harga_cucian']; 
}
