<?php
/*
 * Created on 02.07.2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
/**
 * Repr�sentiert einen Debug Output von FirePHP
 */
class FireExport
{
	private $title;
	private $fexvars;
	
	public function __construct($title)
	{
		$this->title = $title;
	}
	
	public function appendToTitle($appText)
	{
		$this->title .= $appText;
	}
	
	/**
	 * Adds the Fexvars in the Array to the Export
	 * 
	 * @param {array} $fexvars - Array mit FexVar Objekten
	 */
	public function addFexVars($fexvars)
	{
		$this->fexvars = $fexvars;
	}
	
	/**
	 * Dumps this Export
	 */
	public function dump()
	{
		$fv = null;
	
		
		for($i = 0, $l = count($this->fexvars); $i < $l; $i ++)
		{
			$fv = & $this->fexvars[$i];
			fb(array($this->title, array(array('Length', 'Type','Name','Value'), $fv->getAsArray())), FirePHP::TABLE);
		}
	}
}
?>
