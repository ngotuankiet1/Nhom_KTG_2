<?php
session_start();
require 'database/array.php';
if (isset($_POST['login'])) {
    $username = $_POST['txtUseName'];
    $password = $_POST['txtpassword'];
    if ($username == $info_login[1]['txtUseName'] && $password == $info_login[1]['txtpassword']) {
        $_SESSION['login'] = true;
        header("Location: index.php");
    } else {
        echo 'tk mk sai ';
    }
}
?>
<html>

<body>
    <form method="POST">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="txtUseName"><br><br>
        <label for="">Mật khẩu:</label>
        <input type="password" name="txtpassword"><br><br>
        <input type="submit" name="login" value="đăng nhập" />
    </form>
</body>

</html>