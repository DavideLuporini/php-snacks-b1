


<?php
// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: 
// DD-MM-YYYY es 01-01-2007  
// come valore un array di post associati a quella data. 
// Stampare ogni data con i relativi post.



// array
$posts = [
    '10/01/2019' => [
       [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
       ],
       [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
       ],
    ],
    '10/02/2019' => [
       [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
       ]
    ],
    '15/05/2019' => [
       [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
       ],
       [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
       ],
       [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
       ]
    ],
 ];

 $date = array_keys($posts);
 var_dump(array_keys($posts));
 var_dump($posts[$date[2]][0]['text']);

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack 2</title>
 </head>
 <body>
     <ul>
         <?php for ($i = 0 ; $i < count($posts); $i++) { ?>
            <li>
                <h1><?= $posts[$date[$i]][0]['title'] ?></h1>
            </li> 
        <?php } ?>
     </ul>
 </body>
 </html>