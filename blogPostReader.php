<?php

class BlogPostReader {
	private $ser;	// server; 
	private $use;	// userName
	private $pas;	// passWord
	private $dat;	// database

	private $timestampArray; 
	private $titleArray; 
	private $contentArray; 

	function __construct($dat) {
		$this->ser = 'localhost';
		$this->use = 'root';
		$this->pas = 'skyblue';
		$this->dat = $dat;

		$this->timestampArray = array(); 
		$this->titleArray = array(); 
		$this->contentArray = array(); 

		$this->getPosts($ser, $use, $pas, $dat, $timestampArray, $titleArray, $contentArray); 
	}

	private function getPosts($ser, $use, $pas, $dat, $timestampArray, $titleArray, $contentArray) {
		@ $mysqli = new mysqli($this->ser, $this->use, $this->pas, $this->dat);

		// USE EXCEPTION HERE
		if ($mysqli->connect_errno) {
			$this->result = 'Error: could not connect to database.'; 
		} else {
			$query = "SELECT * FROM blog_posts ORDER BY timestamp DESC"; 
			$result= $mysqli->query($query); 
			$mysqli->close;

			while($row = $result->fetch_row()){
				array_push($this->timestampArray, $row[1]); 
				array_push($this->titleArray, $row[4]); 
				array_push($this->contentArray, $row[5]); 
			}
		}
	}

	public function getTimestamps() {
		return $this->timestampArray; 
	}

	public function getTitles() {
		return $this->titleArray; 
	}

	public function getContent() {
		return $this->contentArray; 
	}
}

?>