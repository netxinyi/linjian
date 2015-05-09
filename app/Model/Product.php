<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lang;

class Product extends BaseModel {

	use SoftDeletes;

	protected $table = 'product';

	protected $primaryKey = 'product_id';

    protected $casts = array(
        'price' =>  'double'
    );


	public function category(){
		return $this->belongsTo('App\Model\Category');
	}

    public function attrs(){
        return  $this->hasMany('App\Model\ProductAttr');
    }

    public function attr($id, $default = '未知'){
        if(!$this->attrs){
            $this->attrs = $this->attrs();
        }
        foreach($this->attrs as $key=>$attr){
            if($attr->attr_id == $id){
                return $attr->attr_value;
            }
        }
        return $default;
    }

    public function status_lang($default = '未知'){
        if($this->status && Lang::has('product.status_'.$this->status)){
            return Lang::get('product.status_'.$this->status);
        }
        return $default;
    }
}
