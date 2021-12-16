<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->integer('area')->nullable();
            $table->integer('position1_id')->nullable();
            $table->integer('position2_id')->nullable();
            $table->integer('position3_id')->nullable();
            $table->date('login_date')->nullable();
            $table->string('img_url')->nullable();
            $table->string('introduction')->nullable();
            $table->string('team_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
