<?php namespace App\Services;

use App\Model\Category;
use PhpSpec\Exception\Exception;

class CategoryService extends ModelService{

    public static function addCategory(array $catInfo){
        return  Category::create(array(
            'cat_name'  =>  $catInfo['cat_name'],
            'cat_description'=>$catInfo['cat_description'] ?: ''
        ));
    }

}
