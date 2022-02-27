<!-- Stampiamo il nostro array mettendo gli insegnanti 
in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul{
        list-style: none;
    }
    ul li {
        margin-bottom: 10px;
        padding: 10px 15px 10px 15px;
        border: black 2px solid;
        width: 140px;
        text-align: center;
        font-weight: bold;
    }

    #teachers li{
        background-color: lightgrey;
    }
    #pm li{
        background-color: lightgreen;
    }
</style>

<body>
    <h2>TEACHERS</h1>
    <ul id="teachers">
        <?php foreach ($db['teachers'] as $value) { ?>
            <li>
                <?php echo $value['name'] . ' ' . $value['lastname'] ?>
            </li>
        <?php } ?>
    </ul>
    <h2>PM</h1>
    <ul id="pm">
        <?php foreach ($db['pm'] as $value) { ?>
            <li>
                <?php echo $value['name'] . ' ' . $value['lastname'] ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>