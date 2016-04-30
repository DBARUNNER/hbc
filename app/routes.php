<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


		

	Route::get('signIn',array(
		'uses'	=> 'login-get',
		'uses'	=> 'accountController@loginGet'
		));

	// login post route
	Route::post('login',array(
		'as'	=> 'login-post',
		'uses'	=> 'accountController@login-post'
		));


	// show register page
	Route::get('Register',array(
		'as'	=> 'register-get',
		'uses'	=> 'accountController@registerGet'
		));

	//creat user account
	Route::post('createAccount',array(
		'as'	=> 'register-post',
		'uses'	=> 'accountController@registerPost'
		));

	// home page route
		Route::get('/',array(
			'as'	=> 'home-get',
			'uses'	=> 'blockController@homeGet'
			));


		// shop route 
		Route::get('shop',array(
			'as'	=> 'shop-get',
			'uses'	=> 'shopController@shopGet'
			));


		// route for block 
		Route::get('block',array(
			'as' 	=> 'block-get',
			'uses'	=> 'blockController@blockGet'
			));
		//route for employee
		Route::get('employee',array(
			'as'	=> 'employee-get',
			'uses'	=> 'employeeController@employeeGet'
			));

		//route for daily payment
		Route::get('dailyPayment',array(
			'as'	=>'dailyPayment-get',
			'uses'	=>'dpaymentController@dpaymentGet'
			));
		// route for report
		Route::get('reports',array(
			'as'	=> 'reports-get',
			'uses'	=> 'reportsController@reportsGet'
			));