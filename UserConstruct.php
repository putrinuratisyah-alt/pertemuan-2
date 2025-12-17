<?php
class UserConstruct {
    public function __construct(
        public string $name, // Property Promotion otomatis membuat $name
        public int $age      // Property Promotion otomatis membuat $age
    ) {}
}