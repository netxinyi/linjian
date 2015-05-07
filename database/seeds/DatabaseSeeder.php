<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Category;
use App\Model\Product;
use App\Model\Attribute;
use App\Model\ProductAttr;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


//		//添加默认账号
//		User::create(array(
//			'user_name'	=>	'vision',
//			'email'		=>	'521287718@qq.com',
//			'mobile'	=>	'17090025057',
//			'password'	=>	bcrypt('123456'),
//			'from'		=>	1
//		));
//		//添加分类
//		Category::create(array(
//			'cat_name'	=>	'默认分类',
//			'cat_description'	=>	'这是第一个分类'
//		));
//		//添加产品属性
//		Attribute::create(array(
//			'attr_name'	=>	'色系',
//			'attr_type' =>	4,
//			'attr_values'	=>	'蓝色系#_#绿色系'
//		));
//		//添加产品
//		Product::create(array(
//			'name'	=>	'蓝色系一枚',
//			'title' =>	'第一个产品',
//			'description'	=>	'才6个月',
//			'category_id'	=>	1,
//			'status'	=>	1,
//			'price'		=>	68.68
//		));

	}

}
