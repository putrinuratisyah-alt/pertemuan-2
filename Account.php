<?php
class Account {
    public string $owner;          // Dapat diakses dari mana saja
    protected float $balance;     // Hanya dapat diakses dari class ini atau subclass-nya
    private string $pin;          // Hanya dapat diakses dari dalam class ini

    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function getBalance(string $pin): float {
        if ($pin === $this->pin) return $this->balance;
        throw new Exception("PIN salah");
    }
}

// Uji akses dari luar class
$acc = new Account("Rani", 5000, "1234");
echo "Owner: " . $acc->owner . PHP_EOL;                // Boleh (public)
echo "Balance via method: " . $acc->getBalance("1234") . PHP_EOL; // Boleh (public method)

// echo $acc->balance; // ERROR: Cannot access protected property Account::$balance
// echo $acc->pin;     // ERROR: Cannot access private property Account::$pin

// Uji akses dari subclass
class PremiumAccount extends Account {
    public function debugBalance(): string {
        // $this->balance boleh diakses karena protected
        // $this->pin tidak boleh diakses karena private
        return "Balance (via subclass): " . $this->balance; 
    }
}

$pAcc = new PremiumAccount("Budi", 10000, "9999");
echo $pAcc->debugBalance() . PHP_EOL; // Boleh