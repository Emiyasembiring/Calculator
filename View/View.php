<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bangun Ruang</title>
</head>
<body>
    <h1>Kalkulator Bangun Ruang</h1>
    <h2>Kubus</h2>
    <form action="controller.php" method="post">
        <label for="cubeSideLength">Panjang Sisi Kubus:</label>
        <input type="text" name="cubeSideLength" id="cubeSideLength">
        <input type="submit" value="Hitung Volume">
        <input type="submit" name="calculateCubeSurfaceArea" value="Hitung Luas Permukaan">
    </form>

    <h2>Bola</h2>
    <form action="controller.php" method="post">
        <label for="sphereRadius">Jari-Jari Bola:</label>
        <input type="text" name="sphereRadius" id="sphereRadius">
        <input type="submit" value="Hitung Volume">
        <input type="submit" name="calculateSphereSurfaceArea" value="Hitung Luas Permukaan">
    </form>

    <div id="result">
        <!-- Hasil perhitungan akan ditampilkan di sini -->
    </div>
</body>
</html>