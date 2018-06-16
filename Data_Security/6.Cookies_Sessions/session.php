/** Start the session*/
session_start();

/** Set session variables*/
$_SESSION["userID"] = "Peter";
$_SESSION["password"] = "1234";
echo "<br>PHP Session is established and session variables are set successfully!". "<br><br>";

/** Echo PHP session variables that were set before on previous page*/
echo "User ID is: " ."<B>" . $_SESSION["userID"] .  "</B><br>";
echo "Password is: " ."<B>". $_SESSION["password"]. "</B>";