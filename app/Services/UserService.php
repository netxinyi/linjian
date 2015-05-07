<?php namespace App\Services;


use App\Enum\UserEnum;
use App\Model\User;
use App\Model\UserInfo;
use PhpSpec\Exception\Exception;

class UserService extends ModelService{


	private static function mkPassword($password){
		return md5(bcrypt($password));
	}


	public static function addUser($user_name,$email,$mobile,$password,array $user_info = array()){
		try{
			self::beginTransaction();
			$user = User::create(array(
				'user_name'		=>	$user_name,
				'email'			=>	$email,
				'mobile'		=>	$mobile,
				'password'		=>	self::mkPassword($password),
				'last_signin'	=>	date('Y-m-d H:i:s', time()),
				'from'			=>	UserEnum::FROM_SITE
			));
			$user_info['user_id']	=	$user->user_id;
			$userInfo = UserInfo::create($user_info);
			self::commit();

		}catch (Exception $error){
			self::rollback();
			throw $error;

		}



	}
}
