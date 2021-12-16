<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id');
            $table->integer('user_id');
            $table->string('game_title')->nullable();
            $table->string('game_contents');
            $table->string('image_url')->nullable();
            $table->date('game_date');
            $table->time('game_time')->nullable();
            $table->integer('prefecture_id');
            $table->integer('municipalities_id')->nullable();
            $table->integer('recruitment_period')->nullable();
            $table->time('deleted_at')->nullable();
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
        Schema::dropIfExists('recruitment_games');
    }
}
