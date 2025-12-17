<?php

class Account {
    // Properti ini digunakan untuk menyimpan data yang diatur melalui __set
    private array $properties = [];

    // ===========================================
    // MAGIC METHOD 1: __set
    // Dipanggil saat mengatur nilai ke properti yang tidak terdefinisi.
    // Contoh: $account->balance = 50000;
    // ===========================================
    public function __set(string $name, mixed $value): void {
        echo "LOG: Mengatur properti '$name' dengan nilai '$value'\n";
        $this->properties[$name] = $value;
    }

    // ===========================================
    // MAGIC METHOD 2: __get
    // Dipanggil saat mengakses properti yang tidak terdefinisi.
    // Contoh: echo $account->balance;
    // ===========================================
    public function __get(string $name): mixed {
        echo "LOG: Mengakses properti '$name'\n";
        if (isset($this->properties[$name])) {
            return $this->properties[$name];
        }
        return "ERROR: Properti '$name' tidak ditemukan.\n";
    }

    // ===========================================
    // MAGIC METHOD 3: __isset
    // Dipanggil saat menjalankan isset() atau empty() pada properti yang tidak terdefinisi.
    // Contoh: isset($account->balance);
    // ===========================================
    public function __isset(string $name): bool {
        echo "LOG: Mengecek apakah properti '$name' ada...\n";
        return isset($this->properties[$name]);
    }

    // ===========================================
    // MAGIC METHOD 4: __unset
    // Dipanggil saat menjalankan unset() pada properti yang tidak terdefinisi.
    // Contoh: unset($account->balance);
    // ===========================================
    public function __unset(string $name): void {
        echo "LOG: Menghapus properti '$name'...\n";
        unset($this->properties[$name]);
    }
}
// Ini adalah perubahan dummy untuk commit baru
// ===========================================
// Pengujian
// ===========================================
$account = new Account();

echo "--- 1. Uji __set (Mengatur Properti) ---\n";
// Memanggil __set karena 'balance' tidak ada di Class Account
$account->balance = 1000000;
$account->currency = "IDR";

echo "\n--- 2. Uji __get (Mengakses Properti) ---\n";
// Memanggil __get
echo "Balance: " . $account->balance . "\n";
echo "Currency: " . $account->currency . "\n";

echo "\n--- 3. Uji __isset (Mengecek Properti) ---\n";
// Memanggil __isset
if (isset($account->balance)) {
    echo "Status Balance: Ditemukan.\n";
}
if (isset($account->name)) { // Properti yang tidak pernah diset
    echo "Status Name: Ditemukan.\n";
} else {
    echo "Status Name: Tidak ditemukan.\n";
}

echo "\n--- 4. Uji __unset (Menghapus Properti) ---\n";
// Memanggil __unset
unset($account->balance);

echo "\n--- 5. Uji Akses Setelah dihapus ---\n";
// Memanggil __get lagi, hasilnya ERROR karena sudah dihapus
echo "Balance Baru: " . $account->balance . "\n";

?>