<?php
	/*
		User class with the constructor method, which instance variables name and subname,
		and the method of testing for each variable. In the case that the variable if empty or 
		is not set return err.
	*/
	class User
	{
		function __construct($name, $subname)
		{
			$this->name = $name;
			$this->subname = $subname;
		}
		function checkName(){
			if(empty($this->name) || !isset($this->name)){
				return "errW";
			}else{
				return $this->name;
			}
		}
		function checkSubname()
		{
			if(empty($this->subname) || !isset($this->subname)){
				return "errW";
			}else{
				return $this->subname;
			}
		}
	}
	// Function escaping characters.
function escape($value){
		return htmlspecialchars($value);
}
?>