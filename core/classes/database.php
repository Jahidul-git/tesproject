<?php
	/* --- Database Connection ---*/
	include'../../config.php';
	abstract class Database
	{
		public $db;

		function __construct()
		{
			$this->db = new mysqli(HOSTNAME,USERNAME,PASSWORD,DBNAME);
			if ($this->db) {
				echo "Database is connected";
			}
		}
	}





?>