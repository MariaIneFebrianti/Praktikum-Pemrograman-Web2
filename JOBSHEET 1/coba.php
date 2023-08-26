<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    <?php
        echo "Bilangan Prima kurang dari 20: <br>";

        $number = 2; // Inisialisasi variabel $number dengan nilai 2

        do {
            $isPrime = true; // Inisialisasi variabel $isPrime sebagai true
            $divisor = 2; // Inisialisasi variabel $divisor dengan nilai 2

            // Periksa apakah angka ini bilangan prima
            while ($divisor < $number) {
                if ($number % $divisor == 0) { // Jika angka dibagi dengan divisor tanpa sisa
                    $isPrime = false; // Tandai bahwa angka bukan bilangan prima
                    break; // Hentikan perulangan, tidak perlu memeriksa lebih lanjut
                }
                $divisor++; // Naikkan nilai divisor untuk memeriksa pembagi selanjutnya
            }

            // Jika angka adalah bilangan prima, tampilkan
            if ($isPrime) {
                echo "$number <br>"; // Tampilkan angka yang merupakan bilangan prima
            }

            $number++; // Naikkan nilai $number untuk memeriksa angka berikutnya
        } while ($number < 20); // Ulangi perulangan selama angka kurang dari 20
    ?>
</body>
</html>
