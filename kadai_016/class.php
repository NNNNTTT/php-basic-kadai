<!DOCTYPE html>
<html lang="ja">

    <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
    </head>

    <body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price."<br>";
            }
        }

        class Animal{
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height."<br>";
            }
        }

        $apple = new Food("りんご", 200);
        $cat = new Animal("猫", 30 ,50);
        print_r($apple);
        echo "<br>";
        print_r($cat);
        echo "<br>";

        $apple->show_price();
        $cat->show_height();

        ?>
    </p>
    </body>

</html>