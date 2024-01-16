<?php
	/**
	 * 
	 */
	class dB {

		public $hostname, $dbname, $username, $password, $conn;

		function __construct() {
		    $this->host_name 	= DB_HOST;
		    $this->dbname 		= DB_HOSTNAME;
		    $this->username 	= DB_USERNAME;
		    $this->password 	= DB_PASSWORD;
		    try {

		        $this->conn = new PDO("mysql:host=$this->host_name;dbname=$this->dbname", $this->username, $this->password);
		       	$this->conn->query("SET CHARACTER SET utf8");
		        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    } catch (PDOException $e) {
		        echo 'Error: ' . $e->getMessage();
		    }

		    $this->security();

		}

		function security(){

			/**
			 * pages-login-control ve pages-new-user-insert sayfaları hariç session kontrolü yapılır.
			 * */
			$path = $_SERVER['REQUEST_URI'];
			if ( ($path != "/php/pages-login-control.php") and ($path != "/php/pages-new-user-insert.php") ){
				if (session_status() === PHP_SESSION_NONE) {
    				session_start();
				}
				if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
					//var_dump($_SESSION);
				}else{
					exit();
				}
			}
		}

		function customSelect($sql) {
		    try {
		         $stmt = $this->conn->prepare($sql);
		         $result = $stmt->execute();
		         $rows = $stmt->fetchAll(); // assuming $result == true
		         return $rows;
		    } catch (PDOException $e) {
		        echo 'Error: ' . $e->getMessage();
		    }
		}

		/*
		* USING
		*select("col1, col2", "table", "col = val");
		*select("col1, col2", "table");
		*
		*EXAMPLE
		*select("userName, userSurname", "user", "userPhone = 05432198765 AND col1 = test");
		*select("userName, userSurname", "user", "userPhone = 05432198765");
		*select("userName, userSurname", "user");
		*/

		function select($col, $tableName, $where=null) {


			$colArray = explode(",", $col);
			$col 	= "";
			$count 	= 0;

			foreach ($colArray as $value) {
				$count++;
				if (count($colArray) != $count){
					$col = $col."$value,";
				}else{
					$col = $col."$value";
				}
    			
			}

			if ($where != null or $where != ""){
				$whereArray = explode(" ", $where);
				$where 	= "";
				$count 	= 0;
				foreach ($whereArray as $value) {
					$count++;
					if (count($whereArray) != $count){
						$where = $where."$value ";
					}else{
						$where = $where."$value";
					}
	    			
				}					
			}

			if ($where != null or $where != "") $sql = "SELECT ".$col." FROM ".$tableName." WHERE ".$where; 
			else $sql = "SELECT ".$col." FROM ".$tableName;

		    try {
		         	$stmt = $this->conn->prepare($sql);
		        	$result = $stmt->execute();
		        	$rows = $stmt->fetchAll(); // assuming $result == true
		        	return $rows;
		    } catch (PDOException $e) {
		        echo 'Error: ' . $e->getMessage();
		    }

		}

		/**
		 * 
		 * USING
		 *innerJoin("table1.col1, table2.col2", "table1", ["table2"=>"table2.col = table1.col"], " WHERE project.projectStatus = 'New' " )
		 * 
		 * EXAMPLE
		 * innerJoin("project.*, 
					  user.userName, 
					  user.userSurname", 
					  "project", 
					  ["user"=>"project.creatingProject = user.userId"],
					  "WHERE project.projectStatus = 'New'");
		 */
		function innerJoin($cols, $table, $array, $where=""){
			$sql = "SELECT ".$cols." FROM ".$table." ";
			foreach ($array as $key => $value) {
				$sql = $sql." INNER JOIN ".$key." ON ".$value." ";
			}
			$sql = $sql.$where;

		    try {
		         	$stmt = $this->conn->prepare($sql);
		        	$result = $stmt->execute();
		        	$rows = $stmt->fetchAll(); // assuming $result == true
		        	return $rows;
		    } catch (PDOException $e) {
		        echo 'Error: ' . $e->getMessage();
		    }			

		}


		function num_rows($rows){
		     $n = count($rows);
		     return $n;
		}

		function delete($tbl, $cond='') {
		    $sql = "DELETE FROM `$tbl`";
		    if ($cond!='') {
		        $sql .= " WHERE $cond ";
		    }

		    try {
		        $stmt = $this->conn->prepare($sql);
		        $stmt->execute();
		        return $stmt->rowCount(); // 1
		    } catch (PDOException $e) {
		        return 'Error: ' . $e->getMessage();
		    }
		}

		function insert($tbl, $arr) {
		    $sql = "INSERT INTO $tbl (`";
		    $key = array_keys($arr);
		    $val = array_values($arr);
		    $sql .= implode("`, `", $key);
		    $sql .= "`) VALUES ('";
		    $sql .= implode("', '", $val);
		    $sql .= "')";

		    //var_dump($sql);

		    $sql1="SELECT MAX( id ) FROM  `$tbl`";
		    try {

		        $stmt = $this->conn->prepare($sql);
		        $stmt->execute();
		        $stmt2 = $this->conn->prepare($sql1);
		        $stmt2->execute();
		        $rows = $stmt2->fetchAll(); // assuming $result == true
		        return $rows[0][0];
		    } catch (PDOException $e) {
		        return 'Error: ' . $e->getMessage();
		    }
		}

		function update($tbl, $arr, $cond) {
		    $sql = "UPDATE `$tbl` SET ";
		    $fld = array();
		    foreach ($arr as $k => $v) {
		        $fld[] = "`$k` = '$v'";
		    }
		    $sql .= implode(", ", $fld);
		    $sql .= " WHERE " . $cond;

		    try {
		        $stmt = $this->conn->prepare($sql);
		        $stmt->execute();
		        return $stmt->rowCount(); // 1
		    } catch (PDOException $e) {
		        return 'Error: ' . $e->getMessage();
		    }
		}
	}

	/*
	$db = new dB;
	$db->insert("user", ["userName"=>"test", "userSurname"=>"altun"]);
	*/

?>