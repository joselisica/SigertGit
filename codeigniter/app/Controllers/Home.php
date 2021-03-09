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

		// if ($test != "test") {
		// 	print_r('Willkommen!');
		// 	exit();
		// }

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
						$aData['formSended'] 				= 'Vielen Dank für Ihre Anfrage. <br> <small>Wir senden Ihnen eine Bestätigung an ihre E-Mail-Adresse.</small>';
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
			'anzahl' 		=> 'required',
			'strasse' 		=> 'required|min_length[3]',
			'plz' 			=> 'required|min_length[3]',
			'telefon' 		=> 'required|numeric|max_length[20]',
			'email' 		=> 'required|valid_email',
			'selectOne' 	=> 'required|min_length[3]',
			'check1' 		=> 'trim|required|greater_than[0]',
		]);

		if ($this->request->getMethod() == "post") { 
		
		if (!$input) {

			$this->session->set('input', $input);

			// exit();

			
        } else {
            $mForm->save([
                'name' 			=> $request->getPost('name'),
                'firma'  		=> $request->getPost('firma'),
                'anzahl'  		=> $request->getPost('anzahl'),
				'strasse'  		=> $request->getPost('strasse'),
				'plz'  			=> $request->getPost('plz'),
				'telefon'  		=> $request->getPost('telefon'),
				'email'  		=> $request->getPost('email'),
				'nachricht' 	=> $request->getPost('nachricht'),
				'check1'  		=> $request->getPost('check1'),
				'selectOne'  	=> $request->getPost('selectOne'),
			]); 
			
			$emailArray = array(
				'id'			=> $mForm->insertID().'2021',
				'name' 			=> $request->getPost('name'),
				'firma'  		=> $request->getPost('firma'),
				'anzahl'  		=> $request->getPost('anzahl'),
				'strasse'  		=> $request->getPost('strasse'),
				'plz'  			=> $request->getPost('plz'),
				'telefon'  		=> $request->getPost('telefon'),
				'email'  		=> $request->getPost('email'),
				'nachricht' 	=> $request->getPost('nachricht'),
				'check1'  		=> $request->getPost('check1'),
				'selectOne'  	=> $request->getPost('selectOne'),
			);

	
			$this->session->set('formSended', 'true');
			$this->sendEmail($request->getPost('email'),$emailArray);

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

	public function sendEmail($to, $emailArray){

		$message = view('layout/email', $emailArray);

		$email = \Config\Services::email();

		$email->setFrom('info@sigert.de', 'Sigert');
		$email->setTo($to);
		$email->setBCC('info@sigert.de');
		// $email->setBCC('them@their-example.com');

		$email->setSubject('Anfrage EM Spielpläne - Sigert Nr° ' .$emailArray['id']);
		// $email->setMessage($message);
		$email->setMessage($message);

		$email->send();

	}
}
