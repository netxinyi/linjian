<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\User;

class ProductController extends Controller {


	public function showList()
	{

		return view('admin.product.list');
	}

	public function showAdd()
	{
		return view('admin.product.add');
	}

	public function showEdit(Product $product)
	{
		$product->category;
		User::create(array(
			'user_name'	=>	'vision'.rand(1,9999),
			'email'		=>	'521287718@qq.com'.rand(1,9999),
			'mobile'	=>	'17090025057'.rand(1,9999),
			'password'	=>	bcrypt('123456'),
			'from'		=>	1
		));
		return view('admin.product.add')->with(compact($product));
	}
}


