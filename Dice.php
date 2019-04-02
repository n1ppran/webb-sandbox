<?php
class Dice {
  protected $numSides;
  protected $lastRolled;
 
  public function __construct($numSides = 6) {
    if ($numSides % 2) {
      $numSides = 6;
    }
    $this->numSides = $numSides;
    $this->lastRolled = [];
  }

  public function rollDice() {
    $this->lastRolled[] = rand(1, $this->numSides);
  }

  public function getAllRolls() {
    return $this->lastRolled;
  }

  public function roll($timesToRoll = 1) {
    for ($i=0; $i < $timesToRoll; $i++) { 
      $this->rollDice();
    }
    return $this->getAllRolls();
  }
}