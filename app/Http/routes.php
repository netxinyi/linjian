<?php


//模型绑定-Product
Route::bind('product_id',function($value){
	return App\Model\Product::find($value);
});

//模型绑定-User
Route::bind('user_id',function($value){
	return App\Model\User::find($value);
});

//模型绑定-Order-id
Route::bind('order_id',function($value){
	return App\Model\Order::find($value);
});


//模型绑定-Order-sn
Route::bind('order_sn',function($value){

	return App\Model\Order::where('order_sn',$value)->first();
});













Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);





//后台管理
Route::group(array('prefix'=>'admin','namespace'=>'Admin'), function(){

	//基础路由，无需验证
	Route::get('/',array('as'=>'admin.index','uses'=>'AdminController@showIndex'));
	Route::get('/login',array('as'=>'admin.login','uses'=>'AdminController@showLogin'));



	//需要登录验证
	Route::group(array(),function(){


		Route::group(array('prefix'=>'product'),function(){


			Route::get('/',array('as'=>'admin.product','uses'=>'ProductController@showList'));

			Route::get('/add',array('as'=>'admin.product.add','uses'=>'ProductController@showAdd'));


			Route::get('/edit/{product_id}',array('uses'=>'ProductController@showEdit'));



		});










	});











	Route::group(array('prefix'=>'user'), function(){
		Route::get('/',array('as'=>'admin.user','uses'=>'UserController@showList'));

	});
});