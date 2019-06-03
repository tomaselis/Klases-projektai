

<?php
function check($number){
    if($number % 2 == 0){
        print "Jusu ivestas skaicius lyginis";
    }
    else{
        print "Jusu ivestas skaicius nelyginis";
    }
}
$number = $_POST['number'];
print check(5);
?>



<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method='POST'>
    <h2>Please input the number :</h2>
    <input type="text" name="number">
    <input type="submit" value="Submit number">
</form>
<?php

Print "<h3> Jusu ivestas skaicius yra $number  ir jis yra </h3>";
?>
</body>
</html>