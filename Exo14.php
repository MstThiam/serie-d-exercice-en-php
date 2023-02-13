<!DOCTYPE html>
<html>
<head>
  <title>Creation d'un site</title>
</head>
<body>
<form action="process.php" method="post">
  <input type="submit" name="action" value="Vendre">
  <input type="submit" name="action" value="Acheter">
  <input type="submit" name="action" value="Louer">
</form>
<?php
if (isset($_POST['action'])) {
  switch ($_POST['action']) {
    case 'Vendre':
      header("Location: vendre.php");
      break;
    case 'Acheter':
      header("Location: acheter.php");
      break;
    case 'Louer':
      header("Location: louer.php");
      break;
    default:
      echo "Aucune action valide n'a été sélectionnée.";
      break;
  }
}
?>
</body>
</html>