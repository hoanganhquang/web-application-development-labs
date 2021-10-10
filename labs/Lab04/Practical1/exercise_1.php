<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab04</title>
</head>
<body>  
    <?php 
        class Fruit {

            public $name;
            public $color;
            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            public function get_name() {
                echo $this->name;
            }

            public function get_color() {
                echo $this->color;
            }
        }

        $apple = new Fruit("Apple", "Red");
        $apple->get_name();
        echo "<br>";
        $apple->get_color();
    ?>
</body>
</html>