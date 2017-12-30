<?php
    $title = "Input Golfball Data";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <link rel="stylesheet" href="./css/ifdemo.css"/>
    </head>
    <body>
        <?php
            printf("<header><h1>%s</h1></header>\n", $title);            // put your code here
        ?>
        <form action="golfballsdb.php" 
              method="post" 
              id='deform'
              enctype="multipart/form-data">
            <fieldset>
                <legend>Golfballs</legend>
            <p>
                <input type="hidden" name="MAX_FILE_SIZE" value="131072"/>
                <label for='bild'>Image:</label><br/>
                <input type='file' id='bild' name='img'/>
            </p>
            <p>
               <input type='submit' name='butt' value='Go!'/>
            </p>
            </fieldset>
        </form>
    </body>
</html>