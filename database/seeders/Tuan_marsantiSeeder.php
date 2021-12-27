<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tuan_marsantiSeeder extends Seeder
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

        DB::table('tuan_marsantis')->insert([
            'nomor' => '1',
            'nama' => 'Op.Pangan Bolon',
            'deskripsi' =>'',
            'created_at' => $createdDate,
            'updated_at' => $createdDate
        ]);
    }
}
