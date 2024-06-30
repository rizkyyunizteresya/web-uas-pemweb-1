@extends('layouts.app')
@section('title', 'Data Pesanan')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pesanan laundry</h6>
    </div>
    <div class="card-body">
        <a href="{{route('pesanan.tambah')}}" class="btn btn-primary mb-3">Tambah Pesanan </a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        @if (auth()->user()->level == 'Admin')
                        <th>Kode Pesanan</th>
                        @endif
                        <th>Jenis Cucian</th>
                        <th>Kategori Cucian</th>
                        <th>Jumlah Cucian</th>
                        @if (auth()->user()->level == 'Admin')
                            <th>Harga Cucian</th>
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($data as $row) 
                    <tr>
                        <th> {{ $no++ }}</th> 
                        @if (auth()->user()->level == 'Admin')
                        <td>{{ $row->kode_pesanan }} </td>  
                        @endif
                        <td>{{ $row->jenis_cucian }} </td> 
                        <td>{{ $row->kategori_cucian}} </td> 
                        <td>{{ $row->jumlah_cucian}} </td> 
                        @if (auth()->user()->level == 'Admin')
                        <td>{{ $row->harga_cucian}} </td>
                        @endif 

                        @if (auth()->user()->level == 'Admin')
                        <td>
                            <a href="{{ route('pesanan.edit', $row->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('pesanan.hapus', $row->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>                        
                    @endif
                        
                    </tr>
           
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection

