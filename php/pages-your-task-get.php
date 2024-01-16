<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");

	class pagesYourTaskGet extends dB
	{
		public $userId 			= null;

		public $projectInsert	= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->db = new dB;
		}

		public function getYourTaskData($dutyUserId){
			$yourTask = $this->db->innerJoin("task.*, project.projectName, user.userName, user.userSurname", 
											  "task", 
											  ["project"=>"project.projectId = task.projectId", 
											   "user"	=>"user.userId = project.creatingProject"],
											  "WHERE task.dutyUserId = {$dutyUserId}");

			$li = "";
			/**/
			$cCount = 0;
			foreach($yourTask as $key => $value){
				$creatingTaskName = $this->db->select("userName, userSurname", "user", "userId = {$value["creatingTask"]}");
				$taskName = $value["taskName"];
				$date = "Son: ".date("d.m.Y", $value["taskEndDate"]);
				$taskDescription = $value["taskDescription"];
				$projectName = $value["projectName"];
				$creatingProject = $value["userName"]." ".$value["userSurname"];
				$creatingTask = $creatingTaskName[0]["userName"]." ".$creatingTaskName[0]["userSurname"];
				$taskId = $value["taskId"];

				$checked1 = "";
				$checked2 = "";
				$checked3 = "";

				if ($value["taskStatus"] == "TAMAMLANDI") $checked1 = "checked";
				if ($value["taskStatus"] == "TAMAMLANACAK") $checked2 = "checked";
				if ($value["taskStatus"] == "DEVAM EDİYOR") $checked3 = "checked";

				$li=$li."
					<li class='list-group-item' data-role='task' id='taskLi{$cCount}'><div class='checkbox checkbox-info'><input type='checkbox' id='taskCB{$cCount}' name='inputCheckboxesCall'>
					<label for='task14' class=''> <span>{$taskName}</span>
					<span class='label label-danger'>{$date}</span> 
					</label></div><div class='item-date'><div class='row'><div class='col-6'>
					Görev Tanımı: {$taskDescription}<br>
					Proje Adı: {$projectName}<br>
					Projeyi Oluşturan: {$creatingProject}<br>
					Görevi Oluşturan: {$creatingTask}                                                        
					</div><div class='col-6'><div class='form-group'><div class='input-group'><ul class='icheck-list'>
					<li><input type='radio' class='check' name='line-radio{$cCount}' data-radio='iradio_line-red' data-taskid='{$taskId}' data-label='TAMAMLANDI'$checked1></li>
					<li><input type='radio' class='check' name='line-radio{$cCount}' data-radio='iradio_line-red' data-taskid='{$taskId}' data-label='TAMAMLANACAK' $checked2></li>
					<li><input type='radio' class='check' name='line-radio{$cCount}' data-radio='iradio_line-red' data-taskid='{$taskId}' data-label='DEVAM EDİYOR' $checked3></li>
					</ul></div></div></div></div></div></li>
				";
				$cCount++;
			}
			

			/*
			foreach ($yourTask as $key => $value) {
				//*select("userName, userSurname", "user", "userPhone = 05432198765");
				$creatingTaskName = $this->db->select("userName, userSurname", "user", "userId = {$value["creatingTask"]}");
				$li = $li.'<li class="list-group-item" data-role="task"> <div class="checkbox checkbox-info"><input type="checkbox" id="task'.$value["taskId"].'" name="inputCheckboxesCall">';
				$li = $li.'<label for="task'.$value["taskId"].'" class=""> <span>'.$value["taskName"].'</span> <span class="label label-danger">'.$value["taskEndDate"].'</span> </label></div>';
				$li = $li.'<div class="item-date">Görev Tanımı: '.$value["taskDescription"].'</div><br>';
				$li = $li.'<div class="item-date">Proje Adı: '.$value["projectName"].'<br> Projeyi Oluşturan: '.$value["userName"].' '.$value["userSurname"].'<br> Görevi Oluşturan: '.$creatingTaskName[0]["userName"].' '.$creatingTaskName[0]["userSurname"].'</div></li>';
			}
			*/
			echo $li;
		}

	}

	$taskData = new pagesYourTaskGet;
	//$taskData->getYourTaskData(1);
?>