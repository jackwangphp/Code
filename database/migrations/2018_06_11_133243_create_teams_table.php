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
            $table->string('teamid');//团队标识
            $table->string('projectid');
            $table->year('year');
            $table->string('userid')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('inteam');//1.负责人，2.指导老师，3.普通成员
            $table->json('info');
            $table->string('type');//1.国家级，2.北京市级
            $table->string('cellphone')->default('');
            $table->string('is_active')->default('');
            $table->string('token')->default('');
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
