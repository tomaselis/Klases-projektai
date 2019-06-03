<?php

$array = [
    'vartotojai' => [
        'vardas' => 'Tomas',
        'pareigos' => 'saltkalvis',
        'id' => 345678,
        'korpusas' => 'B2'
    ],
        'inventorius' => [
            'PC kiekis' => 150,
            'siuskliniu_kiekiss' => 200,
            'atsakingo_asmens_vardas' => 'Petras',
            'korpusas' => 'B2'
        ],
];

$i=0;


?>




<html>
<head>
    <meta charset="UTF-8">
    <title>Klases projektai</title>
    <style>
        table {

            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        body {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            align-content: center;
        }


        .table table, th, td{
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
        }
    </style>
</head>
<body>
<table class="table">
    <tr>
        <?php foreach ($array['vartotojai'] as $headeriai => $td): ?>
            <?php $pirmasis_pavadinimas_key = $headeriai;?>
            <th><?php print $pirmasis_pavadinimas_key;?> </th>
        <?php endforeach; ?>
    </tr>
    <tr>

        <?php foreach ($array['vartotojai'] as $headeriai => $td): ?>
            <?php $pirmasis_pavadinimas_key_value = $td;?>
            <td><?php print $pirmasis_pavadinimas_key_value;?> </td>
        <?php endforeach; ?>
    </tr>
</table>

<table>
    <tr>
        <?php foreach ($array['inventorius'] as $headeriai => $td): ?>
            <?php $pirmasis_pavadinimas_key = $headeriai;?>
            <th><?php print $pirmasis_pavadinimas_key;?> </th>
        <?php endforeach; ?>
    </tr>
    <tr>

        <?php foreach ($array['inventorius'] as $headeriai => $td): ?>
            <?php $antrasis_pavadinimas_key_value = $td;?>
            <td><?php print $antrasis_pavadinimas_key_value;?> </td>
        <?php endforeach; ?>
    </tr>
</table>
</body>
</html>
