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
    $movies = [
        [
            'name' => 'Back to the Future',
            'releaseYear' => 1985,
        ],

        [
            'name' => "Weekend at Bernie's",
            'releaseYear' => 1989,
        ],

        [
            'name' => 'Pirates of the Caribbean',
            'releaseYear' => 2003,
        ],

        [
            'name' => 'Interstellar',
            'releaseYear' => 2014,
        ],
    ];

    function filterByRecent($movies)
    {
        $filteredMovies = [];

        foreach ($movies as $movie) {
            if ($movie['releaseYear'] >= 2000) {
                $filteredMovies[] = $movie;
            }
        }

        return $filteredMovies;
    }

    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name']; ?>
            </li>
        <?php endforeach; ?>




    </ul>




</body>

</html>