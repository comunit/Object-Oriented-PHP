<?php

class person
{
  private $_name;
  private $_job;
  private $_age;

  public function __construct($name, $job, $age)
  {
    $this->_name = $name;
    $this->_job = $job;
    $this->_age = $age;
  }

  public function changeJob($newjob)
  {
    $this->_job = $newjob;
  }

  public function happyBirthday()
  {
    ++$this->_age;
  }
}

// Create two new people
$person1 = new person("Imran", "Web Development", 27);
$person2 = new person("Imran2", "Web Development2", 27);

// Output their starting point
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// Give Tom a promotion and a birthday
$person1->changeJob("Box-Mover");
$person1->happyBirthday();
 
// John just gets a year older
$person2->happyBirthday();

// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
?>