<?php
class NilaiMahasiswa {
    var $matakuliah;
    var $nillai;
    var $nim;
    function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function grade() {
            if ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
            }
            elseif ($this->nilai >= 0 && $this->nilai <= 69) {
            return "C";
            }
            elseif ($this->nilai >= 0 && $this->nilai <= 84) {
            return "B";
            }
            elseif ($this->nilai >= 0 && $this->nilai <= 100) {
            return "A";
            }
        
        
        }
    }
    function hasil() {
        if ($this->nilai <56) {
            return " TIDAK LULUS";
        } elseif ($this->nilai >= 56) {
            return "LULUS";
        }
    }
    
}