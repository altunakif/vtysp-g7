<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	include_once("general-functions.php");

	class pagesAddProjectGet extends dB
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
			$gFunc = new generalFunctions;

			$projectOption = "";
			$allProject = $this->db->innerJoin("project.*, 
												user.userName, 
												user.userSurname", 
												"project", 
												["user"=>"project.creatingProject = user.userId"]);
			//var_dump($allProject);

			/**/
			foreach ($allProject as $key => $value) {

				$remainingTime = $gFunc->findRemainingTime( $value["projectStartDate"], $value["projectEndDate"] );

				$projectOption = $projectOption.'<tr data-target=".projectModal" data-toggle="modal" data-pid="'.$value["projectId"].'" style="cursor: pointer">';

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. $value["projectId"];
				$projectOption = $projectOption. "</td>";

				$projectOption = $projectOption. "<td><b>";
				$projectOption = $projectOption. $value["projectName"];
				$projectOption = $projectOption. "</b></td>";				

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<img src="../assets/images/users/dr-ismail-iseri.jpg" alt="user" class="img-circle" /> '.$value["userName"].' '.$value["userSurname"];
				$projectOption = $projectOption. "</td>";

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. $value["projectDescription"];
				$projectOption = $projectOption. "</td>";	
				
				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<span class="label label-warning">'.$value["projectStatus"].'</span> ';
				$projectOption = $projectOption. "</td>";

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<div class="progress"><div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:'.$remainingTime["remainingBar"].'%; height:8px;"> </div></div><span>'.$remainingTime["remainingTimeStr"].'</span>';
				$projectOption = $projectOption. "</td>";					

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. date("d.m.Y", $value["projectStartDate"]);
				$projectOption = $projectOption. "</td>";											

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. date("d.m.Y", $value["projectEndDate"]);
				$projectOption = $projectOption. "</td>";															

				$projectOption = $projectOption. "</tr>";				
			}
			return $projectOption;
			
		}

		public function allTaskCount(){
			$allTaskCount = $this->db->select("COUNT(taskId)", "task");
			return $allTaskCount[0]["COUNT(taskId)"];
		}

		public function allUserCount(){
			$allUserCount = $this->db->select("COUNT(userId)", "user");
			return $allUserCount[0]["COUNT(userId)"];
		}

		public function allEmployeeCount(){
			$allEmployeeCount = $this->db->select("COUNT(employeeId)", "employee");
			return $allEmployeeCount[0]["COUNT(employeeId)"];
		}					
	

		public function sendCallBack(){
			$array = array("projectInsert" 	=> $this->projectInsert,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}

	$projectData = new pagesAddProjectGet;
	
?>