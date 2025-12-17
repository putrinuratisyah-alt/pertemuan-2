<?php

class Builder {
    private string $text = "";

    public function add(string $text): self {
        $this->text .= $text;
        return $this; 
    }
    
    public function upper(): self {
        $this->text = strtoupper($this->text);
        return $this;
    }

    public function get(): string {
        return $this->text;
    }
}
// ===============================================
// Pengujian: Menggunakan method chaining, termasuk upper()
// ===============================================

$result = (new Builder())
    ->add("halo ")  
    ->add("dunia")  
    ->upper()      
    ->get();      
echo "Hasil Uji Upper(): " . $result . PHP_EOL;