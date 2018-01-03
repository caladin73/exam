<?php
class Toys {
    protected $categories = array("puzzles","pull back","remote","soft");
    protected $toys = array(array("name"=>"Mechanical Cars","category"=>"pull back"),
        array("name"=>"Jigsaw","category"=>"puzzles"),
        array("name"=>"HiTech Cars","category"=>"remote"),
        array("name"=>"Teddy Bears","category"=>"soft"),
        array("name"=>"Baby pillow","category"=>"soft"),
        array("name"=>"Chinese Checker","category"=>"puzzles"),
        array("name"=>"Electronic Toys","category"=>"remote"));
    protected function getToys() {
        for($i=0;$i<count($this->toys);$i++) {
            $toys_list[] = $this->toys[$i]["name"];
        }
        return $toys_list;
    }
    protected function getToysByCategory($category) {
        for($i=0;$i<count($this->toys);$i++) {
            if($this->toys[$i]["category"]==$category)
                $toys_list[] = $this->toys[$i]["name"];
        }
        return $toys_list;
    }
}

class SoftToys extends Toys {
    protected $category = "soft";
    function getToys() {
        return $this->getToysByCategory($this->category);
    }
}

$objToys = new Toys();
$objSoftToys = new SoftToys();
print "<pre>";
/**Invalid
print_r($objToys->categories);
print_r($objSoftToys->categories);
print_r($objToys->getToys());*/
print_r($objSoftToys->getToys());
print "</pre>";
?>