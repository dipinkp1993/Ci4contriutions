<?php namespace App\Controllers;
class Blog extends BaseController
{
	public function index()
	{
		$data=[];
		$posts=['title1','title2','title3'];
		$data['posts']=$posts;
        echo view("header",$data);
        echo view('blog_home');
        echo view("footer");
	}
	public function post()
	{
		$data=['title'=>"DIPIN K P's BLOG",'posttitle'=>"DIPIN K P's POST"];
		echo view("header",$data);
        echo view('single_post');
        echo view("footer");
       
	}

	//--------------------------------------------------------------------

}