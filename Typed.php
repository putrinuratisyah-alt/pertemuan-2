<?php

// ===============================================
// Class Product: Demonstrasi Readonly & Typed Properties
// ===============================================
class Product {
    public string $name; // Typed Property (harus bertipe string)
    public readonly int $id; // Readonly Typed Property (harus bertipe int dan tidak dapat diubah)

    // Constructor untuk inisialisasi properti, termasuk properti readonly
    public function __construct(string $name, int $id) {
        $this->name = $name;
        $this->id = $id; // Inisialisasi properti readonly
    }
}

// 1. Instansiasi objek pertama
$p = new Product("Laptop Gaming", 1001);

echo "--- 1. Akses Properti yang Terinisialisasi ---\n";
echo "Nama Produk: " . $p->name . "\n";
echo "ID Produk: " . $p->id . "\n";

// 2. Uji Sub-poin 3: Coba Ubah Properti readonly (Akan Gagal)
echo "\n--- 2. Uji Properti Readonly (Akan Tampilkan Fatal Error) ---\n";
try {
    // Baris ini akan memicu Fatal Error karena properti ID sudah diinisialisasi
    $p->id = 2002;
    echo "ID Baru: " . $p->id . "\n";
} catch (\Error $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// ===============================================
// Uji Praktikum D Sub-poin 4: Uninitialized Property
// ===============================================

// Class kedua tanpa Constructor untuk memicu error "Uninitialized Property"
class TestUninitialized {
    public string $title; // Typed Property, tetapi tidak diinisialisasi
    public ?string $optional; // Nullable Typed Property
}

echo "\n--- 3. Uji Typed Property Belum Terinisialisasi (Akan Tampilkan Fatal Error) ---\n";
$p_test = new TestUninitialized();
$p_test->optional = null; // Ini boleh karena properti bersifat nullable

// Baris di bawah ini akan memicu Fatal Error karena properti $title memiliki 
// tipe string tetapi belum diberi nilai sama sekali sebelum diakses.
try {
    echo "Title: " . $p_test->title; 
} catch (\Error $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

?>