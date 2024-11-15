<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll System - Calculate Salary</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Hitung Gaji Berdasarkan Kehadiran</h1>
        <form id="salary-form" onsubmit="event.preventDefault(); calculateSalary();">
            <label for="month">Bulan:</label>
            <input type="number" id="month" name="month" min="1" max="12" required>
            <label for="year">Tahun:</label>
            <input type="number" id="year" name="year" min="2000" max="2100" required>
            <button type="submit">Hitung Gaji</button>
        </form>
        <div id="result"></div>
    </div>
</body>
</html>
