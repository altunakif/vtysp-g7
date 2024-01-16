<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");

	class taskStatusUpdate extends dB
	{
		public $userId 			= null;
		public $taskid 			= null;
		public $newTaskStatus 	= null;

		public $taskStatusUpdate = null;
		public $callBackMsg		 = null;
		public $db 				 = null;		

		function __construct()
		{			
			$this->userId 			= $_POST["userId"];
			$this->taskid 			= $_POST["taskid"];
			$this->newTaskStatus 	= $_POST["newTaskStatus"];

			$this->security();
		}

		function security(){
			session_start();

			if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
				if($_SESSION['userId'] == $this->userId){
					$this->db = new dB;
					$this->updateTaskStatus();
				}
			}else{
				exit();
			}
		}

		/**
		 * 
		*/
		public function updateTaskStatus(){
			//echo "updateTaskStatus f";
			//update($tbl, $arr, $cond)
			$this->db->update("task", ["taskStatus"=>$this->newTaskStatus], "taskId = {$this->taskid 	}");
		}

		public function sendCallBack(){
			$array = array( "taskStatusUpdate" => $this->taskStatusUpdate,
							"callBackMsg" 	 => $this->callBackMsg);
			echo json_encode($array);
		}		


	}

	new taskStatusUpdate();
?>