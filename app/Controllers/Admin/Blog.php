<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
		echo "User details";
    }
    public function Blogview()
    {
        return view('blog_form');
    }
    public function Saveblog()
    {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}
