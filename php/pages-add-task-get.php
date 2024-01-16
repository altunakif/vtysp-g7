<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesAddTaskGet extends dB
	{
		public $userId 			= null;

		public $projectInsert	= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->db = new dB;
		}

		public function getAllProject(){
			$projectOption = "";
			$allProject = $this->db->select("projectId, projectName", "project");
			foreach ($allProject as $key => $value) {
				$projectOption = $projectOption.'<option value="'.$value["projectId"].'">'.$value["projectId"].' '.$value["projectName"].'</option>';
			}
			echo $projectOption;
		}

		public function getUserProject(){
			$userOption = "";
			$allUser = $this->db->select("userId, userName, userSurname", "user");
			foreach ($allUser as $key => $value) {
				$userOption = $userOption.'<option value="'.$value["userId"].'" data-officertype="kullanici">'.$value["userId"].' '.$value["userName"].' '.$value["userSurname"].' [KULLANICI]</option>';
			}

			$allYourEmployee = $this->db->select("employeeId, ownerUser, nameSurname", "employee", "ownerUser = 1");
			foreach ($allYourEmployee as $key => $value) {
				$userOption = $userOption.'<option value="'.$value["employeeId"].'" data-officertype="calisan">'.$value["employeeId"].' '.$value["nameSurname"].' [SİZİN ÇALIŞANINIZ]</option>';
			}

			echo $userOption;
		}		

		public function sendCallBack(){
			$array = array("projectInsert" 	=> $this->projectInsert,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}

	$taskData = new pagesAddTaskGet;
?>