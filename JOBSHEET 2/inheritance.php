 <?php
    class manusia{
        private $nama_saya; //hak akses hanya bisa diakses pada class itu sendiri

         //method
        function panggil_nama($saya)
        {
            $this->nama_saya=$saya;
        }
        
        function ambil_nama(){
            return $this->nama_saya;
        }
    }

    // class turunan atau sub class dari manusia
    class mahasiswa extends manusia{
        protected $nama_mahasiswa;

         //method
        function panggil_mahasiswa($mahasiswa)
        {
            $this->nama_mahasiswa=$mahasiswa;
        }

        function ambil_mahasiswa(){
            return $this->nama_mahasiswa;
        }
    }

    //instansiasi class mahasiswa
    $informatika = new mahasiswa();

    $informatika->panggil_nama("Maria Ine");
    $informatika->panggil_mahasiswa("Febrianti");

    // tampilkan isi dari property
    echo "Nama Depan saya : ".$informatika->ambil_nama()."<br>";
    echo "Nama Belakang : ".$informatika->ambil_mahasiswa()."<br>";
 ?>
