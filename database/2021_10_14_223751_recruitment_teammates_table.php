<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecruitmentTeammatesTable extends Migration
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
            $table->string('recruit_title')->nullable();
            $table->string('recruit_contents');
            $table->integer('position1_id');
            $table->integer('position2_id')->nullable();
            $table->integer('position3_id')->nullable();
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
        Schema::dropIfExists('recruitment_teammate');
    }
}
