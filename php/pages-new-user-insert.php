<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	include_once("gRecaptcha.php");

	class pagesNewUserInsert extends dB
	{
		public $nameInput 			= null;
		public $surnameInput 		= null;
		public $phoneInput 			= null;
		public $passwordInput 		= null;
		public $gRecaptchaResponse 	= null;

		public $dataControl		= null;
		public $callBackMsg		= null;

		public $db 				= null;		

		function __construct()
		{
			
			$this->nameInput 			= $_POST["formNameInput"];
			$this->surnameInput 		= $_POST["formSurnameInput"];
			$this->phoneInput 			= $_POST["formPhoneInput"];
			$this->passwordInput 		= $_POST["formPasswordInput"];
			$this->gRecaptchaResponse 	= $_POST["g-recaptcha-response"];
			
			$this->gRecaptchaF();		
		}

		public function gRecaptchaF(){

			$gR = new gRecaptcha($this->gRecaptchaResponse);
			if ( $gR->result["success"] == true ){
				$this->db = new dB;
				$this->dataControl();	
			}else{
				exit();
			}	
		
		}

		public function dataControl(){
			$this->dataControl = true;
			$phoneControl = $this->db->select("userPhone", "user", "userPhone = '{$this->phoneInput }'");
			$this->callBackMsg = "";


			if ( ($this->nameInput == null) or ($this->nameInput == "") ){
				$this->dataControl = false;
				$this->callBackMsg = $this->callBackMsg." İsim girmediniz!<br>";
			}
			if ( ($this->surnameInput == null) or ($this->surnameInput == "") ) {
				$this->dataControl = false;
				$this->callBackMsg = $this->callBackMsg." Soyisim girmediniz!<br>";			
			}
			if ( ($this->phoneInput == null) or ($this->phoneInput == "") ){
				$this->dataControl = false;
				$this->callBackMsg = $this->callBackMsg." Telefon numarası girmediniz!<br>";					
			}
			if ( ($this->passwordInput == null) or ($this->passwordInput == "") ){
				$this->dataControl = false;
				$this->callBackMsg = $this->callBackMsg." Şifre girmediniz!<br>";				
			}
			if (count($phoneControl)>0){
				$this->dataControl = false;
				$this->callBackMsg = $this->callBackMsg." Telefon numarası daha önce kullanılmış!<br>";					
			}

			if ($this->dataControl == false){
				$this->sendCallBack();
			}else{
				$this->insertData();		
			}
		}		

		public function insertData(){
			
			$this->db->insert("user", [	"userName"		=>$this->nameInput , 
										"userSurname"	=>$this->surnameInput,
										"userPhone"		=>$this->phoneInput,
										"userPassword"	=>password_hash($this->passwordInput, PASSWORD_DEFAULT)	]);

			$lastUserId = $this->db->conn->lastInsertId();
			session_start();
			$_SESSION['session'] 	= true;
			$_SESSION['userId'] 	= $lastUserId; 

			$this->dataControl = true;
			$this->callBackMsg = $this->callBackMsg." Ana Sayfaya Yönlendiriliyorsunuz<br>";
			$this->sendCallBack();
		}

		public function sendCallBack(){
			$array = array("dataControl" 	=> $this->dataControl,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		


	}

	new pagesNewUserInsert();
?>