<?php

namespace Database\Seeders;

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
        $this->call(AdminSeeder::class);
        $this->call(AdminUnitSeeder::class);
        $this->call(FakultasSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(DosenSeeder::class);
    }
}
