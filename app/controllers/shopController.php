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

	// register shop  to the database 
	public function registerShop() {
		$id 			= Input::get('number');
		$location 		= Input::get('shopLocation');
		$rent 			= Input::get('shopRent');
		$prepay 		= Input::get('shopPrepay');
		$type 			= 'shop';


		$shobBlock 				= new shopblock;
		$shobBlock->id 			= $id;
		$shobBlock->location 	= $location;
		$shobBlock->rent 		= $rent;
		$shobBlock->prepay 		= $prepay;
		$shobBlock->type 		= $type;


		if($shobBlock->save()) {
			return Redirect::route('shop-get')->with('success','دوکان موفقانه ثبت گردید!');
		}else {
			return Redirect::route('shop-get')->with('error','خطا وجود دارد لطفآ دوباره کوشیش نماید!');
		}
	}
	
}




?>