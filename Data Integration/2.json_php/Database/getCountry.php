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

echo json_encode($outp);

mysqli_close($con);
?>

</body>
</html> 