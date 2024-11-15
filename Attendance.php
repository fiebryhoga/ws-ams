<?php

class Attendance
{
    protected $attendanceRecords = [
        // Contoh data kehadiran
        ['employee_id' => 1, 'date' => '2024-11-01', 'status' => 'present'],
        ['employee_id' => 1, 'date' => '2024-11-02', 'status' => 'present'],
        // ... data lainnya
    ];

    public function getAttendanceData($month, $year)
    {
        $filteredRecords = [];
        foreach ($this->attendanceRecords as $record) {
            $recordMonth = date('m', strtotime($record['date']));
            $recordYear = date('Y', strtotime($record['date']));
            if ($recordMonth == $month && $recordYear == $year && $record['status'] == 'present') {
                $filteredRecords[] = $record;
            }
        }
        return $filteredRecords;
    }
}
