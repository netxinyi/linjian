<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends BaseModel  {

	use SoftDeletes;

	protected $table = 'order';

	protected $primaryKey = 'order_id';
	

}
