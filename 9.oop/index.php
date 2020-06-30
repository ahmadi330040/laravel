<?php

require_once ('animal.php');
require_once ('frog.php');
require_once ('ape.php');

$sheep = new animal("shaun");
$sheep->set_name('shaun the sheep');
print $sheep->get_name();
echo "<br>";
print $sheep->get_legs();
echo "<br>";
print $sheep->get_cold();

echo "<h3> Kelas Animal inheritance kelas kodok </h3>";

$kodok = new frog("buduk");
print $kodok->get_name();
echo "<br>";
print $kodok->jump();
echo "<br>";
print $kodok->get_legs();

echo "<h3>Kelas Animal inheritance kelas ape</h3>";

$kodok = new ape("kera-sakti");
print $kodok->get_name();
echo "<br>";
print $kodok->yell();
echo "<br>";
print $kodok->get_legs();

?>