<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Book input</title>


</head>

<body>
<h1>Book input form</h1>
<form action='insertBook.php' method='post'>
    <p>
        <strong>Reference:</strong><br/>
        <input type='text' name='ref'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Mycanon:</strong><br/>
        <input type='text' name='mycanon'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Book title:</strong><br/>
        <input type='text' name='title'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Edition:</strong><br/>
        <input type='number' name='edition' required/><font color="red">&nbsp Required</font>
    </p>
    <p>
        <strong>Author Firstname:</strong><br/>
        <input type='text' name='firstname'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Author Lastname:</strong><br/>
        <input type='text' name='lastname'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Publisher Name:</strong><br/>
        <input type='text' name='publisher_name' /><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Publisher Year:</strong><br/>
        <input type='text' name='publisher_year' required/><font color="red">&nbsp Required</font>
    </p>
    <p>
        <strong>Publisher Place:</strong><br/>
        <input type='text' name='publisher_place'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Pages:</strong><br/>
        <input type='number' name='pages' required/><font color="red">&nbsp Required</font>
    </p>
    <p>
        <strong>ISBN:</strong><br/>
        <input type='text' name='isbn'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Price:</strong><br/>
        <input type='number' name='price' required/><font color="red">&nbsp decimal Required</font>
    </p>
    <p>
        <strong>Currency:</strong><br/>
        <select name="currency">
            <option value="GBP">GBP</option>
            <option value="DKR">DKR</option>
            <option value="US$">US ($)</option>
            <option value="EU&euro">Euro (€)</option>
        </select><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <strong>Comment:</strong><br/>
        <input type='text' name='comment'/><font color="green">&nbsp Not Required</font>
    </p>
    <p>
        <input type='submit' value='Submit'/>
    </p>
</form>
</body>
</html>