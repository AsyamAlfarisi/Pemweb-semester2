<?php

class Manusia {
    public $nama;
    public $umur;


    public function setNama ($name)
    {
        $this->nama = $name;
    }
    
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    public function getInfo()
    {
        return "Nama: " . $this->nama . " , Umur: " . $this->umur;                               
    }

}

// Membuat Objek 
$apar = new Manusia();
$apar->setNama("Muhammad Asyam Al Farisi");
$apar->setUmur(19);
echo $apar->getInfo();

echo "<br>";

$olah = new Manusia();
$olah->setNama("Muhammad Abdul Hafizh");
$olah->setUmur(20);
echo $olah->getInfo();