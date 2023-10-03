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
                echo "$x <br>"; 

        echo "<br> Perulangan WHILE bilangan Ganjil dari 1 sampai 10 <br>"; //PERULANGAN WHILE
            $y = 1;
            while ($y <= 10) {
                echo "$y <br>";
                $y += 2;
            }

        echo "<br> Perulangan DO WHILE bilangan Prima kurang dari 20 <br>"; //PERULANGAN DO WHILE
        $i = 2; // a adalah nilai pembagi
        
        do {
            $prima=true;
            for ($a=2; $a<$i; $a++){
                if(($i%$a)==0){
                    $prima=false;
                    break;
                }
            }
            if ($prima){
                echo "$i"."<br>";
            }
            
            $i++;
        } while ($i < 20); // Ulangi perulangan sampai angka kurang dari 20
    ?>

</body>
</html>