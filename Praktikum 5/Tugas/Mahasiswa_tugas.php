<?php

class Mahasiswa_tugas {
    private $nama;
    private $tinggi;

    public function __construct($nama, $tinggi,){
        $this->nama = $nama;
        $this->tinggi = $tinggi;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function hasilTinggi(){
        return $this->tinggi >= 120 ? 'Normal' : 'Tidak Normal' ;
    }

    public function ketentuan(){
        if ($this->tinggi >= 180) {
            return 'Jangkung';
        } elseif ($this->tinggi >= 170) {
            return 'Tinggi';
        } elseif ($this->tinggi >= 160) {
            return 'Standar';
        } elseif ($this->tinggi >= 145) {
            return 'Pendek';
        } elseif ($this->tinggi >=130){
            return 'Kuntet';
        } 

    }

}