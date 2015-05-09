<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Services\Pagination;


class CategoryController extends Controller {


	public function showList()
	{



        $categories = Category::paginate(15);
        $pagination = new Pagination($categories);
		return view('admin.category.list')->with(array(
            'categories'  => $categories,
            'pagination'    =>  $pagination
        ));
	}

	public function showAdd()
	{
		return view('admin.category.add');
	}

	public function showEdit(Product $product)
	{
		return view('admin.category.add')->with(compact($product));
	}

    public function __destruct(){

    }
}


