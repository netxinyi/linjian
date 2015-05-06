<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel  {

	use SoftDeletes;

	protected $table = 'user';

	protected $primaryKey = 'user_id';


}
