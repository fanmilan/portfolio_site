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
                    'description'=>'Игра змейка была написана на чистом JS в качестве практики и развлечения. Задача игрока съесть как можно больше яблок, и не врезаться в свой хвост. С  каждым съеденным яблоком размер змеи увеличивается. Управление происходит стрелками клавиатуры.',
                    'code'=>'snake'
                ],
                [
                    'name' => 'Конвертер Деклараций',
                    'description'=>'Используется на variant63',
                    'dec_converter'
                ],
                [
                    'name' => 'Сайт GameMovie',
                    'description'=>'Игра угадай постер',
                    'gamemovie'
                ],
                [
                    'name' => 'Интерфейс поиска для каталога',
                    'description'=>'Селектор и вводе числового промежутка',
                    'search_artmx'
                ],
            ]
        );
    }
}
