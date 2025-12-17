<?php
class Counter {
    public static int $count = 0; // Static property
    public const LABEL = "Jumlah objek"; // Class Constant

    public function __construct() {
        self::$count++; // Akses static property di dalam class
    }

    // Static method
    public static function reset() {
        self::$count = 0;
    }
}

new Counter();
new Counter();
new Counter();

// Akses static member dan constant tanpa membuat objek
echo Counter::LABEL . ": " . Counter::$count . PHP_EOL; // Output: Jumlah objek: 3

Counter::reset();
echo "Setelah reset: " . Counter::$count . PHP_EOL; // Output: Setelah reset: 0