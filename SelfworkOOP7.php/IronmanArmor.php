<?php
require_once('Attack.php');
require_once('Defense.php');
require_once('Laser.php');
require_once('Repulsor.php');
require_once('Flight.php');
require_once('EnergyShield.php');

class IronmanArmor {
    public $attack;
    public $defense;
    public static $counter = 0;

    public function __construct(Attack $attacco, Defense $difesa) {
        $this->attack = $attacco;
        $this->defense = $difesa;
        self::$counter++;
    }
    
    public function ironmanAttack() {
        $this->attack->attack();
    }

    public function ironmanDefense() {
        $this->defense->defend();
    }

    public static function getIronmanCount() {
        return self::$counter;
    }
}
?>