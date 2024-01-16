<?php 
/**
 * 
 */
class logOut
{
	function __construct()
	{
		session_start();
		session_unset();
		session_destroy();

		$array = array("logout" => true);
		echo json_encode($array);		
	}
}

new logOut;
?>