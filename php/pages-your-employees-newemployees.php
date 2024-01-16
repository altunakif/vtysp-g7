<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");

	class newEmployees extends dB
	{
		public $pid 			 = null;
		public $newEmployeeNS 	 = null;
		public $newEmployeePhone = null;


		public $success		= null;
		public $callBackMsg	 = null;

		public $db 				= null;		

		function __construct()
		{
			
			$this->pid 				= $_POST["pid"];
			$this->newEmployeeNS 	= $_POST["newEmployeeNS"];
			$this->newEmployeePhone = $_POST["newEmployeePhone"];	

			$this->dataControl();				
		}


		public function dataControl(){
			$this->db = new dB;
			$this->insertData();	
		}		

		public function insertData(){
			
			/**/
			$this->db->insert("employee", [	"ownerUser"		=> $this->pid, 
											"nameSurname"	=> $this->newEmployeeNS,
											"phone"			=> $this->newEmployeePhone ]);



			$this->success 		= true;
			$this->callBackMsg 	= $this->callBackMsg." Yeni Çalışan Eklendi<br>";
			$this->sendCallBack();
		}

		public function sendCallBack(){
			$array = array(	"success" 		=> $this->success,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		


	}

	new newEmployees();
?>