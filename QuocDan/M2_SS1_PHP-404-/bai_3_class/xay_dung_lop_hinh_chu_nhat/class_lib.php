<?php
class Rectangle {
    public $width;
    public $height;
    public function __construct($width,$height) {
        $this->width = $width;
        $this->height = $height;
    }
     public function getArea(){
        return $this->width * $this->height;
    }
     public function getPerimeter(){
        return (($this->height + $this->width)*2);
    }
    public function display(){
        return $this->width . $this->height;
    }
}
$width = 10;
$height = 50;
$rectangle = new Rectangle($width,$height);



echo $rectangle->height; // 0utput: 30
echo $rectangle->width; // 0utput: 20
echo $rectangle->getPerimeter(); // 0utput: 100
echo $rectangle->getArea(); // Output: 600
echo ("Your Rectangle". $rectangle->display());