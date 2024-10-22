<?php

namespace Database\Seeders;

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
        $now = Carbon::now();

        // $data = [
        //     [
        //         'user_id' => 1,
        //         'pembeli' => 'John Doe',
        //         'penjualan_kode' => 'PJ001',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 2,
        //         'pembeli' => 'Jane Smith',
        //         'penjualan_kode' => 'PJ002',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 1,
        //         'pembeli' => 'Bob Johnson',
        //         'penjualan_kode' => 'PJ003',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 3,
        //         'pembeli' => 'Alice Williams',
        //         'penjualan_kode' => 'PJ004',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 2,
        //         'pembeli' => 'Chris Brown',
        //         'penjualan_kode' => 'PJ005',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 1,
        //         'pembeli' => 'Emma Davis',
        //         'penjualan_kode' => 'PJ006',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 3,
        //         'pembeli' => 'Michael Miller',
        //         'penjualan_kode' => 'PJ007',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 2,
        //         'pembeli' => 'Sophia Garcia',
        //         'penjualan_kode' => 'PJ008',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 1,
        //         'pembeli' => 'James Martinez',
        //         'penjualan_kode' => 'PJ009',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'user_id' => 3,
        //         'pembeli' => 'Olivia Taylor',
        //         'penjualan_kode' => 'PJ010',
        //         'penjualan_tanggal' => $now,
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        // ];

        // DB::table('t_penjualan')->insert($data);
    }
}
