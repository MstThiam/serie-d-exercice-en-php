<!DOCTYPE html>
<html>
<head>
  <title>Creation d'un site</title>
</head>
<body>
<form action="process.php" method="post">
  <fieldset>
    <legend>Adresse client</legend>
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom"><br><br>
    <label for="address">Adresse:</label>
    <input type="text" id="address" name="address"><br><br>
    <label for="city">Ville:</label>
    <input type="text" id="city" name="city"><br><br>
    <label for="zip">Code postal:</label>
    <input type="text" id="zip" name="zip"><br><br>
    <input type="submit" value="Envoyer">
  </fieldset>
</form>
<table border="1">
  <tr>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Adresse</th>
    <th>Ville</th>
    <th>Code postal</th>
  </tr>
  <tr>
    <td><?php echo $_POST["name"]; ?></td>
    <td><?php echo $_POST["prenom"]; ?></td>
    <td><?php echo $_POST["address"]; ?></td>
    <td><?php echo $_POST["city"]; ?></td>
    <td><?php echo $_POST["zip"]; ?></td>
  </tr>
</table>
</body>
</html>