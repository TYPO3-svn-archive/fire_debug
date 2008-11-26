<?php
/*
 * Created on 02.07.2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
class FireVar
{
	private $name;
	private $type;
	private $length;
	private $value;
	
	public function __construct()
	{
		$this->name = '';
		$this->type = '';
		$this->value = '';
		$this->length = 0;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setType($type)
	{
		$this->type = $type;
	}
	public function setLength($length)
	{
		$this->length = $length;
	}
	public function setValue($value)
	{
		$this->value = $value;
	}
	
	
	/**
	 * Dumps this FireVar
	 */
	public function getAsArray()
	{
		/*if(is_array($this->value))
		{
			if(2 == count($this->value) && is_array($this->value[0]))
			{
				//Object-Array with Subarray [properties] and [methods]
				$tmpArray = array();
				
				while(list($key, $val) = each($this->value[0])) {
					$tmpArray[$key] = $this->value[0][$key]->getAsArray();
				}
				
				$this->value[0] = $tmpArray;
			}
			else
			{
				//Array-Array with FireVar Objects
				$tmpArray = array();
				
				while(list($key, $val) = each($this->value)) {
					$tmpArray[$key] = $this->value[$key]->getAsArray();
				}
	
				$this->value = $tmpArray;
			}
		}*/
		return array($this->name, $this->type, $this->length, $this->value);
	}
}
?>
