<?php 

class EMPLOYEE
{
	var $empID;
	var $empName;
	function Hey()
	{
		echo "<h1> Hi There</h1>";
	}
	function setEmployee($Id, $name) {

		$this -> empID = $Id;
		$this -> empName = $name;

	}
	function getEmployee(){
		echo "<br>". $this-> empID;
		echo "<br>". $this-> name;
	}

	function toString() {
		return($this->empID. "," .$this->empName);

	}
}

class SAlARY extends EMPLOYEE {

	var $salary;





	 function construct () {
	 	echo "<h1>Hi there</h1>";

	 }

	 function setSalary($pay) {

	 	$this -> salary = $pay;


	 }

	 function getSalary( 	){

	 	echo "<br>". $this -> salary;

	 }

	 function toString() {
		return($this->salary);

	}


}


$emp= new salary;
$emp->empid=70;
$emp->empname="prabh";
$emp->basicpay= 700;
        echo "<br>" .$emp->empid;
		echo "<br>" .$emp->empname;
		echo "<br>". $emp->basicpay;
	$emp->setData(200,"test name");
		$emp->getData();





 ?>