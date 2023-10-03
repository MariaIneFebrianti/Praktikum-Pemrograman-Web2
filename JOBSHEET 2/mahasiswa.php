<?php
    // membuat class
    class mahasiswa
    {
        // menuliskan property
        var $nim;
        var $nama;
        var $alamat; 
        
        // method untuk menampilkan nama
        function tampil_nama(){
            // isi method 
            return "Nama saya adalah Maria";
            
        }
        
        // method untuk menampilkan alamat
        function tampil_alamat(){
            // isi method
            return "Alamat saya di Gang Pendidikan, Sidanegara"; 
            
        }
    }

    class dosen
    {
        // menuliskan property
        var $nidn;
        var $nama;
        var $prodi; 
        
        // method untuk menampilkan nama
        function tampil_nama(){
            // isi method 
            return "Nama saya adalah Maria";
            
        }
        
        // method untuk menampilkan prodi
        function tampil_prodi(){
            // isi method
            return "Prodi saya adalah D3-Teknik Informatika"; 
            
        }
    }
        
    // membuat objek nama_mahasiswa
    $nama_mahasiswa = new mahasiswa();
    $nama_dosen = new dosen();

    // menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama()."<br>";
    echo $nama_mahasiswa->tampil_alamat()."<br><br>";
    echo $nama_dosen->tampil_nama()."<br>";
    echo $nama_dosen->tampil_prodi();

    
    
?>