<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('teamid')->unique();//团队标识
            $table->string('projectid');
            $table->year('year');
            $table->string('userid')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('inteam');//1.负责人，2.普通成员，3.指导老师
            $table->json('info');
            $table->string('type');
            $table->string('cellphone')->default('');
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
        Schema::dropIfExists('teams');
    }
}
