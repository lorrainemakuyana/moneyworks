<?php

	require('db_credentials.php');

	class database_connect {
		
		public $db = null;
		public $results = null;

		function connect(){
			$this->db = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);
			return mysqli_connect_errno();
		}

		function query($sql){
			if (!$this->connect() || $this->db == null) {
				return false;
			}

			$this->results = mysqli_query($this->db,$sql);
			return $this->results;
		}
		
		function fetch(){
			if ( $this->results ) {
				return false;
			}
			return mysqli_fetch_assoc($this->results);
		}
	}
?>
