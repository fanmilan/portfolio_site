<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        DB::table('projects')->insert(
            [
                [
                    'name' => 'Игра "Змейка" на чистом JS',
                    'description'=>'Игра змейка в качестве обучения'
                ],
                [
                    'name' => 'Конвертер Деклараций',
                    'description'=>'Используется на variant63'
                ],
                [
                    'name' => 'Сайт GameMovie',
                    'description'=>'Игра угадай постер'
                ],
                [
                    'name' => 'Интерфейс поиска для каталога',
                    'description'=>'Селектор и вводе числового промежутка'
                ],
            ]
        );
    }
}
