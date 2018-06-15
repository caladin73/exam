<!--countdown script in JavaScript-->
<p> Countdown <span id="countdowntimer">5 </span> Seconds</p>
<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
    },500);
</script>


<?php
/** creates a cookie named "user" with the value "John Doe" */
$cookie_name = "user";
$cookie_value = "John Doe";
/** the cookie is set to expire after 5 seconds
 * The "/" means that the cookie is available in entire website*/
setcookie($cookie_name, $cookie_value, time() + (5), "/");
/** if statement that checks if there is a cookie on the users computer
 *  if not it will print a message saying "cookie not set"
 *  else it will print name of user */
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}