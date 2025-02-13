<?php
require_once('IronmanArmor.php');

$army = [];
for ($i = 0; $i < 5; $i++) {
    $attackType = [new Laser(), new Repulsor()][array_rand([new Laser(), new Repulsor()])];
    $defenseType = [new Flight(), new EnergyShield()][array_rand([new Flight(), new EnergyShield()])];
    $army[] = new IronmanArmor($attackType, $defenseType);
}

foreach ($army as $ironman) {
    $ironman->ironmanAttack();
    $ironman->ironmanDefense();
    echo "--------------------\n";
}

echo "Totale Ironman creati: " . IronmanArmor::getIronmanCount() . "\n";
?>