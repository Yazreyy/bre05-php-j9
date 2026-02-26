<?php

require 'User.php';
require 'connexion.php';

$Superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];

$user1  = new User(
    $Superman['first_name'],
    $Superman['last_name'],
    $Superman['email']
);

$query = $db->prepare('SELECT * FROM users ORDER BY id ASC LIMIT 1');
$query->execute();
$userdata = $query->fetch(PDO::FETCH_ASSOC);

if ($userdata) {
    $user2 = new User(
        $userdata['first_name'],
        $userdata['last_name'],
        $userdata['email']
    );
} else {
    echo 'Aucun utilisateur trouvé';
}

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
$userList = [];

if ($allUsers) {
    foreach ($allUsers as $allUser) {
        $user3 = new User(
            $allUser['first_name'],
            $allUser['last_name'],
            $allUser['email']
        );
        $userList[] = $user3;
    }
} else {
    echo 'Aucune liste trouvées';
}
var_dump($userList);
//je ne peux pas afficher directement les données en dur, j'initie un tableau vide,  je doit passer par une boucle qui pour chaque User va me donner nom, prenom, email//
// ensuite je donne à ma liste la nouvelle instance qui retourne les valeurs à chaque tour de boucle//

$user4 = new User("Clark", "Kent", "clark.kent@test.fr");
$query = $db->prepare('INSERT into users(first_name, last_name, email) VALUES (:first_name, :last_name, :email)');

$query->execute([
    'first_name' => $user4-> getfirstName(),
    'last_name' => $user4->getlastName(),
    'email' => $user4->getEmail()
]);

$methodId = $db->lastInsertId();
$user4->setId($methodId);

$user5 = new user("Marlonn", "Gillet" , "gillet.marlonn@test.fr");
$query = $db->prepare('INSERT into users(first_name, last_name, email) VALUES (:first_name, :last_name, :email)');
$query->execute([
    'first_name' => $user5->getfirstName(),
    'last_name' => $user5->getlastName(),
    'email' => $user5->getEmail()
]);

$methodId = $db->lastInsertId();
$user5->setId($methodId);

echo "Dernier ID inséré : " . $db->lastInsertId();
var_dump($user5);
?>
