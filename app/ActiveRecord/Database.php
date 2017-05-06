<?php 

namespace ActiveRecord;

class Database {

	private $host;
	private $user;
	private $pass;
	private $dbName;
	private static $instance;
	private $connection;
	private $result;
	private $numRows;

	public function __construct()
	{
		
	}

	static function getInstance()
	{
		if(!self::$instance)
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	function connect($host,$user,$pass,$dbName)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbName = $dbName;

		$this->connection = mysqli_connect($this->host,$this->user,$this->pass,$this->dbName);
			if (mysqli_connect_errno())
  			{
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}
	}

	public function doQuery($sql)
	{
		$this->results = mysqli_query($this->connection,$sql);
		$this->numRows = $this->results->num_rows;
	}


	public function loadObjectList()
	{
		$obj = "No Result";
		if($this->results)
		{
			$obj = mysqli_fetch_assoc($this->results);
		}
		return $obj;
	}


}