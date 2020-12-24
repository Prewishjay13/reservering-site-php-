<?php
include 'dbh.inc.php';

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    $first = mysqli_real_escape_string($conn,htmlentities($_POST['firstname']));  //to fetch the information from the form we use the post method and the name of the input that was used int the form.
    $last = mysqli_real_escape_string($conn,htmlentities($_POST['lastname']));
    $email = mysqli_real_escape_string($conn,htmlentities($_POST['email']));
    $uid = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
    $pwd = mysqli_real_escape_string($conn,htmlentities($_POST['password']));
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $permission = '0';

    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header("location:..//signup.php?signup=usertaken");
        exit();
    } else {
        //insert user into database
        $sql = "INSERT INTO users (firstname, lastname, email, username, password, permission) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', '$permission')";
        $result = mysqli_query($conn, $sql);
        header("location:../index.php");
        exit();}
}

else {
    header("Location:../signup.php");
    exit();
}

?>