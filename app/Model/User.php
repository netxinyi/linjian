<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enum\UserEnum;

class User extends BaseModel  {

	use SoftDeletes;

	protected $table = 'user';

	protected $primaryKey = 'user_id';
	protected $guarded = [];



}
