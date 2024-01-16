<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesAddTaskInsert extends dB
	{
		
		public $userId 			= null;
		public $projectSelect 	= null;
		public $dutyPerId 		= null;
		public $officerType 	= null;
		public $manDayValue 	= null;
		public $taskName 		= null;
		public $taskDescription	= null;
		public $taskStartDate 	= null;
		public $taskEndDate 	= null;

		public $taskInsert		= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->userId 			= $_POST["userId"];
			$this->projectSelect 	= $_POST["projectSelect"];
			$this->dutyPerId 		= $_POST["dutyPerId"];
			$this->officerType 		= $_POST["officerType"];
			$this->manDayValue 		= $_POST["manDayValue"];
			$this->taskName 		= $_POST["taskName"];
			$this->taskDescription 	= $_POST["taskDescription"];
			$this->taskStartDate 	= $_POST["taskStartDate"];
			$this->taskEndDate 		= $_POST["taskEndDate"];




			$this->db = new dB;
			$this->dataControl();
		}	

		public function dataControl(){

			$this->taskInsert();
		}

		public function taskInsert(){

			/*
			echo $this->projectSelect;
			echo $this->userId;
			echo $this->employeeId;
			echo $this->taskName;
			echo $this->taskDescription;
			echo $this->taskStartDate;
			echo $this->taskEndDate;
			echo $this->manDayValue;
			*/

			$taskStatus = "DEVAM EDİYOR";
			$taskStartDate 	= strtotime($this->taskStartDate);
			$taskEndDate	= strtotime($this->taskEndDate);

			$dutyUserId = null;
			$dutyEmployeeId = null;

			if($this->officerType == "kullanici") $dutyUserId 	= $this->dutyPerId;
			if($this->officerType == "calisan") $dutyEmployeeId = $this->dutyPerId;

			$this->db->insert("task", [	"projectId"			=> $this->projectSelect,
										"creatingTask"		=> $this->userId, 
										"dutyUserId"		=> $dutyUserId,
										"dutyEmployeeId"	=> $dutyEmployeeId,
										"officerType"		=> $this->officerType,
										"taskName"			=> $this->taskName,
										"taskDescription" 	=> $this->taskDescription,
										"taskStartDate" 	=> $taskStartDate,
										"taskEndDate" 		=> $taskEndDate,
										"manDayValue" 		=> $this->manDayValue,
										"taskStatus" 		=> $taskStatus	]);	

			$this->taskInsert 		= true;
			$this->callBackMsg 	 	= $this->taskName." Eklendi.";
			$this->sendCallBack();													
		}

		public function sendCallBack(){
			$array = array("taskInsert" 	=> $this->taskInsert,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}

	new pagesAddTaskInsert;
?>