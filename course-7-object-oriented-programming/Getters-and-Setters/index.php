<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>

<body>
    <?php
    class Car
    {
        // Properties
        public $name;
        public $color;
        // set method for the car $name.
        function setName($name)
        {
            $this->name = $name;
        }
        // set method for the car $color.
        function setColor($color)
        {
            $this->color = $color;
        }
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
    $toyota = new Car();
    $bmw = new Car();
    $toyota->setName("Toyota");
    $bmw->setName("BMW");
    $toyota->setColor("Black");
    $bmw->setColor("Red");
    echo "The car called " . $toyota->name . " and the color " . $toyota->color . "<br>";
    echo "The car called " . $bmw->getName() . " and the color " . $bmw->getColor() . "<br>";
    ?>

</body>

</html>