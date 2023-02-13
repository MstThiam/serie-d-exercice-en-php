-<!DOCTYPE html>
<html>
<head>
  <title>Calculateur de TVA</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="price">Prix HT :</label>
    <input type="text" id="price" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>">
    <br><br>
    <label for="vat">Taux de TVA :</label>
    <input type="text" id="vat" name="vat" value="<?php if(isset($_POST['vat'])) echo $_POST['vat']; ?>">
    <br><br>
    <input type="submit" name="submit" value="Calculer">
  </form>
  <br>
  <?php
  if(isset($_POST['submit'])) {
    $price = $_POST['price'];
    $vat = $_POST['vat'];
    $vat_amount = $price * $vat / 100;
    $total_price = $price + $vat_amount;
    ?>
    <label for="vat_amount">Montant de la TVA :</label>
    <input type="text" id="vat_amount" value="<?php echo $vat_amount; ?>" disabled>
    <br><br>
    <label for="total_price">Prix TTC :</label>
    <input type="text" id="total_price" value="<?php echo $total_price; ?>" disabled>
  <?php
  }
  ?>
</body>
</html>
