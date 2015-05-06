<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel  {

	use SoftDeletes;

	protected $table = 'user';

	protected $primaryKey = 'user_id';


	public function __construct(){
		self::creating(function($user){
			dd($user);
			$user->last_signin = date('Y-m-d H:i:s',time());
		});
	}


}
