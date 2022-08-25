<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Užduotys</title>
</head>
<body>
    <div class="container col-5 mt-3 text-center">
        <div class="card">
   <h1>Temperatūra</h1> 
<form class="mt-2" action="" method="POST">
    <input class="form-control" type="text" name="skaicius" placeholder="Įveskite skaičius tokia tvakra 1,2,3,4,5,6,7,8,9,10..."> <br>
    <button class="btn btn-danger">Tikrinti</button>
</form>
<br>
<?php 
$suma = 0;
$vidTemp = 0;
$count = 0;
$skaicius = [];
$maziausia = 0;
$didziausia = 0;
if (isset($_POST['skaicius'])){
    $skaiciai = explode(',', $_POST['skaicius']);
    sort($skaiciai);
    foreach ($skaiciai as $skaicius){
        $suma += $skaicius;
        $count++ ;
        $vidTemp = $suma / $count;
    }
    $maziausia = $skaiciai[0] . "°C ir " . $skaiciai[1] . "°C<br>";
    rsort($skaiciai);
    $didziausia = $skaiciai[0] . "°C ir " . $skaiciai[1]. "°C";

    echo "Viso nuoskaitų: <strong>$count</strong>";
    echo "Vidutine temperatūra: <strong>$vidTemp °C</strong>";
    echo "Mažiausios dvi temperatūros: <strong>$maziausia</strong>";
    echo "Didžiausios dvi temperatūros: <strong>$didziausia</strong>";  
}
?>
</div>
<br><br>
</div>
<div class="container col-8">
<h1 class="text-center">METAI</h1>
<?php 
$menesiuVardai = array (1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);

$men31 = array (1=>'Sausis', 2=>'Kovas', 3=>'Gegužė', 4=>'Liepa', 5=>'Rugpjutis', 6=>'Spalis', 7=>'Gruodis');
$men28 = array (1=>'Vasaris');
$men30 = array (1=>'Balandis', 2=>'Birželis', 3=>'Rugsėjis', 4=>'Lapkritis');


$count = 0;
foreach($men31 as  $i => $ilgas){
   $count += $i;
}
$men31=implode(", ", $men31);
echo "Metuose yra $i mėnesiai turintys 31 dieną:<strong>$men31</strong><br><hr> ";

foreach($men28 as  $i => $ilgas){
   $count += $i;
}
$men28=implode(", ", $men28);
echo "Metuose yra $i mėnesis turintys 28 dienas: <strong>$men28</strong><br><hr> ";

foreach($men30 as  $i => $ilgas){
   $count += $i;
}
$men30=implode(", ", $men30);
echo "Metuose yra $i mėnesiai turintys 30 dienų: <strong>$men30</strong><br><hr> ";

$metai = 0;
foreach($menesiuDienos as $dienos){
    $metai += $dienos;
}
echo "Viso metuose yra: <strong>$metai dienos</strong> <br><hr>";

foreach($menesiuVardai as $i => $vardai){
    echo "<strong>$vardai</strong> yra <strong>$i-as</strong> mėnuo ir jis turi <strong>$menesiuDienos[$i]</strong> dieną(-ų) <br>" ;
}
?>
</div>
</body>
</html>