<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 30-12-2017
 * Time: 20:22
 */

// some links
echo '<a href="file.php">link</a>
<a href="http://example.com">link2</a>';

// a form
echo '<form action="script.php" method="post">
<input type="text" name="var2" />
</form>';

print_r(ob_list_handlers());
?>