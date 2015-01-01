<?php

class Blog {
//	var $numRows; 

/*
	function __contruct($num) {
		$this->numRows = $num; 
	}
*/

	function get_numPosts($database) {
		require_once ('blogFunctions.php'); 
	
		$link = db_connect($database); 

		$query = "SELECT post_id FROM blog_posts"; 
		$result = mysql_query($query); 
	
		if (!$result) {
			$this->numRows = '<p>There was a database problem. Error no:'.mysql_errno().'; error: '.mysql_error().'</p>'; 
		} else {
			$this->numRows = mysql_num_rows($result); 
		}

		return $this->numRows; 

		db_close($link); 
	}

/*
	public function getContent($database) {
		require_once ('blogFunctions.php'); 
	
		$link = db_connect($database); 

		$query = "SELECT * FROM blog_posts ORDER BY timestamp DESC"; 
		$result = mysql_query($query); 
	
		if (!$result) {
			return '<p>There was a database problem. Error no:'.mysql_errno().'; error: '.mysql_error().'</p>'; 
		} else {
			$title = mysql_result ($result, 0, 'title'); 
			$timestamp = mysql_result ($result, 0, 'timestamp'); 
			$content = mysql_result ($result, 0, 'content'); 
		}

		return $result; 

		db_close($link); 
	}
*/

	/*
	function __construct($content) {
		echo $content; 
	}
	*/

//	var $content = 'Hello World!'; 

//	private $blogContent = 'Hello World'; 

//	var $attribute = 6; 

/*
	function __get($value) {
		return $this->$value; 
	}
*/

/*
	function __set($name, $value) {
		$this->$name = $value; 
	}
*/

//	public $blogContent; 
}

class BlogPost {
	var $title; 
	var $timestamp; 
	var $content; 

	function __contruct($i) {
		require_once ('blogFunctions.php'); 
	
		$link = db_connect($database); 

		$query = "SELECT * FROM blog_posts"; 
		$result = mysql_query($query); 

		db_close($link); 

		$this->title = mysql_result($result, $i, 'title'); 
	}
}

?>