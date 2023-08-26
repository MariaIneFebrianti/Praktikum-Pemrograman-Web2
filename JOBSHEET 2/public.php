<?php
    // membuat class mahasiswa
    class mahasiswa
    {
        // property public
        public $nama;
        private $nim="220102013"; 

        // public method
        public function tampilkan_nama()
        {
            // nilai kembalian
            return "Nama saya Maria";
        }

        // membuat protectod method
        function tampilkan_nim()
        {
            return "NIM saya ".$this->nim;
        }
    }
    // instansiasi objek mahasiswa ke dalam variabel $mahasiswa
    $mahasiswa = new mahasiswa();
    $nim = new mahasiswa();

    // memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama()."<br>";
    echo $nim->tampilkan_nim();
    
?>