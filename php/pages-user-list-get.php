<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesUserListGet extends dB
	{
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->db = new dB;
		}

		public function getAllUser(){
			//innerJoin("table1.col1, table2.col2", "table1", ["table2"=>"table2.col = table1.col"], " WHERE project.projectStatus = 'New' " )

			$row = "";
			$allUserList = $this->db->select("userName, userSurname", "user");


			/**/
			foreach ($allUserList as $key => $value) {
				$firstLetter = mb_substr($value["userName"], 0, 1, "UTF-8");
				$row = $row.'<a href="#">';
				$row = $row.'<div class="user-img"> <span class="round">'.$firstLetter.'</span> <span class="profile-status away pull-right"></span> </div>';
				$row = $row.'<div class="mail-contnet">';
				$row = $row.'<h5>'.$value["userName"].' '.$value["userSurname"].'</h5> <span class="mail-desc">Kullanıcı</span></div>';
				$row = $row.'</a>';	
			}
			return $row;
			
		}	

	}

	$pagesUserListGet = new pagesUserListGet;
	
?>