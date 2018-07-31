<?php
class Game {

  //properties
  private $name;
  protected $version;

  public function __construct($gameName) {
    $this->name = $gameName;
    echo "The game is initially named : " . $this->name . "<br>";
  }

  public function __destruct() {
    echo "Destruction of " . __CLASS__;
  }

  // __get magic method
  public function __get($property) {
    if(property_exists($this, $property)) {
      return $this->$property;
    }
  }

  // __set magic method
  public function __set($property, $value) {
    if(property_exists($this, $property)) {
      $this->$property = $value;
    }
  }

}

//inheritence of game class
class GameVersion extends Game {
  public function __construct($gameVersion, $gameName) {
    parent::__construct($gameName);
    $this->version = $gameVersion;
    echo "This is game version " . $gameVersion . " of the game " . $this->name . "<br>";
  }
}

$league = new Game("League Of Legends");
$league->__set('name', 'Dota 4');

echo "The game is named " . $league->__get('name') . "<br>";

$one = new GameVersion("1.0", "Call Of Duty");

// $league->name = "League 2";
// echo $league->name;
