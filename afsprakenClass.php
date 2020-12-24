<?php
include 'includes/dbh.inc.php';
//use htmlspecialchars against sql injections. checks to see if what is being filled in doesnt have symbols
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn,htmlentities($_POST['username']));
    $behandeling = htmlspecialchars($_POST['behandeling']);
    $time = htmlspecialchars($_POST['time']);
    $date = htmlspecialchars($_POST['date']);


    //insert user into database
    $sql = "INSERT INTO afspraak (datum, tijd, user_id, behandeling_type) VALUES ('$date', '$time', '$username', '$behandeling')";
    $result = mysqli_query($conn, $sql);
    header("location: index.php");
}


else {
    header("Location:../signup.php");
    exit();
}

?>
