<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatauserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datausers')->insert([
            'nama' => 'Fhahroul rozi',
            'alamat' => 'Tangerang',
            'email' => 'fahrul@gmail.com'
        ]);
    }
}
