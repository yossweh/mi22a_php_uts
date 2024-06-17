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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Page</title>
    <link rel="stylesheet" href="loop.css">
</head>
<body>
<div class="loop-container">
  <form action="#">
    <h2>Perulangan</h2>
    <form action="" method="post">
        <label for="text">Teks:</label><br>
        <input type="text" id="text" name="text">
        <br><br>
        <label for="count">Jumlah Perulangan:</label><br>
        <input type="number" id="count" name="count" min="1">
        <br><br>
       
        <input type="submit" value="Cetak" name="cetak"> <br><br>
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
    echo $i . " Helen Imeldasari<br>";
}

?>
