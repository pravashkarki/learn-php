<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
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
            'relaseDate' => '2018',
            'author' => 'Philip',
            'purchaseUrl' => 'http://example.com'

        ],
        [
            'name' => 'New Book Mary',
            'relaseDate' => '2018',
            'author' => 'Pravash',
            'purchaseUrl' => 'http://example.com'

        ],
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Pravash') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a> by <?= $book['author']; ?>, Released on <?= $book['relaseDate']; ?>
            </li>
        <?php endforeach; ?>
    </ul>




</body>

</html>