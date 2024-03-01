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
    <?php $i = 0; 
            while($i < 5):
                echo $i;
                $i++;
            endwhile;
            
     ?>
</body>
</html>