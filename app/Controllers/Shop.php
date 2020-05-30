<?php namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
    }
    public function products($type,$subtype)
    {
        echo $type;
        echo $subtype;
        //return view('products');
    }
   

	//--------------------------------------------------------------------

}
