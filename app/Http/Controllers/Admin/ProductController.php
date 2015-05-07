<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Services\UserService;

use App\Services\Pagination;


class ProductController extends Controller {


	public function showList()
	{

		UserService::addUser('vision','vision.shi@yunzhihui.com','17090025057','123456');

        $product_list = Product::paginate(15);
        $pagination = new Pagination($product_list);
		return view('admin.product.list')->with(array(
            'product_list'  => $product_list,
            'pagination'    =>  $pagination
        ));
	}

	public function showAdd()
	{
		return view('admin.product.add');
	}

	public function showEdit(Product $product)
	{
		return view('admin.product.add')->with(compact($product));
	}
}


