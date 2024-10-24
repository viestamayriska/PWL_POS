<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     [
        //         'detail_id' => 1,
        //         'penjualan_id' => '001',
        //         'barang_id' => 1,
        //         'harga' => 25000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 2,
        //         'penjualan_id' => '001',
        //         'barang_id' => 2,
        //         'harga' => 35000,
        //         'jumlah' => 5,
        //     ],
        //     [
        //         'detail_id' => 3,
        //         'penjualan_id' => '001',
        //         'barang_id' => 3,
        //         'harga' => 30000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 4,
        //         'penjualan_id' => '002',
        //         'barang_id' => 4,
        //         'harga' => 3000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 5,
        //         'penjualan_id' => '002',
        //         'barang_id' => 5,
        //         'harga' => 15000,
        //         'jumlah' => 3,
        //     ],
        //     [
        //         'detail_id' => 6,
        //         'penjualan_id' => '002',
        //         'barang_id' => 6,
        //         'harga' => 10000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 7,
        //         'penjualan_id' => '003',
        //         'barang_id' => 7,
        //         'harga' =>50000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 8,
        //         'penjualan_id' => '003',
        //         'barang_id' => 8,
        //         'harga' => 70000,
        //         'jumlah' => 4,
        //     ],
        //     [
        //         'detail_id' => 9,
        //         'penjualan_id' => '003',
        //         'barang_id' => 9,
        //         'harga' => 350000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 10,
        //         'penjualan_id' => '004',
        //         'barang_id' => 10,
        //         'harga' => 35000,
        //         'jumlah' => 3,
        //     ],
        //     [
        //         'detail_id' => 11,
        //         'penjualan_id' => '004',
        //         'barang_id' => 11,
        //         'harga' => 25000,
        //         'jumlah' => 5,
        //     ],
        //     [
        //         'detail_id' => 12,
        //         'penjualan_id' => '004',
        //         'barang_id' => 12,
        //         'harga' => 350000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 13,
        //         'penjualan_id' => '005',
        //         'barang_id' => 13,
        //         'harga' => 1000,
        //         'jumlah' => 3,
        //     ],
        //     [
        //         'detail_id' => 14,
        //         'penjualan_id' => '005',
        //         'barang_id' => 14,
        //         'harga' => 3000,
        //         'jumlah' => 6,
        //     ],
        //     [
        //         'detail_id' => 15,
        //         'penjualan_id' => '005',
        //         'barang_id' => 15,
        //         'harga' => 2000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 16,
        //         'penjualan_id' => '006',
        //         'barang_id' => 1,
        //         'harga' => 25000,
        //         'jumlah' => 3,
        //     ],
        //     [
        //         'detail_id' => 17,
        //         'penjualan_id' => '006',
        //         'barang_id' => 2,
        //         'harga' => 35000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 18,
        //         'penjualan_id' => '006',
        //         'barang_id' => 3,
        //         'harga' => 40000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 19,
        //         'penjualan_id' => '007',
        //         'barang_id' => 4,
        //         'harga' => 3000,
        //         'jumlah' => 10,
        //     ],
        //     [
        //         'detail_id' => 20,
        //         'penjualan_id' => '007',
        //         'barang_id' => 5,
        //         'harga' => 15000,
        //         'jumlah' => 6,
        //     ],
        //     [
        //         'detail_id' => 21,
        //         'penjualan_id' => '007',
        //         'barang_id' => 6,
        //         'harga' => 10000,
        //         'jumlah' => 9,
        //     ],
        //     [
        //         'detail_id' => 22,
        //         'penjualan_id' => '008',
        //         'barang_id' => 7,
        //         'harga' => 50000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 23,
        //         'penjualan_id' => '008',
        //         'barang_id' => 8,
        //         'harga' => 70000,
        //         'jumlah' => 4,
        //     ],
        //     [
        //         'detail_id' => 24,
        //         'penjualan_id' => '008',
        //         'barang_id' => 9,
        //         'harga' => 350000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 25,
        //         'penjualan_id' => '009',
        //         'barang_id' => 10,
        //         'harga' => 35000,
        //         'jumlah' => 4,
        //     ],
        //     [
        //         'detail_id' => 26,
        //         'penjualan_id' => '009',
        //         'barang_id' => 11,
        //         'harga' => 25000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 27,
        //         'penjualan_id' => '009',
        //         'barang_id' => 12,
        //         'harga' => 350000,
        //         'jumlah' => 2,
        //     ],
        //     [
        //         'detail_id' => 28,
        //         'penjualan_id' => '010',
        //         'barang_id' => 13,
        //         'harga' => 1000,
        //         'jumlah' => 1,
        //     ],
        //     [
        //         'detail_id' => 29,
        //         'penjualan_id' => '010',
        //         'barang_id' => 14,
        //         'harga' => 3000,
        //         'jumlah' => 7,
        //     ],
        //     [
        //         'detail_id' => 30,
        //         'penjualan_id' => '010',
        //         'barang_id' => 15,
        //         'harga' => 2000,
        //         'jumlah' => 4,
        //     ],
        // ];
        // DB::table('t_penjualan_detail')->insert($data);
    }
}