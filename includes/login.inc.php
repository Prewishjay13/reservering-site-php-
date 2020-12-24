<?php
include 'dbh.inc.php';
session_start();

if (isset($_POST['submit'])) {

    $uid = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
    $pwd = mysqli_real_escape_string($conn,htmlentities($_POST['password']));
//    $pwd = $_POST['password'];

    if (empty($uid) || empty($pwd)) {
        header("Location:../index.php?Login=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$uid' AND password='$hashedPwd'";

        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if ($count < 1) {
            echo 'ERROR';
        } else {

//           if (password_verify($pwd, $row['password'])) {
            $_SESSION['permission'] = $row['permission'];
            if (isset($_SESSION['permission'])) {
                header("Location:../index.php");
            } else {
                header("Location: signup.inc.php");
            }
        }
    }
}
