-<!DOCTYPE html>
<html>
<head>
    <title>Calcul du diamètre, du périmètre et de la surface d'un cercle</title>
</head>
<body>
    <form action="index.php" method="post">
    Entrez le rayon du cercle : <input type="text" name="rayon" required>
        <input type="submit" value="Calculer">
    </form>
    <br>
    <?php
        if(isset($_POST["rayon"])) {
            $rayon = $_POST["rayon"];
            $diametre = 2 * $rayon;
            $perimetre = 2 * pi() * $rayon;
            $surface = pi() * $rayon * $rayon;
            echo "Diamètre : $diametre <br>";
            echo "Périmètre : $perimetre <br>";
            echo "Surface : $surface <br>";
        }
    ?>
</body>
</html>
