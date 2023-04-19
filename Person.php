<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "<h2>A few words about my family.</h2><br>"."My name is: ".$this->getName()." My last name is: ".$this->getLastname()."<br>".
    "My father is: ".$this->getFather()->getName()." My mother is: ".$this->getMother()->getName()."<br>".
    "My grandfathers are: ".$this->getFather()->getFather()->getName().", ".$this->getMother()->getFather()->getName()."<br>".
    "My grandmothers are: ".$this->getMother()->getMother()->getName().", ".$this->getFather()->getMother()->getName()."<br>";
  }
}
// Здоровье человека не может быть больше 100 единиц

$igor = new Person("Igor", "Smirnov", 75);//дедушка по папиной линии
$senjermen = new Person("Sen", "Jermen", 75);// дедушка по маминой линии, француз
$jeanne = new Person("Jeanee", "Shopengauer", 75);//бабушка по папиной линии
$kate = new Person("Katya", "Evteeva", 75);// бабушка по маминой линии
$ivan = new Person("Ivan", "Smirnov", 45, $jeanne, $igor); // папа
$irina = new Person("Irina", "Jermen", 42, $kate, $senjermen); //мама
$kuzya = new Person("Kuzya", "Smirnov", 12, $irina, $ivan); //сын

echo $kuzya->getInfo();

//Создать 2 дедушки и 2 бабушки
