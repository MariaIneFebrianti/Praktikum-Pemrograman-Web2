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
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["x"];
            echo "<table>";
            echo "<tr><td>Nilai x</td><td>= $x</td></tr><tr><td colspan='2'><br></td></tr>";

            if ($x > 0) {
                echo "<tr><td colspan='2'>$x adalah Bilangan Positif</td></tr>";
            } else if ($x < 0) {
                echo "<tr><td colspan='2'>$x adalah Bilangan Negatif</td></tr>";
            } else {
                echo "<tr><td colspan='2'>$x adalah Bilangan Nol</td></tr>";
            }

            echo "</table>";
        }
    ?>
</body>
</html>
