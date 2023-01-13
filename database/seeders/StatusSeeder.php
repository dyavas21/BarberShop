<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'id_status' => '1',
            'nama_status' => 'Pending'
        ]);
        DB::table('statuses')->insert([
            'id_status' => '2',
            'nama_status' => 'Accepted'
        ]);
        DB::table('statuses')->insert([
            'id_status' => '3',
            'nama_status' => 'Rejected'
        ]);
    }
}
