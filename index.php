<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content= "width=device-width">
    <title>Tandartsen praktijk Autar</title>
    <link rel="stylesheet" href= "./css/style.css">

</head>

<body>

<header>
    <div class="container">
        <div id="logo>"
        <nav><h1><span class="hightlight">Tandartsen praktijk Autar</span></h1></div></nav>
    <nav>
        <div class="container">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <li> <a href="about.php">Over ons</a></li>

                <?php
                if ($_SESSION['permission'] == '0') {
                    ?>
                    <li><a href="afspraken.php">Afspraak</a></li>
                    <?php
                } else {}
                ?>

                <li> <a href="signup.php">signup</a></li>

                <?php
                if (isset($_SESSION['permission'])) {
                    ?>
                    <li><a href="logout.php">logout</a></li>
                    <?php
                }

                if ($_SESSION['permission'] == '1'){
                    ?>
                    <li><a href="overzicht.php">overzicht</a></li>
                <?php } else{} ?>
            </ul>
            <?php if (!isset($_SESSION['permission'])){
                ?>

                <div class="nav-login">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="username" placeholder="Username/e-mail">
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" class="button-1" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>
                </div>
            <?php } ?>
    </nav>
    </div>
</header>


<div class="container">
    <div id="showcase">

        <h1>Tandartsen Praktijk Autar</h1>
        <p>De beste plek voor het gezondheid van je tanden.</p>
    </div>
</div>

<!--3boxjes met info-->
<section id="boxes">
    <div class="container">
        <div class="box">
            <h3>Adres</h3>
            <p> Theodorusstraat #209 <br> 2312WE</p>
        </div>
        <div class="box">
            <h3>Telefoon & E-Mail</h3>
            <p> +3168384694 <br>

                </br>tandarts@praktijk.nl</p>
        </div>
        <div class="box">
            <h3>Openingstijden</h3>
            <ul> Maandag: 8:30 – 17:00</ul>
            <ul>Dinsdag: 8:30 – 17:00</ul>
            <ul>Woensdag: 8:30 – 17:00</ul>
            <ul>Donderdag: 8:30 – 19:30</ul>
            <ul>Vrijdag: 8:30 – 17:00</ul>
            <ul>Zaterdag: op afspraak</ul>
        </div>
    </div>
</section>
</body>
</html>

<?php
include_once 'footer.php';
?>

