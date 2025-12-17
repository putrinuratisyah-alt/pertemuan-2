<?php
class Builder {
    private string $text = "";

    // Mengembalikan $this untuk memungkinkan method chaining
    public function add(string $s): self {
        $this->text .= $s;
        return $this; // Mengembalikan objek saat ini
    }

    // Method baru untuk eksperimen
    public function upper(): self {
        $this->text = strtoupper($this->text);
        return $this; // Mengembalikan objek saat ini
    }

    public function get(): string {
        return $this->text;
    }
}

// Contoh Fluent Interface (Method Chaining)
$output = (new Builder())
    ->add("Halo ")
    ->add("dunia")
    ->upper()
    ->get();

echo $output . PHP_EOL; // Output: HALO DUNIA