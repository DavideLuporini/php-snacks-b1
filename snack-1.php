 <!-- 1)Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
2)che name sia più lungo di 3 caratteri, 
3)che mail contenga un punto e una chiocciola 
4)che age sia un numero. Se tutto 
5)è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” --> 

<?php
$elementNeededOne = '.';
$elementNeededTwo = '@';

$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$mail = $_GET['mail'] ?? '';

$name_ok = false;
$mail_ok = false;
$age_ok = false;

$success = 'Accesso riuscito';
$danger = 'Accesso negato';

// contoll on name
if(isset($_GET['name']) && strlen($name) > 3){  
    $name_ok = true;
}

// controll on mail
if(isset($_GET['mail']) && str_contains($mail , $elementNeededOne ) && str_contains( $mail , $elementNeededtwo )){   
    $mail_ok = true;
}

// controll on age
if(isset($_GET['age']) && is_numeric($age)){

    $age_ok = true;;
}

// controllo accesso
if($name_ok === true && $mail_ok === true && $age_ok === true){
    echo $success;
}else{
    echo $danger;
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>
    </h1>
   <form action="snack-1.php" method="GET">
   <input type="text" placeholder="name" name="name">
   <input type="mail" placeholder="mail" name="mail">
   <input type="text" placeholder="age" name="age">
   <button type="submit">Invia</button>
   <p><? ?></p>
   </form>
</body>
</html>