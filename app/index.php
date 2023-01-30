<?php
require('functions.php');
// require('router.php');

require('Database.php');


$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);


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
