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
            <img src="images/about.jpeg" width="500" height="700">
        </div>
        <div class="box1">
            <p>
                Hoi, Ik ben Ravieta Autar en ik ben een tandarts in Den Haag.
                <br>Mijn praktijk biedt u een snelle service en een professioneel team, die de verzorging van uw gebit van u overneemt. Dit alles tegen betaalbare tarieven.
                <br>Als tandarts ben ik gespecialiseerd in verschillende aspecten van tandheelkunde, waaronder wortelkanaalbehandeling,
                <br> tandvleesbehandeling, of gebitsreiniging, kunstgebitten, kroon & brugwerk en implantaten. <br>

            </p>
        </div>
    </div>
</section>
</body>
</html>

<?php
include_once 'footer.php';
?>

