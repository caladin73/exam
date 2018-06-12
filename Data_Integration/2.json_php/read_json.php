<?php
$json = file_get_contents('cities.json');    // file 2 string
$content = json_decode($json);                      // string to json
?>
<!doctype html>
<html language='en'>
<head>
    <meta charset='utf-8'/>
    <title>PHP Prints Page from JSON</title>
</head>
<body>
<h1>Content From a Read JSON File</h1>

<table>
    <tr><th>Id</th><th>Name</th><th>Country code</th><th>Pop</th></tr>
    <?php
    $fs = "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n";
    foreach ($content as $city) {           // traverse json objects
        printf($fs, $city->id, $city->name, $city->countrycode, $city->population);
    }
    ?>
</table>
</body>
</html>