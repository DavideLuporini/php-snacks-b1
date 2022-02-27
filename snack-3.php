<!-- Creare un array con 15 numeri casuali,
 tenendo conto che l’array non dovrà contenere 
 lo stesso numero più di una volta. -->
<?php
 $numbers = [];

while (count($numbers) < 15) {
   $number = rand(1, 100);
   if (!in_array($number, $numbers)) {
      $numbers[] = $number;
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <h1>Elenco numeri</h1>
    <?php for ($i = 0 ; $i < count($numbers); $i++) { ?>
    <p><?= $numbers[$i] ?></p>
    <?php } ?>
</body>
</html>