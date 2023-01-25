<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>

<body>
<?php
    $books = [
        "Hail Mary", 
        "Do Androids",
        "The Langoliers"
    ];
?>
    <h1>Recommended Books</h1>
    <ul>
        <?php foreach($books as $book) {
            echo "<li> $book <li>"; 
        }
    </ul>
    
</body>

</html>