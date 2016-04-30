<?php

/**
* 
*/
class reportsController extends BaseController
{
		//show reports page
	public function reportsGet()
	{
		return View::make('reports');
	}
		
}


?>