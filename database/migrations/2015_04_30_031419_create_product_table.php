<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//产品表
		Schema::create('product', function (Blueprint $table) {

			$table->increments('product_id')->comment('产品ID');
			$table->string('name')->comment('产品名称');
			$table->string('title')->comment('副标题');
			$table->longText('description')->comment('产品详细描述');
			$table->unsignedInteger('category_id')->comment('分类ID');
			$table->enum('status',array(0,1,2,3,4,5))->comment('状态');
			$table->decimal('price')->comment('价格');

			$table->comment = '产品表';
			$table->engine  = 'InnoDB';

			//时间维护
			$table->timestamps();
			//软删除
			$table->softDeletes();
			$table->index(array('category_id','status'));

		});
		//属性表
		Schema::create('attribute', function (Blueprint $table) {

			$table->increments('attr_id')->comment('属性ID');
			$table->string('attr_name')->comment('属性名称');
			//1:单行输入框
			//2:单选按钮
			//3:复选按钮
			//4:单选下拉菜单
			//5:多选下拉菜单
			$table->enum('attr_type',array(1,2,3,4,5))->default(1)->comment('录入类型');

			$table->text('attr_values')->nullable()->comment('默认值列表');

			$table->comment = '属性表';
			$table->engine  = 'MyISAM';

		});

		//产品属性表
		Schema::create('product_attr', function (Blueprint $table) {

			$table->increments('id');
			$table->unsignedInteger('product_id')->comment('产品ID');
			$table->unsignedInteger('attr_id')->comment('属性ID');
			$table->string('attr_value')->comment('值');
			$table->unsignedInteger('link_product')->nullable()->comment('关联产品ID');


			$table->comment = '产品属性表';
			$table->engine  = 'InnoDB';
			$table->index(array('product_id','attr_id'));
			//外键
			$table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade');
		});

		//分类表
		Schema::create('category', function (Blueprint $table) {

			$table->increments('category_id');
			$table->string('cat_name',60)->comment('分类名称');
			$table->text('cat_description')->default('')->comment('分类简介');

			$table->comment = '分类表';
			$table->engine  = 'MyISAM';

			$table->foreign('category_id')->references('category_id')->on('product')->onDelete('restrict');
		});



	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
		Schema::drop('attribute');
		Schema::drop('product_attr');
		Schema::drop('category');
	}

}
