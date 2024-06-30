<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('datapelanggan')->insert([
            [
                'kode_pesanan' => 'KP001',
                'jenis_cucian' => 'Pakaian',
                'kategori_cucian' => 'Cuci Kering',
                'jumlah_cucian' => '10',
                'harga_cucian' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP002',
                'jenis_cucian' => 'Selimut',
                'kategori_cucian' => 'Cuci Basah',
                'jumlah_cucian' => '5',
                'harga_cucian' => 70000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP003',
                'jenis_cucian' => 'Gorden',
                'kategori_cucian' => 'Cuci Setrika',
                'jumlah_cucian' => '3',
                'harga_cucian' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP004',
                'jenis_cucian' => 'Pakaian',
                'kategori_cucian' => 'Cuci Lipat',
                'jumlah_cucian' => '8',
                'harga_cucian' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP005',
                'jenis_cucian' => 'Karpet',
                'kategori_cucian' => 'Cuci Basah',
                'jumlah_cucian' => '2',
                'harga_cucian' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP006',
                'jenis_cucian' => 'Pakaian',
                'kategori_cucian' => 'Cuci Setrika',
                'jumlah_cucian' => '15',
                'harga_cucian' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP007',
                'jenis_cucian' => 'Jas',
                'kategori_cucian' => 'Cuci Kering',
                'jumlah_cucian' => '1',
                'harga_cucian' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP008',
                'jenis_cucian' => 'Boneka',
                'kategori_cucian' => 'Cuci Basah',
                'jumlah_cucian' => '4',
                'harga_cucian' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP009',
                'jenis_cucian' => 'Gorden',
                'kategori_cucian' => 'Cuci Setrika',
                'jumlah_cucian' => '6',
                'harga_cucian' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_pesanan' => 'KP010',
                'jenis_cucian' => 'Pakaian',
                'kategori_cucian' => 'Cuci Lipat',
                'jumlah_cucian' => '12',
                'harga_cucian' => 72000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
