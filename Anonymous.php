<?php
// Kode Asli
$logger = new class("INFO") {
    public function __construct(public string $level) {} // <-- Properti $level
    public function log(string $msg) { echo "[{$this->level}] {$msg}" . PHP_EOL; }
};

// =========================================
// MODIFIKASI: Menambahkan properti $tag
// =========================================
$logger_modifikasi = new class("INFO", "MAIN") { 
    // Properti baru $tag ditambahkan di sini menggunakan Property Promotion
    public function __construct(public string $level, public string $tag) {} 

    public function log(string $msg) { 
        echo "[{$this->level}] [{$this->tag}] {$msg}" . PHP_EOL; 
    }
};

$logger_modifikasi->log("Sistem berjalan");
// Output: [INFO] [MAIN] Sistem berjalan