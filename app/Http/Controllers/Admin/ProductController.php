<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Services\Pagination;

class ProductController extends Controller {


	public function showList()
	{
        $product_list = Product::paginate(1);
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


	}
}


