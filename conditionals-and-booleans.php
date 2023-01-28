<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Conditionals and Booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $greeting = "Hello";
    $book_name = "Dark Matter";
    $read = false;

    // echo $greeting . " " . "Pravash";
    // echo "$greeting Everyone!";

    if ($read) {
        $message = "You have read $book_name";
    } else {
        $message = "You have not read $book_name";
    }
    ?>
    <h1>
        <?php
        // echo $message;
        ?>

        <?= $message ?> // echo $message;

    </h1>
</body>

</html>