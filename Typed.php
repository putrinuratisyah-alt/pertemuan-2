<?php
class TestUninitialized {
    public string $title;
}
$p_test = new TestUninitialized();

echo "Title: " . $p_test->title; 

