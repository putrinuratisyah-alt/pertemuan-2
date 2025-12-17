<?php
class Product {
    public string $name;
    public readonly int $id;

    public function __construct(string $name, int $id) {
        $this->name = $name;
        $this->id = $id; // Inisialisasi properti readonly (hanya boleh sekali)
    }
}

$p = new Product("Laptop", 1001);
echo "Produk: " . $p->name . "\n";
echo "ID: " . $p->id . "\n";

// Coba ubah property readonly (Opsional - untuk mengamati error)
// $p->id = 2002; // Akan menghasilkan error karena $id adalah readonly

// Coba tidak memberi nilai pada properti typed (Opsional - untuk mengamati error)
// $p2 = new Product(); // Akan menghasilkan error "uninitialized property"