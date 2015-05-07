<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enum\UserEnum;

class UserInfo extends BaseModel  {



	protected $table = 'user_info';

	protected $primaryKey = 'user_id';
	public $timestamps = false;



}
