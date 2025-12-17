<?php
class User {
    public string $name;
    
    public function sayHello(): string {
        return "Halo, saya {$this->name}";
    }
    
}
