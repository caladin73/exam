<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>DI.4.0</title>
    <link rel='stylesheet' href='css/mystyles.css'/>

</head>

<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();
$q = $dbh->prepare("select countrycode from city group by countrycode");
$q->execute();

?>

<body>
<h1>Assignment DI.4.0</h1>
<p>Write a program that inserts new countrylanguage combinations into the world database sendt to it in a RESTful way ie from the terminal with curl.</p>
<p>Input countrylanguage information:</p>
<p><b>Please note that you can only insert countrylanguage information, that not already exist!<b></p>
    <form action='curl.php' method='post'>
    <p>
        <strong>Countrycode:</strong><br/>
        <select name='countrycode'/>
        <?php
        while($row = $q->fetch(PDO::FETCH_ASSOC))
            foreach($row as &$value)
            {
                echo "<option value=" . $row['countrycode'] . ">" . $row['countrycode'] . "</option>";
            }
        ?>
        </select>
    </p>
        <p>
            <strong>Language:</strong><br/>
            <input type='text' name='language' required/>
        </p>
    <p>
        <strong>isofficial</strong><br/>
        <select name='isofficial'/>
        <option value="T">True</option>
        <option value="F">False</option>
        </select>
    </p>
    <p>
        <strong>percentage 0-100%:</strong><br/>
        <input type=number min=0 max=100 name='percentage' required/>
    </p>
    <p>
        <input type='submit' value='create curl url'/>
    </p>
</form>
</body>
</html>