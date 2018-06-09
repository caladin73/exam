<?php
foreach ($_POST as $key => $value)
    $$key = $value;

$file = './data/booksXML2.xml';
$xml_books = simplexml_load_file($file);     // read xml into object

$book = $xml_books->addChild('book');
$book->addAttribute('ref', $ref);
$book->addAttribute('mycanon', $mycanon);
$book->addChild('title', $title);
$book->addChild('edition', $edition);
$authors = $book->addChild('authors');
$author = $authors->addChild('author');
$author->addChild('firstname', $firstname);
$author->addChild('lastname', $lastname);
$publisher = $book->addChild('publisher');
$publisher->addChild('name', $publisher_name);
$publisher->addChild('year', $publisher_year);
$publisher->addChild('place', $publisher_place);
$book->addChild('pages', $pages);
$book->addChild('isbn', $isbn);
$book->addChild('price', $price);
$book->addChild('currency', $currency);
$comments = $book->addChild('comments');
$comments->addChild('comment', $comment);

//Format XML to save indented tree rather than one line
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml_books->asXML());
//Echo XML - remove this and following line if echo not desired
//echo $dom->saveXML();
//Save XML to file - remove this and following line if save not desired
$dom->save($file);

header('Location: validator.php');