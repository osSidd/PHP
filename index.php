<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP tutorial</h1>
    <?php
        //This is a single line comment
        /*This ia a multi line 
        comment spread over
        multiple lines*/
        echo "PHP is acronym for PHP Hypertext Preprocessor, created by Leadorf";
        $age = true;
        print('<br/>');
        echo var_dump([2,3,3]);
        echo "<br/> Hi there I am $age years old $GLOBALS[age]";
        echo "<br/>";
        print "This is the age of the " . $age . " variable";
        echo "<br/>";
        echo 'This is the $age variable <br/>';
        $len = strlen("Hello World");
        $words = str_word_count("Hello World");
        $word = strpos("Hello World", "World");
        echo "String length - $len and word count - $words";
        echo "String World is at position $word";
        $arr = explode(" ", "Hello World");
        print_r($arr);

    ?>
</body>
</html>