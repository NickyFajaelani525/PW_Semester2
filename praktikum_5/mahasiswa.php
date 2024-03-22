<?php

class Mahasiswa {
    private $nama;
    private $nilai;

    public function  __construct($nama, $nilai){
        $this->nama = $nama;
        $this->nilai = $nilai;

    }


    public function getNama(){
        return $this->nama;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function hasilLulus(){
        return $this->nilai >= 169 ? 'Ideal ' : 'Tidak ideal';
    }

    public function penjelasan(){

        if ($this->nilai >= 170) {
            return 'Tinggi Badan Ideal Untuk orang Indonesia';
        } elseif ($this->nilai >= 160) {
            return 'Perlu Olahraga yang Teratur';
        } elseif ($this->nilai >= 150) {
            return 'Perlu Olahraga dan Asupan kalsium';
        } else {
            return 'Tingi Badan dari Gen Keluarga';
        }
    }


}