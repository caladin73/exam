<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$con = mysqli_connect('localhost','root','','newworld');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"newworld");
$sql="SELECT name FROM ".$obj->table." limit ".$obj->limit."";
$result = mysqli_query($con,$sql);

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

$content = json_encode($outp);
echo $content;

file_put_contents('examplejson2f.json', $content);

mysqli_close($con);
?>

</body>
</html>