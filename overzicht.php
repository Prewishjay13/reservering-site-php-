<?php
include 'includes/dbh.inc.php';

session_start();

if ($_SESSION['permission'] == '0') {
    header("Location: index.php");
}

$query = "SELECT * FROM afspraak";
$result = mysqli_query($conn, $query);

//print all patients echo van html mag niet! remove this
echo "<table>";
echo "<tr>";
echo "<th>datum</th>";
echo "<th>tijd</th>";
echo "<th>user_id</th>";
echo "<th>behandeling type</th>";
echo "<th>Tijd</th>";
echo "<th></th>";
echo "<th></th>";
echo "</tr>";

//loop door alle studenten heen en print ze
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['datum'] . "</td>";
    echo "<td>" . $row['tijd'] . "</td>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['behandeling_type'] . "</td>";
    echo "<td><a href='aanpassen.php?id=" . $row['id'] . "'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='verwijder.php?id=" . $row['id'] . "'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
}
echo "</table>";
?>