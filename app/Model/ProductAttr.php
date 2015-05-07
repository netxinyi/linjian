<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttr extends BaseModel {

	use SoftDeletes;

	protected $table = 'product_attr';

	protected $primaryKey = 'id';



}
