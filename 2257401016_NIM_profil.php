<?php 

  /**
  *    NIM   : 2257401016
  *    Nama  : Helen Imeldasari
  *    Kelas : MI22A
  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Page</title>
</head>
<body>
    <h2>Profil</h2>
    <form action="" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="hp">Nomor HP:</label><br>
        <input type="text" id="hp" name="hp"><br><br>
        <input type="submit" value="Simpan" name="simpan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Informasi Profil:</h3>";
        echo "NIM: " . $_POST["nim"] . "<br>";
        echo "Nama: " . $_POST["nama"] . "<br>";
        echo "Kelas: " . $_POST["kelas"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Nomor HP: " . $_POST["hp"] . "<br>";
    }
    ?>
</body>
</html>
