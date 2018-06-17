<?php
$copy = "&copy; NML, 2013";

require_once('HTML5.inc.php');
$doc = new HTML5("Security Challenges with XSS");
print($doc->getTop());
print($doc->toLink("./demo0.css"));
print($doc->getNeck());
print($doc->toHeader());
print("<article><h2>Display It</h2>\n");
printf("<p>%s writes:<br /><blockquote>%s</blockquote>"
    , $_POST['name'], $_POST['comment']);
print("</article>".$doc->toFooter().$doc->getFoot());
?>