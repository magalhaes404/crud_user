<?php
class db{
	function init(){		
			// Sample file: Never send your credentials to git

			// host
			$host = 'localhost';

			// db
			$db_name = 'aulas';
			$db_host = 'localhost';
			$db_user = 'root';
			$db_pass = '';

			try {
				return mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			} catch (\Throwable $th) {
			  throw $th;
			}
	}
	
	
}

?>