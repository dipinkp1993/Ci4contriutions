<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
	public function index()
	{
		echo "User details";
    }
    public function getAllUsers()
    {
        echo "<h2>All Users</h2>";
      
        //return view('products');
    }
    

	//--------------------------------------------------------------------

}
