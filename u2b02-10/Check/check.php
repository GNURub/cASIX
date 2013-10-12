<?php 
	class User
	{
		function __construct($name="", $subname="", $genre="")
		{
			$this->name = $name;
			$this->subname = $subname;
			$this->genre = $genre;
		}
		function checkName(){
			if(empty($this->name) || !isset($this->name)){
				return false;
			}else{
				return $this->name;
			}
		}
		function checkSubname()
		{
			if(empty($this->subname) || !isset($this->subname)){
				return false;
			}else{
				return $this->subname;
			}
		}
		function checkGenre()
		{
			if(empty($this->genre) || !isset($this->genre)){
				return false;
			}else{
				return $this->genre;
			}
		}
	}
function escape($value=""){
		return htmlspecialchars($value);
}
?>