<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	include_once("general-functions.php");

	class pagesAddProjectGetDetail extends dB
	{
		public $userId 			= null;

		public $projectName		= null;
		public $projectDetail	= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->db = new dB;
		}

		public function getAllProjectDetail(){
			$gFunc = new generalFunctions;
			$tr = "";
			$allProject = $this->db->innerJoin("project.*, 
												user.*,
												task.*", 
												"task", 
												["project"=>"project.projectId = task.projectId",
												 "user"=>"user.userId = project.creatingProject"], 
												 "WHERE task.projectId = {$_POST["pid"]}");

			//var_dump($allProject);
			foreach ($allProject as $key => $value) {
				$remainingTime = $gFunc->findRemainingTime( $value["taskStartDate"], $value["taskEndDate"]);

				$creatingTask = $this->db->select("userName, userSurname", "user", "userId = {$value["creatingTask"]}");

				if($value["officerType"] == "kullanici"){
					$dutyUserName = $this->db->select("userName, userSurname", "user", "userId = {$value["dutyUserId"]}");				
					$firstLetter = mb_substr($dutyUserName[0]["userName"], 0, 1, "UTF-8");
					$dutynameSurname = $dutyUserName[0]["userName"].' '.$dutyUserName[0]["userSurname"];
					$officerType = "KULLANICI";					
				}
				if($value["officerType"] == "calisan"){
					$dutyUserName = $this->db->select("nameSurname", "employee", "employeeId = {$value["dutyEmployeeId"]}");				
					$firstLetter = mb_substr($dutyUserName[0]["nameSurname"], 0, 1, "UTF-8");
					$dutynameSurname = $dutyUserName[0]["nameSurname"];
					$officerType = "ÇALIŞAN";					
				}				



				$tr = $tr.'<tr>';
				$tr = $tr.'<td style="width:50px;"><span class="round">'.$firstLetter.'</span></td>';
				$tr = $tr.'<td><h6>'.$dutynameSurname.'</h6><small class="text-muted">'.$officerType.'</small></td>';
				$tr = $tr.'<td>'.$value["taskName"].'</td>';
				$tr = $tr.'<td>'.$creatingTask[0]["userName"].' '.$creatingTask[0]["userSurname"].'</td>';	
				$tr = $tr.'<td>'. '<span class="label label-warning">'.$value["taskStatus"].'</span> ';  
				$tr = $tr.'<td> <div class="progress"><div class="progress-bar bg-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:'.$remainingTime["remainingBar"].'%; height:8px;"> </div></div><span>'.$remainingTime["remainingTimeStr"].'</span> ';							
				$tr = $tr.'<td>'.date("d.m.Y", $value["taskStartDate"]).'</td>';
				$tr = $tr.'<td>'.date("d.m.Y", $value["taskEndDate"]).'</td>';

				$tr = $tr.'</tr>';

			}	
			$this->projectDetail = true;
			$this->projectName   = $allProject[0]["projectName"];
			$this->callBackMsg 	 = $tr;
			$this->sendCallBack();		
		}
	

		public function sendCallBack(){
			$array = array("projectDetail" 	=> $this->projectDetail,
							"projectName" 	=> $this->projectName,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}

	$projectDetailData = new pagesAddProjectGetDetail;
	$projectDetailData->getAllProjectDetail();
	
?>