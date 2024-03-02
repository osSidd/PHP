<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Local library</h1>
        <p>crud using php</p>
    </header>
    <main>
        <h2>Add a book</h2>
        <form action="">
            <label for="">Title:</label>
            <input type="text">
            <label for="">Author:</label>
            <input type="text">
            <label for="">ISBN:</label>
            <input type="text">
            <label for="">Genre:</label>
            <input type="text">
            <label for="">Summary:</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button>Add book</button>
        </form>
    </main>
    <footer>copyright &copy; <?php echo date('Y') ?></footer>
    <?php 

        class Fruit{
            public $color = 'red';
            protected $name = 'green';
            private $weight = 234;

            function __construct($color){
                $this->color = $color;
            }

            function get_color(){
                return $this->color;
            }

            // function set_color($col){
            //     $this->color = $col;
            // }

            function __destruct(){
                echo "<br/> Color of fruit is $this->color and the script ends";
            }
        }

        $apple = new Fruit('Orange');
        // echo $apple->set_color('green');
        echo $apple->get_color();
        echo '<br/>';
        echo var_dump($apple instanceof Fruit);

        echo "$apple->color";
        // echo "$apple->weight";
        echo "$apple->name";
     ?>
</body>
</html>