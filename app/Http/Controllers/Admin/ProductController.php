<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use App\Model\Attribute;
use App\Services\Pagination;
use App\Enum\ProductEnum;
use DB;

class ProductController extends Controller {


	public function showList()
	{
        $product_list = Product::with('attrs','category')->paginate(15);
        $pagination = new Pagination($product_list);
		return view('admin.product.list')->with(array(
            'product_list'  => $product_list,
            'pagination'    =>  $pagination
        ));
	}

	public function showAdd()
	{
        $categories = Category::all();
        $status = ProductEnum::$status_lang;
        $attributes = Attribute::all();
		return view('admin.product.add',compact('categories','status','attributes'));
	}

	public function showEdit(Product $product)
	{
		return view('admin.product.add')->with(compact($product));
	}

    public function showAttr(){

        $attrs_list = Attribute::pagination(15);
        $pagination = new Pagination($attrs_list);
        return view('admin.product.attr')->with(array(
            'pagination'        =>  $pagination,
            'attrs_list'        =>  $attrs_list
        ));
    }
    public function __destruct(){

    }
}


