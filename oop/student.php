<?php
/*       //show three students information
$student1="Mg Mg";
$student2="Kyaw Kyaw";
$student3="Ny Ny";
$student1_city="Yangon";
$student2_city="Mandalay";
$student3_city="Sittway";
echo "$student1 lives in $student1_city";
echo "$student2 lives in $student2_city";
echo "$student3 lives in $student3_city";*/

class student{
	private $name;
	public $city;

	function set_name($name){
		$this->name=$name;
	}
	function set_city($city){
		$this->city=$city;
	}
	function get_name(){
		return $this->name;
	}

	function get_city(){
		return $this->city;
	}
	function showdata(){
		echo "$this->name lives in $this->city";
	}
}
$student1=new student();
/*$student1->name="MG MG";
$student1->city="Sittway";*/
$student1->set_name("MG mg");
$student1->set_city("Sittway");
echo $student1->get_name();

$student1->showdata();

require 'bank.php';
Bank::showMessage();
?>


