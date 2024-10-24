<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'kategori_kode' => 'SNK',
                'kategori_nama' => 'Snack/Makanan Ringan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'MIN',
                'kategori_nama' => 'Minuman',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'OBT',
                'kategori_nama' => 'Obat-Obatan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'PRL',
                'kategori_nama' => 'Peralatan Rumah',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'ELE',
                'kategori_nama' => 'Elektronik',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'FAS',
                'kategori_nama' => 'Fashion',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'KRP',
                'kategori_nama' => 'Keripik',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'BKS',
                'kategori_nama' => 'Buku',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'KLG',
                'kategori_nama' => 'Kelengkapan Gaming',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_kode' => 'KRM',
                'kategori_nama' => 'Kramik',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
