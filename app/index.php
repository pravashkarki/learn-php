<?php
require('functions.php');
// require('router.php');



// connect to our MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=root;charset=utf8mb4";



$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo $post['titile'] . "<br>";
}



// class Person
// {
//     public $name;
//     public $age;

//     public function breath()
//     {
//         echo $this->name . ' is breathing';
//     }
// }

// $person = new Person();

// $person->name = "Pravash Karki";
// $person->age = 36;

// $person->breath();
