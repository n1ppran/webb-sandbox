<?php
class Dice {
  public $numSides = 6;
  public $lastRolled = null;

  public function rollDice() {
    $this->lastRolled = rand(1, $this->numSides);
  }

  public function getLastRolled() {
    return $this->lastRolled;
  }

  public function roll() {
    $this->rollDice();
    return $this->getLastRolled();
  }
}