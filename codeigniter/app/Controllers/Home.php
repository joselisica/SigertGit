<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public $session = null;
	public function __construct(){
		helper(['form','url']);
		$this->session = \Config\Services::session(); // $config is optional here
	}

	public function index()
	{
		$request = \Config\Services::request();


		$mForm = new UserModel($db);

		$aData = array();
		$aData['formSended'] = '';
		$aData['formSendedValue'] = 'images/layout/check.png';
		$aData['input'] = '';
		$aData['validation'] = \config\services::validation();

		if( $this->request->getMethod() == "post" ){

			
			$this->formValidierung();
		}

		if($this->session->get('formSended')){
			$aData['formSended'] = $this->session->get('formSended');

			switch ( $aData['formSended'] ) {
				case 'false':
							// Code wurde bereits verwendet
						$aData['formSended']				= 'Es tut uns leid! <br> Formular hat ein fehler';
						$aData['formSendedValue']			= 'images/layout/alert.png'; 

						$aData['input'] = $this->session->get('input');
						break;
				case 'true':
						// Alles gut
						$aData['formSended'] 				= 'Vielen Dank!';
						$aData['formSendedValue'] 			= 'images/layout/check.png';
						
						break;
			}
			$this->session->remove('formSended');
		}

		return view('layout/header', $aData).view('layout/content',$aData).view('layout/footer');
	}

	public function formValidierung(){

		$mForm = new UserModel($db);

		$request = \Config\Services::request();
		
        
        $input = $this->validate([
			
			'name' 			=> 'required|min_length[3]',
			'firma' 		=> 'required|min_length[3]',
			'strasse' 		=> 'required|min_length[3]',
			'plz' 			=> 'required|min_length[3]',
			'telefon' 		=> 'required|numeric|max_length[20]',
			'email' 		=> 'required|valid_email',
			'selectOne' 	=> 'required|min_length[3]',
			'selectTwo' 	=> 'required|min_length[3]',
			'check1' 		=> 'trim|required|greater_than[0]',
			'check2' 		=> 'trim|required|greater_than[0]',
		]);

		if ($this->request->getMethod() == "post") { 
		
		if (!$input) {

			$this->session->set('input', $input);

			// exit();

			
        } else {
            $mForm->save([
                'name' 			=> $request->getPost('name'),
                'firma'  		=> $request->getPost('firma'),
				'strasse'  		=> $request->getPost('strasse'),
				'plz'  			=> $request->getPost('plz'),
				'telefon'  		=> $request->getPost('telefon'),
				'email'  		=> $request->getPost('email'),
				'nachricht' 	=> $request->getPost('nachricht'),
				'check1'  		=> $request->getPost('check1'),
				'check2	'  		=> $request->getPost('check2'),
				'selectOne'  	=> $request->getPost('selectOne'),
				'selectTwo'  	=> $request->getPost('selectTwo'),
			]);  
			$this->session->set('formSended', 'true');
		}   
		
		}	

		return redirect()->to('/sigert');

	}

	public function validationJ()
	{
		$request = \Config\Services::request();


		$mForm = new UserModel($db);

		$aData = array();
		$aData['formSended'] = '';
		$aData['formSendedValue'] = 'images/layout/check.png';
		$aData['input'] = '';
		$aData['validation'] = \config\services::validation();

		if( $this->request->getMethod() == "post" ){

			
			$this->formValidierung();
		}

		if($this->session->get('formSended')){
			$aData['formSended'] = $this->session->get('formSended');

			$this->session->remove('formSended');
		}

		return view('layout/header', $aData).view('layout/content',$aData).view('layout/footer');
	}

}
