
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
$q = ($_GET['q']);

$con = mysqli_connect('localhost','root','','newworld');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"newworld");
$sql="SELECT * FROM country WHERE name = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Country</th>
<th>Continent</th>
<th>Population</th>
<th>Capital</th>
<th>gnp</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['continent'] . "</td>";
    echo "<td>" . $row['population'] . "</td>";
    echo "<td>" . $row['capital'] . "</td>";
    echo "<td>" . $row['gnp'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html> 