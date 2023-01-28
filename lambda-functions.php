<?php
$books = [
    [
        'name' => 'Hail Mary',
        'releaseYear' => '2015',
        'author' => 'Pravash',
        'purchaseUrl' => 'http://example.com'

    ],
    [
        'name' => 'Do Androids',
        'releaseYear' => '2018',
        'author' => 'Philip',
        'purchaseUrl' => 'http://example.com'

    ],
    [
        'name' => 'New Book Mary',
        'releaseYear' => '2018',
        'author' => 'Pravash',
        'purchaseUrl' => 'http://example.com'

    ],
];

// function filter($items, $fn)
// {
//     $filteredItems = [];

//     foreach ($items as $item) {
//         if ($fn($item)) {
//             $filteredItems[] = $item;
//         }
//     }

//     return $filteredItems;
// }

$filteredBooks = array_filter($books, function ($book) {
    // return $book['releaseYear'] <= '2015';
    return $book['releaseYear'] >= 2000 && $book['releaseYear'] <= 2020;
    //  return $book['releaseYear'] === '2015';
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
</head>

<body>

    <?php foreach ($filteredBooks as $book) : ?>
        <ul>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?>
                </a> by <?= $book['author']; ?>, Released on <?= $book['releaseYear']; ?>
            </li>
        </ul>
    <?php endforeach; ?>

</body>

</html>