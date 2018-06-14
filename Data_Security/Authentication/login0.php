<?php
session_start();
$copy = "";
$title = 'login0.php';

?><!doctype html>
<html>
<head>
    <title><?php print($title);?></title>
    <meta charset='utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='demo0.css'/>
</head>
<body>
<header>
    <h1><?php print($title);?></h1>
</header>
<main>
    <section>
        <?php
        if (!
        (isset($_SESSION['demoLoginId']) &&
            $_SESSION['demoLoginId'] != '')
        ) {
            ?>
            <h2>Test Login</h2>
            <form action="login0Auth.php" method="post">
                <fieldset>
                    <legend>login</legend>
                    <label for="uid">Id:</label>
                    <input id="uid" name="user"/><br/>
                    <label for="pwd">Password:</label>
                    <input type="password"
                           id="pwd" name="password"/><br/>
                    <input type="submit" value="Login"/>
                </fieldset>
            </form>
            <?php
        } else {
            ?>
            <h2>Logout</h2>
            <p><?php echo sprintf("Active user: %s", $_SESSION['demoLoginId']);?></p>
            <form action="login0DeAuth.php" method="post">
                <fieldset>
                    <legend>logout</legend>
                    <input type="submit" value="Logout"/>
                </fieldset>
            </form>
            <?php
        }
        ?>
        <p><a href='./login0p1.php'>Restricted access/a></p>
        <p><a href='./login0p2.php'>Free access</a></p>
    </section>
</main>
<footer><?php print($copy);?></footer>
</body>
</html>