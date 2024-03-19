<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(LangSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(PurposeSeeder::class);
    }
}
