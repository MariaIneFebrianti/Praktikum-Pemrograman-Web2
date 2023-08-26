<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
        echo "Perulangan FOR bilangan Genap dari 1 sampai 10 <br>"; //PERULANGAN FRO
            for ($x = 2; $x <= 10; $x += 2)
                echo "$x <br>"; // Tampilkan nilai x ke layar

        echo "<br> Perulangan WHILE bilangan Ganjil dari 1 sampai 10 <br>"; //PERULANGAN WHILE
            $y = 1; // Inisialisasi variabel $Y dengan nilai 1
            while ($y <= 10) {
                echo "$y <br>";
                $y += 2;
            }

        echo "<br> Perulangan DO WHILE bilangan Prima kurang dari 20 <br>"; //PERULANGAN DO WHILE
        $angka = 2; // Inisialisasi variabel $angka dengan nilai 2
        do {
            $boolean = true; // Inisialisasi variabel $boolean sebagai true
            $pembagi = 2; // Inisialisasi variabel $pembagi dengan nilai 2

            // Periksa apakah angka ini merupakan bilangan prima
            while ($pembagi < $angka) { 
                if ($angka % $pembagi == 0) { // Jika angka dibagi dengan pembagi tidak memiliki sisa
                    $boolean = false; // Angka tersebut bukan bilangan prima
                    break; // Hentikan perulangan, tidak perlu memeriksa lebih lanjut karena angka tersebut bukan bilangan prima
                }
                $pembagi++; // Tambahkan nilai pembagi yang sebelumnya untuk memeriksa bilangan kembali
            }
            
            // Jika angka merupakan bilangan prima
            if ($boolean) {
                echo "$angka <br>"; // Tampilkan angka yang merupakan bilangan prima ke layar
            }

            $angka++; // Tambah nilai $angka untuk memeriksa angka berikutnya
        } while ($angka < 20); // Ulangi perulangan sampai angka kurang dari 20
    ?>

</body>
</html>