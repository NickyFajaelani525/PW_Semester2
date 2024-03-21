<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama ($nama) 
    {
        $this->nama = $nama; 
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;

    }

    public function getInfo()
    {
        return "Nama:" . $this->nama . ", Umur:" . $this->umur ;
    }

}
//Membuat objek

$Nicky = new Manusia();
$Nicky  ->setNama("Nicky Fajaelani");
$Nicky  ->setUmur(17);
echo $Nicky ->getInfo()."<br>";

$Ayah = new Manusia();
$Ayah  ->setNama("Rizki Ayah Kurniawan");
$Ayah  ->setUmur(45);
echo $Ayah ->getInfo();