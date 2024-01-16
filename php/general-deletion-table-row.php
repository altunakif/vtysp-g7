<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");

	class generalDeletionTableRow extends dB
	{
		public $userid 			= null;
		public $pid 			= null;
		public $functionName 	= null;

		public $deletionSuccess	= null;
		public $callBackMsg		= null;
		public $db 				= null;		

		function __construct()
		{			
			$this->userid 		= $_POST["userid"];
			$this->pid 			= $_POST["pid"];
			$this->functionName = $_POST["functionName"];

			$this->security();
		}

		function security(){
			session_start();
			//$_SESSION['userId']
			//echo $this->userid;
			//echo $_SESSION['userId'];

			if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
				if($_SESSION['userId'] == $this->userid){
					$this->db = new dB;
					$this->selective();
				}
			}else{
				exit();
			}
		}

		public function selective(){
			if ($this->functionName == "deleteProject") $this->deleteProject();
			if ($this->functionName == "deleteEmployees") $this->deleteEmployees();
		}	

		/**
		 * Veri tabanı tarafında triger ile projeye bağlı task'ler silinir
		*/
		public function deleteProject(){
			$this->db->delete("project", "projectId = {$this->pid}");
			$this->deletionSuccess = true;
			$this->callBackMsg 	   = "Silme işlemi başarılı";
			$this->sendCallBack();
		}		

		public function deleteEmployees(){
			$this->db->delete("employee", "employeeId = {$this->pid}");
			$this->deletionSuccess = true;
			$this->callBackMsg 	   = "Silme işlemi başarılı";
			$this->sendCallBack();
		}


		public function sendCallBack(){
			$array = array("deletionSuccess" => $this->deletionSuccess,
							"callBackMsg" 	 => $this->callBackMsg);
			echo json_encode($array);
		}		


	}

	new generalDeletionTableRow();
?>