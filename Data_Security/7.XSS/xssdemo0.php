<?php
session_start();
$_SESSION['user'] = 'nml';    // imagine this from a previous login

$copy = "&copy; NML, 2013";

require_once('HTML5.inc.php');
$doc = new HTML5("Security Challenges with XSS");
print($doc->getTop());
print($doc->toLink("./demo0.css"));
print($doc->getNeck());
print($doc->toHeader());
print("<article><h2>Enter Something</h2>\n");
?>
    <form action="xssdemo0a.php" method="POST">
        <p>
            Name: <input type="text" name="name" /><br />
            Comment: <textarea name="comment" rows="10" cols="60"></textarea><br />
            <input type="submit" value="Add Comment" />
        </p>
    </form>
<?php
print("</article>".$doc->toFooter().$doc->getFoot());
?>