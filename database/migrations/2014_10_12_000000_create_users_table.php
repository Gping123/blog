<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->comment('用户名称');
            $table->string('email')->unique()->comment('用户邮件');
            $table->string('password')->comment('用户密码');
            $table->tinyInteger('gender')->default(1)->comment('性别[1=>"男",0=>"女"]');
            $table->string('avatar')->default('vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg')->comment('用户头像');
            $table->string('remark')->nullable()->comment('备注信息');
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
        Schema::dropIfExists('users');
    }
}
