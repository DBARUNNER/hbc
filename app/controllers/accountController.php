<?php 

/**
* return blok page 
*/
class accountController extends BaseController
{
	

	//show login page
	public function loginGet() {
		return View::make('login');
	} 

	// show register page
	public function registerGet() {
		return View::make('register');
	}


	/*
	| create user account 
	*/ 
	public function registerPost() {
		$data 	= Input::all();

		$rules 	= array(
			'username' 			=> 'required|max:20|min:3|unique:users',
			'password'			=> 'required|min:6',
			'password-again'	=> 'required|same:password'
			);	

		$messages = array(
			'username.required' 		=> 'اسم کاربر ضروری میباشد',
			'password.required'			=> 'نوشتن رمز ورود ضروری میباشد',
			'password-again.required' 	=> 'تکرار رمز ورود ضروری میباشد',
			'username.min' 				=> 'اسم کاربر کمتر از سه حرف نباشد',
			'username.unique'			=> 'اسم کابر قبلا وجود دارد',
			'password-again.same'		=> 'رمز ورود با هم دیگر مشابهت ندارد'
			);

		$validator 	= Validator::make($data, $rules, $messages);

		if($validator->fails()) {
			return Redirect::route('register-get')
					->withErrors($validator)
					->withInput();
		}else {

			$username 		= Input::get('username');
			$password 	= Input::get('password');


			$user 		= User::create(array(
	
					'username' 		=> $username,
					'password'		=> Hash::make($password)
				));

			if($user) {
				return Redirect::route('login-get')
						->with('global','کاربر موفقانه ایجاد گردید!');
			}else {

				return Redirect::route('register-get')
						->with('global','مشکلاتی وجود دارد لطفآ دوباره کوشیش نماید!');
			}
		}
	}


}


?>