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

?>