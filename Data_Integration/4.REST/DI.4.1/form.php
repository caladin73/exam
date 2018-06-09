<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Curl url page</title>
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
<h1>City input by form</h1>
<form action='curl.php' method='post'>
    <p>
        <strong>City Name:</strong><br/>
        <input type='text' name='name' required/>
    </p>
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
        <strong>District</strong><br/>
        <input type='text' name='district' required/>
    </p>
    <p>
        <strong>population:</strong><br/>
        <input type='number' name='population' required/>
    </p>
    <p>
        <input type='submit' value='Submit'/>
    </p>
</form>
</body>
</html>