<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttr extends BaseModel {



	protected $table = 'product_attr';

	protected $primaryKey = 'id';



    public function product(){
        return $this->belongsTo('App\Model\Poroduct');
    }
}
