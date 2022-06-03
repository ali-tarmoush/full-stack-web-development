<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Setter and constructor</title>
</head>

<body>
    <?php
    /**
     * Please complete the previous question before solving this one.
     * Copy your code from the previous question then continue.
     * Previous question: `Getters and Setters`
     * الرجاء حل السؤال السابق قبل حل هذا السؤال
     * ضع حلك للسؤال السابق هنا ثم اكمل حل هذا السؤال بناءاََ على ما كتبت.
     * `Getters and Setters`: السؤال السابق
     */
    class Car
    {
        // Properties
        public $name;
        public $color;
        // constructor method for the car
        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        /*
        set method for the car $name.
        function setName($name)
        {
            $this->name = $name;
        }
        set method for the car $color.
        function setColor($color)
        {
            $this->color = $color;
        }
      */
        // get method for the car $name.
        function getName()
        {
            return $this->name;
        }
        // get method for the car $color.
        function getColor()
        {
            return $this->color;
        }
    }
    $toyota = new Car("Toyota", "Black");
    $bmw = new Car("BMW", "Red");
    // $toyota->setName("Toyota");
    // $bmw->setName("BMW");
    // $toyota->setColor("Black");
    // $bmw->setColor("Red");
    echo "The car called " . $toyota->name . " and the color " . $toyota->color . "<br>";
    echo "The car called " . $bmw->getName() . " and the color " . $bmw->getColor() . "<br>";
    ?>

</body>

</html>