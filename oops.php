<?php
class Animal{
    public $name;
    function set_name($name) {
        $this->name = $name;
    }   
    function get_name() {
        echo $this->name;
    }
}
$lion = new Animal();
$lion->set_name("Lion");

$tiger = new Animal();
$tiger->set_name("tiger");

$Elephant = new Animal();
$Elephant->set_name("Elephant");

$fox = new Animal();
$fox->set_name("fox");

$lion->get_name();
echo "<br>";

$tiger->get_name();
echo "<br>";

$Elephant->get_name();
echo "<br>";

$fox->get_name();
echo "<br>";

?>