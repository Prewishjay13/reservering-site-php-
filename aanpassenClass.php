<?php
require_once 'includes/dbh.inc.php';


//check of er op de submit knop is gedrukt
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $behandeling = htmlspecialchars($_POST['behandeling']);
    $time = htmlspecialchars($_POST['time']);
    $date = htmlspecialchars($_POST['date']);

//    $getData = "SELECT * FROM afspraak WHERE datum = '$date' and tijd = '$time'";
//    $resultGetData = mysqli_query($conn, $getData);
//
//    if($resultGetData->num_rows == 0) {
        //update alle opgeslagen data in de database
        $sql = "UPDATE afspraak SET behandeling_type = '$behandeling', tijd = '$time', datum = '$date' WHERE id = '$id'";

        $result = mysqli_query($conn, $sql)
        or die('Error' . mysqli_error($conn));

        header('Location: overzicht.php');
//    }
}
