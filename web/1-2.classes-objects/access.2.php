<?php
class Toys {
    private $categories = array("puzzles","pull back","remote","soft");

    public function getToysCategories()
    {
        return $this->categories;
    }
}

$objToys = new Toys();
print "<pre>";

// will cause PHP fatal error,
print_r($objToys->categories); // invalid

//we are getting the elements of $categories array variables via getToysCategories() function defined as public.
print_r($objToys->getToysCategories());
print "</pre>";

