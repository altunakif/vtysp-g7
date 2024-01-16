<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	include_once("gRecaptcha.php");

	class pagesLoginControl extends dB
	{
		public $formPhoneInput 		= null;
		public $formPasswordInput 	= null;
		public $gRecaptchaResponse 	= null;

		public $dataControl			= null;
		public $callBackMsg			= null;

		function __construct()
		{
			$this->formPhoneInput 		= $_POST["formPhoneInput"];
			$this->formPasswordInput 	= $_POST["formPasswordInput"];
			$this->gRecaptchaResponse 	= $_POST["g-recaptcha-response"];
			$this->gRecaptchaF();	
		}

		public function gRecaptchaF(){

			$gR = new gRecaptcha($this->gRecaptchaResponse);
			if ( $gR->result["success"] == true ){
				$this->dataControl();	
			}else{
				exit();
			}	
		
		}		

		public function dataControl(){

			$db = new dB;
			$formPhoneInput 	= $this->formPhoneInput;
			$formPasswordInput 	= $this->formPasswordInput;


			$userData = $db->select("userId, userPassword", "user", "userPhone = '{$formPhoneInput }'");

			if ( count($userData) > 0 ){
				$this->dataControl = true;

				if (password_verify( $formPasswordInput, $userData[0]["userPassword"] )) {
					$this->callBackMsg = "Anasayfaya yönlendiriliyorsunuz.";
					$this->sessionRun($userData[0]["userId"]);
				} else {
					$this->dataControl = false;
					$this->callBackMsg = "Hatalı şifre girdiniz.";
					$this->sendCallBack();
				}				



			}else{
				$this->dataControl = false;
				$this->callBackMsg = "Hatalı telefon numarası veya şifre girdiniz.";
				$this->sendCallBack();
			}			

		}

		public function sessionRun($userId){
			session_start();
			$_SESSION['session'] 	= true;
			$_SESSION['userId'] 	= $userId; 
			$this->sendCallBack();
		}

		public function sendCallBack(){
			$array = array("dataControl" 	=> $this->dataControl,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}

	}

	new pagesLoginControl;


/*

		$array= array("step" 	=> "2",
					  "msg" 	=> $this->AccountList);

		echo json_encode($array);
*/


?>