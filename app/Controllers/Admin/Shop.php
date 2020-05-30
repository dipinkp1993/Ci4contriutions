<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

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
