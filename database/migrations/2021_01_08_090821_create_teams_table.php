<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('team_translations', function (Blueprint $table) {
            // required field
            $table->id();
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('team_id');
            $table->unique(['team_id','locale']);
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

            //fields for translation
            $table->string('name');
            $table->string('slug');
            $table->string('position');
            $table->longText('bio');
            $table->longText('days');
            $table->longText('activity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
