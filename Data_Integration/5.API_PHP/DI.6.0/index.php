<?php

//først henter jeg data via API og gemmer dem i 'data.json'
require_once 'save_JSON.php';

//derefter beregner jeg tilvæksten og gemmer dem i 'cal.json'
require_once 'data_cal.php';

$json = file_get_contents('cal.json');
$content = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DI.6.0</title>
</head>
<body>
<h1>Assignment DI.6.0</h1>

<p>raw JSON from API <a href="folk1c.json">"folk1c.json"</a><br>
    save_JSON.php: saves the API retrial to a json file <a href="data.json">"data.json"</a><br>
    cal.php: calculates numbers and saves them to a new json file <a href="cal.json">"cal.json"</a></p>

<table border="1">
    <tr>
        <th>Kvartal</th>
        <th>Befolkning</th>
        <th>Tilvækst</th>
        <th>Procent</th>
    </tr>

    <?php
    foreach($content as $i => $item) {
        echo "<tr>";
        echo "<td>" . $content[$i]['label'] . "</td>";
        echo "<td>" . $content[$i]['population'] . "</td>";
        echo "<td>" . $content[$i]['diff'] . "</td>";
        echo "<td>" . $content[$i]['procent'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>


</body>
</html>