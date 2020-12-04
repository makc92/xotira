<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeteransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veterans', function (Blueprint $table) {
            $table->id();

            $table->string('thumbnail');
            $table->string('region');
            $table->timestamps();
        });
        Schema::create('veteran_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale')->index();
            $table->unsignedBigInteger('veteran_id');
            $table->unique(['veteran_id','locale']);
            $table->foreign('veteran_id')->references('id')->on('veterans')->onDelete('cascade');

            $table->string('name');
            $table->string('slug');
            $table->string('description');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veteran_translations');
        Schema::dropIfExists('veterans');
    }
}
