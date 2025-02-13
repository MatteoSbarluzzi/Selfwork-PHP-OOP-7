<?php
require_once 'Ironman.php';
require_once 'Repulsor.php';
require_once 'MissileLauncher.php';
require_once 'Boots.php';
require_once 'Thrusters.php';


function createRandomIronman() {
    $arms = [new Repulsor(), new MissileLauncher()];
    $legs = [new Boots(), new Thrusters()];

    return new Ironman(
        $arms[array_rand($arms)],
        $arms[array_rand($arms)],
        $legs[array_rand($legs)]
    );
}


$army = [];
for ($i = 0; $i < 5; $i++) {
    $army[] = createRandomIronman();
}


foreach ($army as $ironman) {
    $ironman->move();
    $ironman->attack('sx');
    $ironman->attack('dx');
    echo "--------------------\n";
}


echo "Totale Ironman creati: " . Ironman::getIronmanCount() . "\n";
?>
