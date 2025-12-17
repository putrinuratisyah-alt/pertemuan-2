<?php

class User {
    public string $name;
    public int $age; 
}

$a = new User();
$a->name = "Budi";
$a->age = 20; 

echo "Objek \$a Awal: " . $a->name . ", " . $a->age . PHP_EOL;

$b = $a; 
$b->name = "Sinta";
$b->age = 30; 

echo "Objek \$a setelah \$b diubah (Referensi): " . $a->name . ", " . $a->age . PHP_EOL; 

$c = clone $a; 
$c->name = "Tono";
$c->age = 40;


echo "Objek \$a setelah \$c diubah (Clone): " . $a->name . ", " . $a->age . PHP_EOL;
echo "Objek \$c (Salinan Independen): " . $c->name . ", " . $c->age . PHP_EOL;
