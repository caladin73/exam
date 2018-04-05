<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
var x = toCelsius(77);
var text = "The temperature is " + x + " Celsius";

function toCelsius(fahrenheit) {
    return (5/9) * (fahrenheit-32);
}

</script>

</body>
</html>