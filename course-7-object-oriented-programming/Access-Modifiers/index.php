<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Access Modifiers</title>
</head>

<body>
    <?php
    class Car
    {
        // TODO:: create 3 properties 
        // The property can be accessed from everywhere. This is default
        public $name;
        // The property  can be accessed within the class and by classes derived from that class
        protected $color;
        // The property can ONLY be accessed within the class
        private $engineDisplacement;
    }
    
    ?>

</body>

</html>