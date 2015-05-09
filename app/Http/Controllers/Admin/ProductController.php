<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Services\UserService;

use App\Services\Pagination;
use DB;

class ProductController extends Controller {


	public function showList()
	{
        DB::enableQueryLog();
        $product_list = Product::with('attrs','category')->paginate(15);
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

    public function __destruct(){

    }
}


