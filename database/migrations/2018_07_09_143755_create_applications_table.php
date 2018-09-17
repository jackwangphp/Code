<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');//1.国家级 2.北京市级
            $table->year('year');
            $table->string('name');//项目名称
            $table->string('leader_id');//项目负责人学号
            $table->string('leader');//负责人
            $table->string('grade');//年级
            $table->string('major');//专业
            $table->string('college');//学院
            $table->string('department');//学部
            $table->string('leader_phone');//负责人手机
            $table->string('leader_email');//负责人邮箱
            $table->string('outlay');//申请经费
            $table->date('begin_time');//开始时间
            $table->date('end_time');//结束时间
            $table->string('team_id');//团队id
            $table->string('team_info');//团队信息
            $table->longText('reason');//申请原因
            $table->longText('plan');//项目方案
            $table->longText('result');//预期成果
            $table->longText('outlay_detail');//经费预算
            $table->string('proposal_t')->default('');//导师建议
            $table->string('proposal_d')->default('');//学院建议
            $table->string('proposal_u')->default('');//学校建议
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
        Schema::dropIfExists('applications');
    }
}
