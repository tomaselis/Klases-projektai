<?php
$vardas = 'Petras Petraitis';
$amzius =12;
$statusas = 'dirba';


if($amzius > 0 && $amzius < 18) {
    print $vardas . ' Yra nepilnametis. ';
    print $vardas . ' Netinkamas kariuomenei';
}elseif($amzius >= 18 && $amzius < 65){
    print $vardas . ' Yra pilnametis ';
    if($amzius <= 26) {
        if($statusas == 'dirba' || $statusas == 'nedirba'){
            print $vardas . ' Tinkamas Tarnybai.';
        }elseif($statusas == 'studijuoja. '){
            print $vardas . ' Netinkamas kariuomenei';
        }
    }elseif($amzius >= 27){
        print $vardas . ' Netinkamas Kariuomenei. ';
    }
   // print $vardas . ' Netinkamas kariuomenei';
} elseif($amzius >= 65){
    print $vardas . ' Yra Pensininkas ir ';
    print $vardas . ' netinkamas kariuomenei';
}
elseif($amzius < 0){
    print 'Klaida. Blogai nuordytas amzius';
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