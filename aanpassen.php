<?php
//include het config.php bestand
require_once 'includes/dbh.inc.php';

session_start();

if ($_SESSION['permission'] == '0') {
    header("Location: index.php");
}

$id = $_GET['id'];
if (is_numeric($id)){
    $sql ="SELECT * FROM afspraak WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $rowresult= mysqli_num_rows($result);
}
if ($rowresult == 1){
    $row = mysqli_fetch_array($result);
}

?>
<div>
    <form  action="aanpassenClass.php" method="POST"><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <select name="behandeling" id="">
            <option selected><?php echo $row['behandeling_type'];?></option>
            <option value="beugel">beugel</option>
            <option value="vullen">vullen</option>
            <option value="controle">controle</option>
        </select>
<!--     <input id="behandeling" type="text" value="--><?php //echo $row['behandeling_type']; ?><!--"/>-->
        <input id="afspraken" type="time" name="time" value="<?php echo $row['tijd'];?>" />
        <input id="afspraken" type="date" name="date" value="<?php echo $row['datum'];?>" />
        <button id="afspraken" type="submit" class="button-1" name="submit">Submit</button>
    </form>
</div>
