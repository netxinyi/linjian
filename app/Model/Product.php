<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends BaseModel {

	use SoftDeletes;

	protected $table = 'product';

	protected $primaryKey = 'product_id';


}
