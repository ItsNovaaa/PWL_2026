<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori 1: Elektronik
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'TV01', 'barang_nama' => 'Televisi Samsung 32"', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'HP01', 'barang_nama' => 'Smartphone Xiaomi', 'harga_beli' => 1500000, 'harga_jual' => 1800000],

            // Kategori 2: Pakaian
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'KS01', 'barang_nama' => 'Kaos Polos Hitam', 'harga_beli' => 30000, 'harga_jual' => 50000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'CL01', 'barang_nama' => 'Celana Jeans Pria', 'harga_beli' => 100000, 'harga_jual' => 150000],

            // Kategori 3: Makanan
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'RT01', 'barang_nama' => 'Roti Tawar Sari Roti', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'CK01', 'barang_nama' => 'Cokelat Silverqueen', 'harga_beli' => 15000, 'harga_jual' => 20000],

            // Kategori 4: Minuman
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'AM01', 'barang_nama' => 'Air Mineral Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'KP01', 'barang_nama' => 'Kopi Good Day Botol', 'harga_beli' => 5000, 'harga_jual' => 7000],

            // Kategori 5: Buku & Alat Tulis
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BK01', 'barang_nama' => 'Buku Tulis Sinar Dunia', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'PL01', 'barang_nama' => 'Pulpen Standard AE7', 'harga_beli' => 1500, 'harga_jual' => 2500],
        ];

        DB::table('m_barang')->insert($data);
    }
}
