<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//订单表
		Schema::create('order', function(Blueprint $table)
		{
			$table->increments('order_id')->comment('订单ID');
			$table->unsignedInteger('user_id')->comment('用户ID');

			$table->string('order_sn',16)->comment('订单号');
			$table->decimal('origin_price')->comment('原总价');
			$table->decimal('price')->comment('真实总价');

			//1.已完成
			//2.已取消
			//3.待付款
			//4.待发货
			//5.待确认收货
			$table->enum('status',array(1,2,3,4,5))->comment('订单状态');
			//0.未评价
			//1.已评价
			$table->enum('comment_status',array(0,1))->default(0)->comment('评价');
			$table->tinyInteger('ship_id')->comment('快递ID');	//枚举
			$table->decimal('ship_price')->default(0)->comment('运费');
			$table->tinyInteger('pay_id')->comment('支付方式ID');
			$table->decimal('paid')->default(0)->comment('已支付多少');
			//时间维护
			$table->timestamps();
			//软删除
			$table->softDeletes();

			$table->index(array('user_id','order_sn','status'));
			$table->unique('order_sn');

			$table->comment = '订单表';
			$table->engine = 'InnoDB';
		});
		//订单商品表
		Schema::create('order_product',function(Blueprint $table){

			$table->increments('id');
			$table->unsignedInteger('order_id')->comment('订单ID');
			$table->unsignedInteger('product_id')->comment('产品ID');
			$table->string('product_name')->comment('产品标题');
			$table->decimal('origin_price')->comment('产品原价格');
			$table->decimal('price')->comment('优惠后价格');
			$table->string('product_attr')->default('')->comment('属性信息');

			$table->index(array('order_id','product_id'));
			$table->comment = '订单商品表';
			$table->engine  = 'InnoDB';

			$table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
		});
		//订单操作表
		Schema::create('order_action',function(Blueprint $table){
			$table->increments('id');
			$table->unsignedInteger('order_id')->comment('订单表');
			$table->unsignedInteger('user_id')->comment('操作人');
			//1.创建订单
			//2.付款
			//3.发货
			//4.确认收货
			//5.已完成
			//6.已取消
			//7.已关闭
			//8.修改价格
			//9.修改快递方式
			//10.修改支付方式
			$table->enum('action_type',array(1,2,3,4,5,6,7,8,9,10))->comment('操作类型');
			$table->string('action_info')->default('')->comment('操作信息');
			$table->timestamp('action_time')->comment('操作时间');

			$table->index(array('order_id','user_id'));
			$table->comment = '订单操作表';
			$table->engine  = 'InnoDB';

			$table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
		Schema::drop('order_product');
		Schema::drop('order_action');
	}

}
