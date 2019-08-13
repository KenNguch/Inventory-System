<?php
	class DbConnect {
		private $host = 'us-cdbr-iron-east-02.cleardb.net';
		    private $dbName = 'heroku_28c866c0cec52d8';
		    private $user = 'b1ba6b6cee86e7';
		    private $pass = '6b75b8d6';
				
		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>
