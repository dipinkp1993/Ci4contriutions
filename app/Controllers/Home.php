<?php namespace App\Controllers;
use App\Controllers\Admin\Shop as Adminshop;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function products()
	{
		echo "home Products";
	}
	public function validation()
	{
		
		$shop=new Shop();
		$shop->products('laptop','i7');
        echo "<br>";
		$adminshop=new Adminshop();
		$adminshop->products('laptop','i7');

	}

	//--------------------------------------------------------------------

}
