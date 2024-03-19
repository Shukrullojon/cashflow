<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Uz',
                'status' => 1,
            ],
            [
                'name' => 'Ru',
                'status' => 1,
            ],
            [
                'name' => 'Eng',
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Lang::create($data);
        }
    }
}
