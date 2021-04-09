<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('front_blocks')->insert([
            'id'=>1,
            'name' => 'Слайдер',
            'editable' => 0,
            'disabled' => 0,
            'sort_id' => 1,
        ]);*/

        DB::table('block_items')->insert([
            'front_block_id'=>1,
            'type'=>2,
            'params'=>'[
   {
      "background":"https://fengyuanchen.github.io/cropperjs/images/picture.jpg",
      "backgroundCropped":"https://fengyuanchen.github.io/cropperjs/images/picture.jpg",
      "text":"<span class=\"ql-size-huge\">{{ТЕКСТ ПРОВЕРКА}}</span>",
      "aspectRatio":1
   }
]',
            'sort_id' => 1,
        ]);
    }
}
