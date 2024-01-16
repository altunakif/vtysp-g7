<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	//pages-your-project-get
	class pagesYourProjectGet extends dB
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
			//innerJoin("table1.col1, table2.col2", "table1", ["table2"=>"table2.col = table1.col"], " WHERE project.projectStatus = 'New' " )

			$projectOption = "";
			$allProject = $this->db->innerJoin("project.*, 
												user.userName, 
												user.userSurname", 
												"project", 
												["user"=>"project.creatingProject = user.userId"],
												" Where user.userId = {$this->userId}");
			//var_dump($allProject);

			/**/
			foreach ($allProject as $key => $value) {
				$projectOption = $projectOption.'<tr>';

				$projectOption = $projectOption. '<td>';
				$projectOption = $projectOption. $value["projectId"];
				$projectOption = $projectOption. "</td>";

				$projectOption = $projectOption. '<td data-target=".projectModal" data-toggle="modal" data-pid="'.$value["projectId"].'" style="cursor: pointer" ><b>';
				$projectOption = $projectOption. $value["projectName"];
				$projectOption = $projectOption. "</b></td>";				

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. $value["projectDescription"];
				$projectOption = $projectOption. "</td>";	
				
				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<span class="label label-warning">'.$value["projectStatus"].'</span> ';
				$projectOption = $projectOption. "</td>";

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. $value["projectStartDate"]."<br>". $value["projectEndDate"];
				$projectOption = $projectOption. "</td>";											

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<button type="button" class="btn btn-info btn-rounded deleteProject" data-pid="'.$value["projectId"].'" >Sil</button>';
				$projectOption = $projectOption. "</td>";	

				$projectOption = $projectOption. "<td>";
				$projectOption = $projectOption. '<button type="button" class="btn btn-info btn-rounded" >Tamamlandı</button>';
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
	

		public function sendCallBack(){
			$array = array("projectInsert" 	=> $this->projectInsert,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}
	
?>