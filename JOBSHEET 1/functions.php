<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    // function persegi($s){
    //     return $s*$s;
    // }
    
    // function persegi_panjang($p, $l){
    //     return $p*$l;
    // }

    // function lingkaran($r){
    //     return 3.14*$r*$r;
    // }
    // echo "FUNCTION SECARA STATIS <br><br>";
    // echo "Luas persegi = ".persegi(5)."<br>";
    // echo "Luas persegi panjang = ".persegi_panjang(5, 2)."<br>";
    // echo "Luas lingkaran = ".lingkaran(7)."<br>";
    ?>
    
    <?php
        function persegi($s){
            return $s*$s;
        }
        
        function persegi_panjang($p, $l){
            return $p*$l;
        }
    
        function lingkaran($r){
            return 3.14*$r*$r;
        }
    ?>
        <!-- <form method="post" action="">
            <table>
                <tr>
                    <td>Masukkan Sisi = </td>
                    <td><input type="number" name="s"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td colspan="2"><input type="submit" value="Hitung Luas"></td>
                </tr>
            </table>
        </form> -->
    <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $s = $_POST["s"];
        //     echo "Luas Persegi &nbsp; &nbsp; = ".persegi($s);
        // }
    ?>
    <!-- <br><br> -->
        <form method="post" action="">
            <table>
                <tr>
                    <td>Masukkan Panjang = </td>
                    <td><input type="number" name="p"></td>
                </tr>
                <tr>
                    <td>Masukkan Lebar = </td>
                   <td><input type="number" name="l"></td> 
                </tr>
                <tr>
                    <td> </td>
                    <td colspan="2"><input type="submit" value="Hitung Luas"></td>
                </tr>
            </table>
        </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p = $_POST["p"];
            $l = $_POST["l"];
            echo "Luas Persegi Panjang = ".persegi_panjang($p, $l);
        }
    ?>

</body>
</html>