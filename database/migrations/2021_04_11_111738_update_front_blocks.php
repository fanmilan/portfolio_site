<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFrontBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('front_blocks');
        Schema::create('front_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->unsignedTinyInteger('sort_id')->default(1);
            $table->unsignedTinyInteger('type')->default(1);
            $table->boolean('disabled')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_blocks');
    }
}
