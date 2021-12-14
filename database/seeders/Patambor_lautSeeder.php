<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class Patambor_lautSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->modify('-2 year');
        $createdDate = clone($date);

        DB::table('patambor_lauts')->insert([
            'nomor' => '1',
            'nama' => 'Op.Tinggi',
            'deskripsi' =>'',
            'created_at' => $createdDate,
            'updated_at' => $createdDate
        ]);
    }
}
