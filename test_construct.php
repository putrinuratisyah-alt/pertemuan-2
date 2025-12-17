<?php
require "UserConstruct.php";
$u = new UserConstruct("Budi", 22);
echo $u->name . " " . $u->age;

// Coba ubah nilai parameter (Opsional - untuk mengamati error)
// $u2 = new UserConstruct("Rani", "dua puluh"); // Akan menghasilkan error tipe data