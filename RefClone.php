<?php
// Modifikasi Class User
class User {
    public string $name;
    public int $age; 
}

// 1. Inisialisasi Objek $a
$a = new User();
$a->name = "Budi";
$a->age = 20; // Nilai awal

echo "Objek \$a Awal: " . $a->name . ", " . $a->age . PHP_EOL;

// 2. Uji REFERENSI ($b = $a)
$b = $a; // $b menunjuk ke objek yang sama dengan $a
$b->name = "Sinta";
$b->age = 30; // Mengubah $b akan mengubah $a

echo "Objek \$a setelah \$b diubah (Referensi): " . $a->name . ", " . $a->age . PHP_EOL; 
// Output: Sinta, 30 (Kedua nilai $a berubah karena mereka adalah objek yang sama)

// 3. Uji CLONE ($c = clone $a)
$c = clone $a; // $c adalah objek baru, salinan dari $a saat ini (Sinta, 30)
$c->name = "Tono";
$c->age = 40; // Mengubah $c tidak akan mengubah $a

echo "Objek \$a setelah \$c diubah (Clone): " . $a->name . ", " . $a->age . PHP_EOL;
// Output: Sinta, 30 (Nilai $a tetap tidak berubah)

echo "Objek \$c (Salinan Independen): " . $c->name . ", " . $c->age . PHP_EOL;
// Output: Tono, 40 (Objek $c memiliki nilai independen)