<?php 

  /**
  *    NIM   : 2257401016
  *    Nama  : Helen Imeldasari
  *    Kelas : MI22A
  */

?>

<form action="" method="POST">
    <h2>Form Login</h2>

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>
   
    <input type="submit" value="Login" name="login">

</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "admin" && $password == "admin") {
            echo "Login Berhasil";
        } else {
            echo "Username/Password tidak sesuai";
        }
    }
    ?>
</body>
</html>
