<?php namespace App\Controllers;
class Blog extends BaseController
{
	public function index()
	{
		$data=[];
		$posts=['title1','title2','title3'];
		$data['posts']=$posts;
        return view('blog_home',$data);   
	}
	public function post()
	{
		$data=['title'=>"DIPIN K P's BLOG",'posttitle'=>"DIPIN K P's POST"];
        return view('single_post',$data);
       
	}

	//--------------------------------------------------------------------

}
