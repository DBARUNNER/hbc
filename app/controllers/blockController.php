<?php 

/**
* return blok page 
*/
class blockController extends BaseController
{
	

	// retrn the homepage form user
	public function homeGet() {
		return View::make('home');
	}



	/*
	| return the first page 
	*/ 
	public function blockGet() {
		return View::make('block');
	}


}


?>