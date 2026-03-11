<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budiarjo', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => Carbon::parse('2026-03-01 10:00:00')],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Siti Aminah', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => Carbon::parse('2026-03-01 11:30:00')],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Agus Salim', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => Carbon::parse('2026-03-01 13:15:00')],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Wahyudi', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => Carbon::parse('2026-03-01 14:45:00')],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Dina Mariana', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => Carbon::parse('2026-03-01 16:20:00')],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Hendra', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => Carbon::parse('2026-03-02 09:10:00')],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Rina', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => Carbon::parse('2026-03-02 10:25:00')],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Surya', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => Carbon::parse('2026-03-02 13:40:00')],
            ['penjualan_id' => 9, 'user_id' => 2, 'pembeli' => 'Lestari', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => Carbon::parse('2026-03-02 15:05:00')],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Joko', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => Carbon::parse('2026-03-02 16:50:00')],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
