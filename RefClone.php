<?php
class User {
    public string $name;
}

$a = new User();
$a->name = "Budi";

$b = $a; // $b adalah REFERENSI ke objek yang sama dengan $a
$b->name = "Sinta";

echo "Nilai \$a setelah \$b diubah: " . $a->name . PHP_EOL; // Output: Sinta

$c = clone $a; // $c adalah SALINAN (objek baru) dari $a
$c->name = "Tono";

echo "Nilai \$a setelah \$c diubah: " . $a->name . PHP_EOL; // Output: Sinta
echo "Nilai \$c: " . $c->name . PHP_EOL; // Output: Tono