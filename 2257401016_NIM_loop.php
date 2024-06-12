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
    <title>Loop Page</title>
</head>
<body>
    <h2>Perulangan</h2>
    <form action="" method="post">
        <label for="text">Teks:</label><br>
        <input type="text" id="text" name="text">
        <br><br>
        <label for="count">Jumlah Perulangan:</label><br>
        <input type="number" id="count" name="count" min="1">
        <br><br>
       
        <input type="submit" value="Cetak" name="cetak">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        $count = $_POST["count"];

        for ($i = 0; $i < $count; $i++) {
            echo $text . "<br>";
        }
    }
    ?>
</body>
</html>

<?php 

for($i=1; $i<=3; $i++) {
    // statement
    echo $i . " Halo halo bandung<br>";
}

?>
