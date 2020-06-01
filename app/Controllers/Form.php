<?php namespace App\Controllers;

class Form extends BaseController
{
	public function index()
	{
		helper(['form']);
		$request = \Config\Services::request();
        $data=[];
		$data['categories']=['Teacher','Student','Staff'];
		//rules'=>'required|in_list[$data[categories]]'
		if($request->getMethod()=="post")
		{
			$rules=[
				/*'email'=>[
					'rules'=>'required|valid_email',
					'label'=>'Email Address',
					'errors'=>[
						'required'=>'You should Enter Email Address',
						'valid_email'=>'Hey,You should enter a valid Email Address '
					]
				],
				'password'=>'required|min_length[8]',
				'category'=>[
					'rules'=>'required|category_check',
					'errors'=>['category_check'=>'Please select a category']
				],
				'date'=>[
					'rules'=>'required|date_check',
					'label'=>'Application Date',
					'errors'=>['date_check'=>'You cannot Add a date Before Today']
					]*/
					/*'theFile'=>[
						'rules'=>'uploaded[theFile]|max_size[theFile,1024]|is_image[theFile]',
						'label'=>'This File',
						'errors'=>[
							'uploaded'=>'Enter a File',
							 'max_size'=>'Maximum Size Allowed is 1 MB',
							 'is_image'=>'You Are Trying to upload a file other than image file'
						]*/
						'theFile'=>[
							'rules'=>'uploaded[theFile.0]|is_image[theFile]',
							'label'=>'This File',
							'errors'=>[
								'uploaded'=>'Enter a File',
								 'max_size'=>'Maximum Size Allowed is 1 MB',
								 'is_image'=>'You Are Trying to upload a file other than image file'
							]
						
						]
				
			];
			if($this->validate($rules)){
			// database process ,login process successful
			 /* $file=$request->getFile('theFile');
			 if($file->isValid()&& !$file->hasMoved())
			 {
				$file->move('./uploads/images/',$file->getRandomName()) ;
			 }*/
			 $files=$request->getFiles();
			 foreach ( $files['theFile'] as $file) {

			if($file->isValid()&& !$file->hasMoved())
			 {
				 echo $file->getName()."<br><hr>";
				$file->move('./uploads/images/multiple',$file->getRandomName()) ;
				echo $file->getName()."<br><hr>";
			 }
				
			 }
			  exit();
			  return redirect()->to('/form/success');
			}
			else{
				$data['validation']=$this->validator;

			}
			
		}
		return view('form',$data);
	}
	function success(){
		return "Hey Passed validation";
	}
    
   

	//--------------------------------------------------------------------

}
