<?php
class Magic {
    // Dipanggil saat mencoba memanggil method yang tidak ada
    public function __call($name, $args) {
        return "Method '$name' dipanggil dengan argumen: " . implode(", ", $args);
    }

    // Dipanggil saat objek diperlakukan sebagai string
    public function __toString(): string {
        return "Ini adalah objek Magic";
    }
}

$m = new Magic();
echo $m->hello("Rani", 25) . PHP_EOL; // Memanggil hello(), yang akan memicu __call()
echo $m . PHP_EOL; // Mencetak objek, yang akan memicu __toString()