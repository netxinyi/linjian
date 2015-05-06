<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;

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


	}
}


