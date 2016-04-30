<?php
	
	/**
	* 
	*/
	class employeeController extends BaseController
	{
		
		//show employee page
		public function employeeGet()
		{
			return View::make('employee');
		}
	}

?>