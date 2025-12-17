<?php
class Counter {
    public static int $count = 0;
    public const LABEL = "Jumlah objek"; 

    public function __construct() {
        self::$count++; 
    }


    public static function reset() {
        self::$count = 0;
    }
}

new Counter();
new Counter();
new Counter();


echo Counter::LABEL . ": " . Counter::$count . PHP_EOL; 

Counter::reset();
echo "Setelah reset: " . Counter::$count . PHP_EOL; 
