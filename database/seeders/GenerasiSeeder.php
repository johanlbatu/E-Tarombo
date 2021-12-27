<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerasiSeeder extends Seeder
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

        DB::table('generasis')->insert([
            'nomor' => '1',
            'nama' => 'Johan',
            'domisili' =>'Medan',
            'created_at' => $createdDate,
            'updated_at' => $createdDate
        ]);
    }
}
