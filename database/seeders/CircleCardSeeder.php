<?php

namespace Database\Seeders;

use App\Models\CircleCard;
use Illuminate\Database\Seeder;

class CircleCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 1,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 3,
                'salary' => 1,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 1,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 4,
                'salary' => 1,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 1,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 1,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
            [
                'circle_id' => 1,
                'card_id' => 2,
                'salary' => 0,
                'start' => 0,
                'status' => 1
            ],
        ];
        foreach ($datas as $data){
            CircleCard::create($data);
        }
    }
}
