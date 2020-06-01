<?php namespace App\Controllers;

class Image extends BaseController
{
	public function index()
	{
		helper(['form','image']);
		$request = \Config\Services::request();
        $data=[];
		if($request->getMethod()=="post")
		{
			$rules=[
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
             $path="./uploads/images/manipulated/";
             $files=$request->getFiles();
             $image=service('image');
			 foreach ( $files['theFile'] as $file) {

			if($file->isValid()&& !$file->hasMoved())
			 {
				 
                $file->move($path) ;
                $fileName=$file->getName();
                if(!file_exists($path.'thumbs/'))
                { 
                    mkdir($path.'thumbs/',755);
                }

               $image->withFile(src($fileName))
                     ->fit(150,150,'center')
                     ->save($path.'thumbs/'. $fileName);
				
			 }
				
			 }
			  exit();
			  return redirect()->to('/form/success');
			}
			else{
				$data['validation']=$this->validator;

			}
			
		}
		return view('image',$data);
	}
	function success(){
		return "Hey Passed validation";
	}
    
   

	//--------------------------------------------------------------------

}
