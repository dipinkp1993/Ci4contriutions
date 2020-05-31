<?php namespace App\Controllers;
use App\Models\BlogModel;
class Blog extends BaseController
{
	public function index()
	{
		$data=[];
		$posts=['title1','title2','title3'];
		$data['posts']=$posts;
        return view('blog_home',$data);   
	}
	public function post($id)
	{
		$data=['title'=>"DIPIN K P's BLOG",'posttitle'=>"DIPIN K P's POST"];
	    $model=new BlogModel();
		$post=$model->find($id);
		if($post){
			$data=['title'=>$post['title'],'posttitle'=>$post['title'],'content'=>$post['content'],'post'=>$post];

		}
		else{
			
			$data=['title'=>'No Post Found - 404','posttitle'=>'No Post Found - 404','content'=>'','post'=>$post];

		}
        return view('single_post',$data); 
	}
	public function createpost()
	{
		$data=['title'=>"DIPIN K P's BLOG",'posttitle'=>"DIPIN K P's POST"];
		if($this->request->getMethod()=='post')
		{
		   $model=new BlogModel();
		   $model->save($_POST);
		}
		return view('create_post',$data);
	}
	public function deletepost($id)
	{
	    $model=new BlogModel();
		$post=$model->find($id);
		if($post){
			$model->delete($id);
			return redirect()->to('/blog');
		}
        return view('single_post',$data); 
	}
	public function editpost($id)
	{
		
		$model=new BlogModel();
		$post=$model->find($id);
		$data=['title'=>$post['title'],'posttitle'=>$post['title'],'content'=>$post['content']];
		if($this->request->getMethod()=='post')
		{
		   $model=new BlogModel();
		   $_POST['post_id']=$id;
		   $model->save($_POST);
		   $post=$model->find($id);
		}
		$data['post']=$post;
		return view('edit_post',$data);
	}

	//--------------------------------------------------------------------

}
