<?php 


/**
* 
*/
class shopController extends BaseController
{
	
	// show shop page
	public function shopGet() {
		return View::make('shop');
	}
	
}




?>