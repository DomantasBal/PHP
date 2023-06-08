<?php
class Person
{
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

    function get_name()
    {
        if ($this->fullname !== false) return $this->fullname;
        if ($this->familyname !== false && $this->givenname !== false) {
            return $this->givenname . " " . $this->familyname;
        }
        return false;
    }
}

$domantas = new Person();
$domantas->fullname = "Domantas Bal";
$domantas->room = "19837897";

print $domantas->get_name() . "\n";
