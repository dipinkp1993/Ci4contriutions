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
             $imageService=service('image');
			 foreach ( $files['theFile'] as $file) {

			if($file->isValid()&& !$file->hasMoved())
			 {
				 
                $file->move($path) ;
                $fileName=$file->getName();
                $data['image']=$fileName;
                $this->ImageManipulation($path,'thumbs',$fileName,$imageService);
                $data['folders'][]="thumbs";
                $this->ImageManipulation($path,'flip',$fileName,$imageService);
                $data['folders'][]="flip";
				
			 }
				
			 }
			  
			}
			else{
				$data['validation']=$this->validator;

			}
			
		}
		return view('image',$data);
	}
	private function ImageManipulation($path,$folder,$fileName,$imageService)
    {
        $savepath=$path.'/'.$folder;
        if(!file_exists($savepath))
        { 
            mkdir($savepath,755);
        }

        $imageService->withFile(src($fileName));
       switch ($folder) {
        case 'thumbs':
               $imageService->fit(150,150);
               break;
        case 'flip':
                $imageService->flip('horizontal');
                break;
       }
            
        return  $imageService->save($savepath.'/'.$fileName);

    }
   

	//--------------------------------------------------------------------

}
