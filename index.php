<?php

class Imran {
  public $fullname = "Imran Rafique";

  public static $count = 0;

  public function __construct()
  {
    echo 'Class "',__CLASS__,'" was initiated!<br />';
  }

  public function __destruct()
  {
    echo 'Class "',__CLASS__,'" was destroyed!<br />';
  }

  public function __toString()
  {
    echo "Using the toString method: ";
    return $this->getProperty();
  }

  public function newName($newName)
  {
    $this->fullname = $newName;
  }

  private function getProperty()
  {
    return $this->fullname. "<br />";
  }

  public static function plusOne()
  {
    return "the count is " . ++self::$count . ".<br />";
  }
}

// Other class
Class otherClass extends Imran {

  public function __construct()
  {
    parent::__construct();
    echo "A new constructor in " .__CLASS__. ".<br />";
  }

  public function newMethod()
  {
    echo "From a new method in " .__CLASS__. ".<br />";
  }

  public function callProtected()
  {
    return $this->getProperty();
  }
}

do {
  echo Imran::plusOne();
} while ( Imran::$count <10);
?>