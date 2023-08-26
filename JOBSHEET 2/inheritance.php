 <?php
    class manusia{
        public $nama_saya;

        function panggil_nama($saya)
        {
            $this->nama_saya=$saya;
        }
    }

    // class turunan atau sub class dari manusia
    class mahasiswa extends manusia
    {
        public $nama_mahasiswa;

        function panggil_mahasiswa($mahasiswa)
        {
            $this->nama_mahasiswa=$mahasiswa;
        }
    }

    //instansiasi class mahasiswa
    $informatika = new mahasiswa();

    $informatika->panggil_nama("Maria Ine");
    $informatika->panggil_mahasiswa("Febrianti");

    // tampilkan isi dari property
    echo "Nama Depan saya : ".$informatika->nama_saya."<br>";
    echo "Nama Belakang : ".$informatika->nama_mahasiswa."<br>";
 ?>
 
<!-- TUGAS MEMPRAKTIKKAN ENKAPSULASI PROTECTED DAN PRIVATE KE DALAM KELAS PEWARISAN
DI SUMULASIKAN -->