async function calculateSalary() {
  const month = document.getElementById("month").value;
  const year = document.getElementById("year").value;
  const url = `http://localhost/wsams/server.php?month=${month}&year=${year}`;

  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error(`Error: ${response.status}`);
    }
    const data = await response.json();
    document.getElementById("result").innerText = `Gaji: Rp ${data.salary}`;
  } catch (error) {
    console.error("Error fetching data:", error.message);
    document.getElementById("result").innerText =
      "Terjadi kesalahan. Coba lagi.";
  }
}
