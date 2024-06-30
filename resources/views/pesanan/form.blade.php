
@extends('layouts.app')
@section('title','form pesanan')
@section('contents')
<form action="{{ isset($pesanan) ? route('pesanan.tambah.update', $pesanan->id) : route('pesanan.tambah.simpan') }}" method="post"> 
  @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($pesanan) ? 'Form Edit Pesanan' : 'Form Tambah Pesanan' }}</h6>
            </div>
            @if (auth()->user()->level == 'Admin')
                <div class="card-body">
                   <div class="form-group">
                        <label for="kode_pesanan">Kode Pesanan</label>
                        <input type="text" class="form-control" id="kode_pesanan" name="kode_pesanan" value="{{ isset ($pesanan) ? $pesanan->kode_pesanan: ''}}"> 
                      </div>
                      @endif
                      <div class="form-group">
                        <label for="jenis_cucian">Jenis Cucian</label>
                        <input type="text" class="form-control" id="jenis_cucian" name="jenis_cucian"value="{{ isset ($pesanan) ? $pesanan->jenis_cucian: ''}}"> 
                      </div> 
                      <div class="form-group">
                        <label for="kategori_cucian">Kategori Cucian</label>
                        <select class="form-control" id="kategori_cucian" name="kategori_cucian">
                            <option value="">Pilih Kategori Cucian</option>
                            <option value="cuci mamel" {{ isset($pesanan) && $pesanan->kategori_cucian == 'cuci mamel' ? 'selected' : '' }}>Cuci Mamel</option>
                            <option value="cuci kering" {{ isset($pesanan) && $pesanan->kategori_cucian == 'cuci kering' ? 'selected' : '' }}>Cuci Kering</option>
                            <option value="cuci setrika" {{ isset($pesanan) && $pesanan->kategori_cucian == 'cuci setrika' ? 'selected' : '' }}>Cuci Setrika</option>
                        </select>
                    </div>
                    
                      <div class="form-group">
                        <label for="jumlah_cucian">Jumlah Cucian</label>
                        <input type="text" class="form-control" id="jumlah_cucian" name="jumlah_cucian"value="{{ isset ($pesanan) ? $pesanan->jumlah_cucian: ''}}"> 
                      </div>   
                      @if (auth()->user()->level == 'Admin')
                      <div class="form-group">
                        <label for="harga_cucian">Harga Cucian</label>
                        <input type="number" class="form-control" id="harga_cucian" name="harga_cucian"value="{{ isset ($pesanan) ? $pesanan->harga_cucian: ''}}"> 
                      </div>  
                      @endif   
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">simpan</button> 
                </div>
        </div>
</div>
</form>
@endsection