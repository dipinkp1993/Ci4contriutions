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
				'email'=>[
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
					]
				
			];
			if($this->validate($rules)){
			// database process ,login process successful
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
