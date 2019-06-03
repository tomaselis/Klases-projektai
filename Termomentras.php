<?php

$istorijos = [
     'px' => [
             'skauda galva',
             ' nenuskambejo zadintuvas',
             'mano eile vedzioti suni'
     ],
    'bl' => [
            'suduzo telefonas',
            'rytinis kamstis',
            'nesikuria masina'
    ],
    'NX' => [
        'neveikia PHP',
        'nera kecupo',
        'nuleido padanga'
    ],
    'PZ2A' => [
        'pramiegojau iki pirmos',
        'sudauziau masina',
        'iskritau is lovos'
    ],
];

$randomise = rand(0,count($istorijos) - 1);

function listas($random_integer, $istorijos){
    $listas = [];
    for($x = 0; $x < count($istorijos); $x++){
        if($random_integer > 1 && $x == 1){
            $listas[$x]['story'] = $istorijos['px'][rand(0, count($istorijos['px']) - 1)];
            $listas[$x]['text_color'] = 'text-green';
            $listas[$x]['css_color'] = 'green';
            $listas[$x]['metertext'] = 'PX';
        }elseif($random_integer > 1 && $x == 2){
            $listas[$x]['story'] = $istorijos['bl'][rand(0, count($istorijos['bl']) - 1)];
            $listas[$x]['text_color'] = 'text-yellow';
            $listas[$x]['css_color'] = 'yellow';
            $listas[$x]['metertext'] = 'BL';
        }elseif($random_integer > 2 && $x == 3){
            $listas[$x]['story'] = $istorijos['NX'][rand(0, count($istorijos['NX']) - 1)];
            $listas[$x]['text_color'] = 'text-orange';
            $listas[$x]['css_color'] = 'orange';
            $listas[$x]['metertext'] = 'NX';
        }elseif($random_integer > 3 && $x == 4){
            $listas[$x]['story'] = $istorijos['PZ2A'][rand(0, count($istorijos['PZ2A']) - 1)];
            $listas[$x]['text_color'] = 'text-red';
            $listas[$x]['css_color'] = 'red';
            $listas[$x]['metertext'] = 'PZ2A';
        }else{
            $listas[$x]['story'] = '';
            $listas[$x]['text_color'] = '';
            $listas[$x]['css_color'] = '';
            $listas[$x]['metertext'] = '';
        }


    }
    return $listas;
}

?>




<html>
<head>
    <meta charset="UTF-8">
    <title>Klases projektai</title>
</head>
<body>

</body>
</html>