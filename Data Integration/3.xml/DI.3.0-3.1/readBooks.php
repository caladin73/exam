<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link rel='stylesheet' href='css/mystyles.css'/>
</head>
<body>
<?php
        // Read the XML document into a SimpleXMLElement object
        $xml_books = simplexml_load_file("./data/booksXML2.xml"
                , "SimpleXMLElement"
                , LIBXML_NOCDATA );

?>
<h1>Books</h1>
<table>
    <tr>
        <th>Reference</th>
        <th>Mycanon</th>
        <th>Title</th>
        <th>Edition</th>
        <th>Author</th>
        <th>Publisher</th>
        <th>Year</th>
        <th>Place</th>
        <th>Pages</th>
        <th>ISBN</th>
        <th>Price</th>
        <th>Currency</th>
        <th>Comments</th>
    </tr>
    <?php
    foreach ($xml_books->book as $book) {
    printf("<tr>"
    . "<td>" . $book['ref'] . "</td>"
    . "<td>" . $book['mycanon'] . "</td>"
    . "<td>" . $book->title . "</td>"
    . "<td>" . $book->edition . "</td>"
    . "<td>" . $book->authors->author->firstname . " " . $book->authors->author->lastname . "</td>"
    . "<td>" . $book->publisher->name . "</td>"
    . "<td>" . $book->publisher->year . "</td>"
    . "<td>" . $book->publisher->place . "</td>"
    . "<td>" . $book->pages . "</td>"
    . "<td>" . $book->isbn . "</td>"
    . "<td>" . $book->price . "</td>"
    . "<td>" . $book->currency . "</td>"
    . "<td>" . $book->comments->comment . "</td>"
    . "</tr>"
    );
    }
    ?>
</table>
<a href="index.html">Home</a>
</body>
</html>