<?php

namespace ActiveRecord;
use ActiveRecord\Database;

class Table {
	protected $id = null;
	protected $table = null;

	public function __construct()
	{

	}

	function bind($data)
	{
		foreach ($data as $key => $value) {
			$this->key = $value;
		}
	}

	function load($id)
	{
		$this->id = $id;
		$dbo = Database::getInstance();
		$sql = $this->buildQuery('load');

		$dbo->doQuery($sql);
		$row = $dbo->loadObjectList();
		foreach ($row as $key => $value) 
		{
			if($key == "id")
			{
				continue;
			}
			$this->key = $value;

		}

	}


	function store()
	{
		$dbo = Database::getInstance();
		$sql = $this->buildQuery('store');
		$dbo->doQuery($sql);
	}

	protected function buildQuery($task)
	{
		$sql = "";
		if($task =='store')
		{
			if($this->id == "")
			{
				$keys = "";
				$values = "";
				$classVars = get_class_vars(get_class($this));
				$sql .= " INSERT INTO {$this->table}";
				foreach ($classVars as $key => $value) 
				{
						if($key == "id" || $key == "table")
						{
							continue;
						}
						$keys .= "{$key},";
						$values .="{$values},"; 
				}
				$sql .="(".substr($keys,0,-1) .") VALUES (".substr($values,0,-1) .")";

			}else
			{
				$classVars = get_class_vars(get_class($this));
				$sql .= " UPDATE {$this->table} set ";
				foreach ($classVars as $key => $value) 
				{
					if($key == "id" || $key == "table")
					{
						continue;
					}
				}
			}

		}
		elseif ($task=='load') 
		{
			
		}
	}
}