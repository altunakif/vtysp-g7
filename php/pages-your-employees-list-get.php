<?php 
	/**
	 * 
	 */
	include_once("config.php");
	include_once("dB.php");
	class pagesEmployeesListGet extends dB
	{
		public $userId			= null;
		public $callBackMsg		= null;
		public $db 				= null;	

		function __construct()
		{
			$this->db = new dB;
		}

		public function getAllUser(){
			$tr = "";
			$allUserList = $this->db->select("employeeId, nameSurname, phone", "employee", "ownerUser = {$this->userId}");


			foreach ($allUserList as $key => $value) {
				$firstLetter = mb_substr($value["nameSurname"], 0, 1, "UTF-8");

				$tr = $tr.'
                <tr class="footable-even" style="">
                    <td><span class="footable-toggle"></span>1</td>
                    <td>
                        <span class="round">'.$firstLetter.'</span> <span class="profile-status away pull-right"></span>
                        <a href="#">'.$value["nameSurname"].'</a>
                    </td>
                    <td>'.$value["phone"].'</td>
                    <td style="text-align:center"><span class="label label-success">7</span> </td>
                    <td style="text-align:center"><span class="label label-info">7</span> </td>
                    <td style="text-align:center"><span class="label label-danger">5</span> </td>
                    <td style="text-align:center"><span class="label label-info">7</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline editemployees" data-toggle="modal" data-original-title="Düzenle" data-toggle="modal" data-target="#responsive-modal2" data-eeid="'.$value["employeeId"].'">
                            <i class="fa fa-pencil" aria-hidden="true" style="font-size: 35px;"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn deleteemployees" data-toggle="tooltip" data-original-title="Sil" data-eid="'.$value["employeeId"].'" >
                            <i class="fa fa-trash-o" aria-hidden="true" style="font-size: 35px;"></i>
                        </button>
                    </td>
                </tr>
				';
			}
			return $tr;			
		}	

	}

	$pagesEmployeesListGet = new pagesEmployeesListGet;
	
?>