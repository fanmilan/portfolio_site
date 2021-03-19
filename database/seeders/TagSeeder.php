<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        DB::table('tags')->insert(
            [
                [
                    'name' => 'React',
                ],
                [
                    'name' => 'JavaScript',
                ],
                [
                    'name' => 'Laravel',
                ],
                [
                    'name' => 'PHP',
                ],
            ]
        );

    }
}
