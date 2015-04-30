<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//用户表
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('user_id')->comment('用户ID');
			$table->string('user_name',60)->comment('用户名');
			$table->string('email',100)->comment('用户邮箱');
			$table->string('mobile',11)->comment('用户手机号');
			$table->string('password', 60)->comment('用户密码');
			$table->tinyInteger('from')->default(0)->comment('来源');
			$table->timestamp('last_signin')->comment('最后登录时间');
			$table->rememberToken()->comment('token');
			$table->timestamps();

			$table->index('user_name');
			$table->unique(array('user_name','email','mobile'));

			$table->comment = '用户表';
			$table->engine = 'InnoDB';


		});
		//用户资料表
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->increments('user_id')->comment('用户ID');
			//0.女
			//1.男
			//2.保密
			$table->enum('sex', array(0,1,2))->default(2)->comment('性别');

			$table->string('qq', 12)->default('')->comment('QQ号');
			$table->string('province', 100)->default('')->comment('省份');
			$table->string('city', 100)->default('')->comment('城市');
			$table->string('address')->default('')->comment('详细地址');

			$table->comment = '用户信息表';
			$table->engine = 'InnoDB';
			//外键
			$table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');

		});
		//token表
		Schema::create('tokens', function (Blueprint $table) {

			$table->increments('id');
			//1.激活
			//2.改密码
			$table->enum('type',array(1,2))->comment('类型');
			$table->string('email')->comment('邮箱');
			$table->string('token')->comment('令牌');

			$table->comment = 'token表';
			$table->engine  = 'InnoDB';

			$table->index('email');
			$table->unique('token');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
		Schema::drop('user_info');
		Schema::drop('tokens');
	}

}
