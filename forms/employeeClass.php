<?php
class Employee {
    public $employee;
    public $basePay;
    public $salaryPerHour;

    public function __construct($employee,$salaryPerHour) {
        $this->employee = $employee;
        $this->salaryPerHour = $salaryPerHour;
    }

    public function intro() {
        echo "Employee {$this->employee} has a salary of {$this->salaryPerHour} per hour.";
    }
}
class VagueEmployee extends Employee {
    public function __construct($employee, $salaryPerHour,$workingHours) {
        $this->employee = $employee;
        $this->salaryPerHour = $salaryPerHour;
        $this->workingHours = $workingHours;
    }

      public function intro() {
        $basePay = $this->salaryPerHour * $this->workingHours;
        echo "Employee {$this->employee} has a salary of {$this->salaryPerHour} per hour. {$this->employee} has a total salary of {$basePay} per month.";
      }

      function __call($name,$arg){ //overloading
        if($name == 'getBasePay')
           switch(count($arg)){
              case 0 : return $this->salaryPerHour * $this->workingHours;
              case 1 : return ($this->salaryPerHour * $this->workingHours) * 2;
           }
     }

      public function getWorkingHours() {
        return $this->workingHours;
      } 
}
?>