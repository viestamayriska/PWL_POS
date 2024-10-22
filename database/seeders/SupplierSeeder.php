<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'id' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
