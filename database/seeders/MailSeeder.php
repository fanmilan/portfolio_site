<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mails')->delete();

        DB::table('mails')->insert(
            [
                [
                    'email' => 'fanmilan007@gmail.com',
                    'comment' => 'Отправлено'
                ],
                [
                    'email' => 'example@example.ru',
                    'comment' => 'Отправлено автоматически'
                ],
            ]
        );

    }
}
