<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


		App\Model\User::create(array(
			'user_name'	=>	'vision',
			'email'		=>	'521287718@qq.com',
			'mobile'	=>	'17090025057',
			'password'	=>	bcrypt('123456'),
			'from'		=>	1
		));
	}

}
