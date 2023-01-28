<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Hail Mary',
            'relaseDate' => '2015',
            'author' => 'Pravash',
            'purchaseUrl' => 'http://example.com'

        ],
        [
            'name' => 'Do Androids',
            'relaseDate' => '2006',
            'author' => 'Philip',
            'purchaseUrl' => 'http://example.com'

        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a> by <?= $book['author']; ?>, Released on <?= $book['relaseDate']; ?>
            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>