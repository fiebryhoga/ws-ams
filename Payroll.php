<?php


class Payroll
{
    protected $dailyRate = 120000; // Tarif harian

    public function computeSalaryBasedOnAttendance($attendanceData)
    {
        $daysPresent = count($attendanceData);
        return $daysPresent * $this->dailyRate;
    }
}
