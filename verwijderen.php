<?php
require_once 'includes/dbh.inc.php';

//start the session
session_start();

//check if user is logged in, if not redirect to index.php
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
//gets the id
$id = $_GET['id'];

//checks if the id is a number
if (is_numeric($id)) {

    $sql = "SELECT * FROM `afspraak` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
    }
}


?>
