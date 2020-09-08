<?php
      class student{
      	public $name;
      	function __construct($name){
      		$this->name=$name;
      	}
      	function show_name(){
      		echo "<br>Student Name is $this->name";
      	}
      }
      class Bootcamper extends student{
      	public  $city;
      	function __construct($name,$city){
      		parent::__construct($name);
      		$this->city=$city;
      		      	}
      	function show_city(){
      	echo "<br>Student from $this->city";
      }
      function show_name(){
      	echo" <br> Bootcamper name is :$this->name";
      }
  }
 class internstudent extends student{
 	public $university;
 	function __construct($name,$university){
 		parent::__construct($name);
 		$this->university=$university;
 	}
 	function show_name(){
 		echo "<br> Intern student $this->name from $this->university";
 	}
 }
 $intern1=new internstudent("BoBO","UCSS");
 $intern1->show_name();

  $bootcamper1=new Bootcamper("Mg Mg","Yangon");
 /* var_dump($bootcamper1);*/
  $bootcamper1->show_name();
  $bootcamper1->show_city();
  $student1=new student("Ko Ko");
  $student1->show_name();
?>
