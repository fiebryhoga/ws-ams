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
        return $this->payroll->computeSalaryBasedOnAttendance($attendanceData);
    }
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['month']) && isset($_GET['year'])) {
    $month = (int) $_GET['month'];
    $year = (int) $_GET['year'];

    if ($month < 1 || $month > 12 || $year < 2000 || $year > 2100) {
        echo json_encode(['error' => 'Bulan atau tahun tidak valid.']);
        exit;
    }

    $salaryService = new SalaryService();
    $salary = $salaryService->calculateSalary($month, $year);

    echo json_encode(['salary' => $salary]);
} else {
    echo json_encode(['error' => 'Bulan dan tahun diperlukan.']);
}


$server = new SoapServer("salary.wsdl");
$server->setClass("SalaryService");
$server->handle();
