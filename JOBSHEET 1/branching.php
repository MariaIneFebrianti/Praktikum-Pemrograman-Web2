<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Masukkan nilai x:</td>
                <td><input type="number" name="x"></td>
            </tr>
            <tr>
                <td> </td>
                <td colspan="2"><input type="submit" value="Cek"></td>
            </tr>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //mengecek permintaan yang diterima dengan metode POST
            $x = $_POST["x"]; //variabel x adalah nilai yang dikirim melalui form dengan nama x
            echo "Nilai x = $x <br>";

            if ($x > 0) {
                echo "$x adalah Bilangan Positif";
            }else if ($x < 0) {
                echo "$x adalah Bilangan Negatif";
            }else {
                echo "$x adalah Bilangan Nol";
            }
        }
    ?>
</body>
</html>