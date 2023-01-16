<?php
	/* 
   *  PDO DATABASE CLASS
   *  Connects Database Using PDO
	 *  Creates Prepeared Statements
	 * 	Binds params to values
	 *  Returns rows and results
   */
class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;
	
	private $dbh;
	private $error;
	private $stmt;
	
	public function __construct() {
		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$options = array (
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		);

		// Create a new PDO instanace
		try {
			$this->dbh = new PDO ($dsn, $this->user, $this->pass, $options);
		}		// Catch any errors
		catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
	}
	
	// Prepare statement with query
	public function query($query) {
		//$query = $query . " limit 5 OFFSET 5 ";
		 $this->stmt = $this->dbh->prepare($query);
		//  var_dump($query);

	}

		// Prepare statement with query
		public function queryPaginated($query,$start=null,$offset=null) {
			
			if (($start==null)||($offset==null)) {
				$this->query($query);

			}else {

			$Limit = 6;

			$page = isset( $_GET['page']) ? $_GET['page'] : 1;
			$offset = ($page - 1 ) * $Limit;
			$query = $query . " limit {$start} OFFSET $offset ";
				$this->query($query);
			}
			 $this->stmt = $this->dbh->prepare($query);


		//	 die(var_dump($query));
	
		}




		
	

		// public function queryPaginated($query,$Limit=null,$offset=null) {
			
		// 	if (($Limit==null)||($offset==null)) {
		// 		$this->query($query);

		// 	}else {

		// 	$query = $query . " limit {$Limit} OFFSET $offset ";
		// 		$this->query($query);

		// 	}
		// 	 $this->stmt = $this->dbh->prepare($query);


		// //	 die(var_dump($query));
	
		// }


	// Bind values
	public function bind($param, $value, $type = null) {
		if (is_null ($type)) {
			switch (true) {
				case is_int ($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null ($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	// Execute the prepared statement
	public function execute(){
		return $this->stmt->execute();
	}
	
	// Get result set as array of objects
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
	// Get single record as object
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// Get record row count
	public function rowCount(){
		return $this->stmt->rowCount();
	}
	
	// Returns the last inserted ID
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}
}