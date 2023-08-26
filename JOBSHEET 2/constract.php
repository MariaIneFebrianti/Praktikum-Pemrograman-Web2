<?php
    // membuat class
    class mahasiswa
    {
        // menuliskan property
        var $nim;
        var $nama;
        var $alamat; 
        
        function __construct()
        {
            echo "Saya Mahasiswa Teknik Informatika <br>";
        }

        function __destruct()
        {
            echo "Politeknik Negeri Cilacap <br>";
        }

        // method untuk menampilkan nama
        function tampil_nama(){
            // isi method 
            return "Nama saya adalah Maria";
            
        }

        function tampil_mahasiswa(){
            return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
        }
        
        // method untuk menampilkan alamat
        function tampil_alamat(){
            // isi method
            return "Alamat saya di Gang Pendidikan, Sidanegara"; 
            
        }
    }
        
    // membuat objek nama_mahasiswa
    $nama_mahasiswa = new mahasiswa();

    // menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama()."<br>";
    echo $nama_mahasiswa->tampil_alamat()."<br>";
    echo $nama_mahasiswa->tampil_mahasiswa()."<br>";
    ?> 