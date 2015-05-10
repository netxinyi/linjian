<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Model\Category;
use App\Services\Pagination;
use Illuminate\Http\Request;
use Input;
use DB;
class CategoryController extends Controller {


	public function showList()
	{

        $categories = Category::with('products')->paginate(15);

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

    public function doAdd(Request $request)
    {
        $this->validate($request, [
            'cat_name' => 'required|unique:category'
        ]);

        if(CategoryService::addCategory($request->all())){
            return redirect()->route('admin.category.add')->with('success', '分类添加成功！');
        }
        return redirect()->route('admin.category.add')->withErrors('抱歉，添加失败')->withInput();
    }

	public function showEdit(Category $category)
	{
		return view('admin.category.edit')->with(array(
            'category_id'   =>  $category->category_id,
            'cat_name'     =>  $category->cat_name,
            'cat_description' => $category->cat_description
        ));
	}

    public function doEdit(Category $category,Request $request)
    {
        if($request->input('cat_name') != $category->cat_name){
            $this->validate($request, [
                'cat_name' => 'required|unique:category'
            ]);
        }
        $category->cat_name = $request->input('cat_name');
        $category->cat_description = $request->input('cat_description');

        if($category->save()){
            return redirect()->route('admin.category.edit',array($category))->with('success', '分类修改成功！');
        }
        return redirect()->route('admin.category.edit',array($category))->withErrors('抱歉，修改失败')->withInput();
    }

    public function doDelete(Category $category)
    {


        if($category->productNumber() > 0){
           // dd('该分类有产品不能删除');
            return redirect()->route('admin.category')->with('error','抱歉，该分类有产品不能删除');

        }elseif($category->delete()){
            return redirect()->route('admin.category')->with('success','删除成功');
        }else{
            dd('删除失败');
            return redirect()->route('admin.category')->with('error','抱歉，删除失败');
        }
    }
    public function __destruct(){

    }
}


