<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	//pages-your-employees-updateemployees

	class newEmployees extends dB
	{
		public $pid 			  = null;
		public $userid 			  = null;
		public $editEmployeeNS 	  = null;
		public $editEmployeePhone = null;


		public $success		= null;
		public $callBackMsg	 = null;

		public $db 				= null;		

		function __construct()
		{
			
			$this->pid 				 = $_POST["pid"];
			$this->userid 			 = $_POST["userid"];
			$this->editEmployeeNS 	 = $_POST["editEmployeeNS"];
			$this->editEmployeePhone = $_POST["editEmployeePhone"];	

			$this->security();			
		}


		function security(){
			session_start();
			if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
				if($_SESSION['userId'] == $this->userid){
					$this->db = new dB;
					$this->updateData();
				}
			}else{
				exit();
			}
		}	

		public function updateData(){
			$this->db->update("employee",
							  ["nameSurname"=>$this->editEmployeeNS, "phone"=>$this->editEmployeePhone],
							  "employeeId = {$this->pid}");
			$this->success = true;
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