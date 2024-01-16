<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesYourEmployeesListEditGet extends dB
	{
		public $userId			= null;
		public $pid				= null;

		public $getEditDataSuccess	= null;
		public $callBackMsg			= null;
		public $callBackNameSurname	= null;
		public $callBackPhone		= null;
		public $callBackemployeeId	= null;
		public $db 					= null;	

		function __construct()
		{
			$this->userid 	= $_POST["userid"];
			$this->pid 		= $_POST["pid"];

			$this->security();
		}

		function security(){
			session_start();
			if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
				if($_SESSION['userId'] == $this->userid){
					$this->db = new dB;
					$this->getData();
				}
			}else{
				exit();
			}
		}		

		public function getData(){

			$allUserList = $this->db->select("employeeId, nameSurname, phone", "employee", "employeeId = {$this->pid}");
			//var_dump($allUserList);
			$this->deletionSuccess		= true;
			$this->callBackNameSurname 	= $allUserList[0]["nameSurname"];
			$this->callBackPhone		= $allUserList[0]["phone"];
			$this->callBackemployeeId 	= $allUserList[0]["employeeId"];

			$this->sendCallBack();
		}	

		public function sendCallBack(){
			$array = array("getEditDataSuccess" 	=> $this->deletionSuccess,
							"callBackMsg" 	 		=> $this->callBackMsg, 
							"callBackNameSurname" 	=> $this->callBackNameSurname,
							"callBackPhone" 	 	=> $this->callBackPhone,
							"callBackemployeeId"	=> $this->callBackemployeeId);
			echo json_encode($array);
		}			

	}

	$pagesYourEmployeesListEditGet = new pagesYourEmployeesListEditGet;
	
?>