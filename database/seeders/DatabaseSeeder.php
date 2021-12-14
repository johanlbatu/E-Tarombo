<?php

namespace Database\Seeders;

use App\Models\Tuan_Marsanti;
use App\Models\Tuan_marsantis;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenerasiSeeder::class);
        $this->call(Patambor_lautSeeder::class);
        $this->call(Tuan_marsantiSeeder::class);

    }
}
