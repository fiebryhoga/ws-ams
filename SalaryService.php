<?php

require 'Attendance.php';
require 'Payroll.php';

class SalaryService
{
    private $attendance;
    private $payroll;

    public function __construct()
    {
        $this->attendance = new Attendance();
        $this->payroll = new Payroll();
    }

    /**
     * @param int $month
     * @param int $year
     * @return float
     */
    public function calculateSalary($month, $year)
    {
        $attendanceData = $this->attendance->getAttendanceData($month, $year);

        $salary = $this->payroll->computeSalaryBasedOnAttendance($attendanceData);

        return $salary;
    }
}
