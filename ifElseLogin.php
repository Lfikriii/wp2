<form action="ifElse2.php" method="post">
    Masukkan username :<input type="text" name="user"><br>
    Masukkan Password :<input type="password" name="pass"><br>
    <input type="submit" value="login">
    <input type="reset" value="cancel">
</form>

<?php
$username = $_POST["user"];
$password = $_POST["pass"];

if (($username == "aas") && ($password == 123)) {
    echo "login sukses...";
} else {
    echo "gagal";
}

?>