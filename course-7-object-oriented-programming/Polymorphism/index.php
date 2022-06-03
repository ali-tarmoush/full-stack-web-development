<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Polymorphism</title>
</head>

<body>
    <?php
    abstract class Shape
    {
        abstract public function calcArea();
    }
    class Rectangle extends Shape
    {

        public $length;
        public $width;
        function __construct($length, $width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        function getLength()
        {
            return $this->length;
        }

        function getWidth()
        {
            return $this->width;
        }
        public function calcArea()
        {
            $area = $this->length * $this->width;
            return $area;
        }
    }
    class Square extends Shape
    {
        public $lengthSide = 0;
        function __construct($lengthSide)
        {
            $this->lengthSide = $lengthSide;
        }
        function getLength()
        {
            return $this->lengthSide;
        }
        public function calcArea()
        {

            return pow($this->lengthSide, 2);
        }
    }
    $lengthRectangle = 7;
    $widthRectangle = 4;
    $rectangle = new Rectangle($lengthRectangle, $widthRectangle);
    echo  "The area rectangle is: " . $rectangle->calcArea() . "<br>";
    $lengthSideSquare = 4;
    $square = new Square($lengthSideSquare);
    echo "The area square is: " . $square->calcArea() . "<br>";
    ?>
</body>

</html>