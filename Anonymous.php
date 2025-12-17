<?php
// Class Anonymous dengan constructor dan property promotion
$logger = new class("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) { 
        echo "[{$this->level}] {$msg}" . PHP_EOL; 
    }
};

$logger->log("Sistem berjalan");
$logger->level = "DEBUG"; // Bisa diubah karena public
$logger->log("Data diproses");