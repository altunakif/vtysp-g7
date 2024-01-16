<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesAddProjectInsert extends dB
	{
		public $creatingProject 	= null;
		public $projectName 		= null;
		public $projectDescription 	= null;
		public $projectStartDate 	= null;
		public $projectEndDate 		= null;

		public $projectInsert	= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->creatingProject 		= $_POST["creatingProject"];
			$this->projectName 			= $_POST["projectName"];
			$this->projectDescription 	= $_POST["projectDescription"];
			$this->projectStartDate 	= $_POST["projectStartDate"];
			$this->projectEndDate 		= $_POST["projectEndDate"];

			$this->db = new dB;
			$this->dataControl();
		}

		public function dataControl(){

			$this->projectInsert();
		}

		public function projectInsert(){
			$projectStartDate 	= strtotime($this->projectStartDate);
			$projectEndDate		= strtotime($this->projectEndDate);

			$this->db->insert("project", [	"creatingProject"		=>$this->creatingProject,
											"projectName"			=>$this->projectName, 
											"projectDescription"	=>$this->projectDescription, 
											"projectStartDate"		=>$projectStartDate,
											"projectEndDate"		=>$projectEndDate,
											"projectStatus"			=>"DEVAM EDİYOR"]);	
			$this->projectInsert = true;
			$this->callBackMsg 	 = $this->projectName." Eklendi.";
			$this->sendCallBack();													
		}

		public function sendCallBack(){
			$array = array("projectInsert" 	=> $this->projectInsert,
							"callBackMsg" 	=> $this->callBackMsg);
			echo json_encode($array);
		}		

	}

	new pagesAddProjectInsert;
?>