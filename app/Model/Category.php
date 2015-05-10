<?php namespace App\Model;

use DB;

class Category extends BaseModel {



	protected $table = 'category';
    public $timestamps = false;
	protected $primaryKey = 'category_id';
    protected $fillable  = array('cat_name', 'cat_description');


    public function products(){
        return $this->hasMany('App\Model\Product');
    }


}
