<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
</head>

<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a> by <?= $book['author']; ?>, Released on <?= $book['releaseYear']; ?>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>