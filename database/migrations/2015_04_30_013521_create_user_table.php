<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enum\UserEnum;

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
			$table->tinyInteger('from')->default(1)->comment('来源');
			$table->timestamp('last_signin')->comment('最后登录时间');
			$table->rememberToken()->comment('token');
			//时间维护
			$table->timestamps();
			//软删除
			$table->softDeletes();

			$table->index('user_name');
			$table->unique(array('user_name','email','mobile'));

			$table->comment = '用户表';
			$table->engine = 'InnoDB';


		});
		//用户资料表
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->unsignedInteger('user_id')->comment('用户ID');
			//0.女
			//1.男
			//2.保密
			$table->enum('sex', array(UserEnum::SEX_FEMALE,UserEnum::SEX_MALE,UserEnum::SEX_UNKNOWN))->default(UserEnum::SEX_UNKNOWN)->comment('性别');

			$table->string('qq', 12)->nullable()->comment('QQ号');
			$table->string('province', 100)->nullable()->comment('省份');
			$table->string('city', 100)->nullable()->comment('城市');
			$table->string('address')->nullable()->comment('详细地址');

			$table->comment = '用户信息表';
			$table->engine = 'InnoDB';

			//主键
			$table->primary('user_id');
			//外键
			$table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');

		});
		//token表
		Schema::create('tokens', function (Blueprint $table) {

			$table->increments('id');
			//1.激活
			//2.改密码
			$table->enum('type',array(UserEnum::TOKEN_TYPE_EMAIL,UserEnum::TOKEN_TYPE_MOBILE,UserEnum::TOKEN_TYPE_UPPWD))->comment('类型');
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
