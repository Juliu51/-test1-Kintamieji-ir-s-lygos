<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kintamieji ir salygos</title>
</head>
<body>
    <h1>Kintamieji ir salygos</h1>

    <?php
////////           1 UZDUOTIS ////////////////
echo "PIRMA UZDUOTIS";
echo '<br>';
echo '<br>';

$vardas = "Julius";
$pavarde = "Vaicekauskas";
$metai = 1995;
$thisyears = 2021;

echo 'As esu ' . $vardas . $pavarde . '.' . 'Man yra ' .  $thisyears - $metai . ' metai.'; 
echo '<br>';
echo '<br>';
/////////////      2 UZDUOTIS //////////////////
echo "ANTRA UZDUOTIS";
echo '<br>';
echo '<br>';

$pirmas = rand(0,4);
$antras = rand(0,4);

if ($pirmas === 0 || $antras === 0) {
   echo 0;
} else if ($pirmas > $antras) {
    echo number_format((float)round($pirmas / $antras, 2, PHP_ROUND_HALF_DOWN),2,'.',','); 
} else {
    echo number_format((float)round($antras / $pirmas, 2, PHP_ROUND_HALF_DOWN),2,'.',',');
}
echo '<br>';
echo '<br>';
//////////////////// 3 UZDUOTIS ////////////////////
echo "TRECIA UZDUOTIS";
echo '<br>';
echo '<br>';
                                                                /////////PERDARYTI BE MASSYVO
$vienas = rand(0,25);
$du = rand(0,25);
$trys = rand(0,25);


$skaiciai = array($vienas, $du, $trys);
sort($skaiciai);
echo 'vidurine reiksme: ' . $skaiciai[1];

echo '<br>';
echo '<br>';
///////////////////// 4 UZDUOTIS /////////////////////
echo "KETVRITA UZDUOTIS";
echo '<br>';
echo '<br>';

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Trikampi galima sudaryti, krastines : $a  $b  $c";
} else {
    echo "Trikampio negalima sudaryti, krastines : $a  $b  $c";
}

echo '<br>';
echo '<br>';
///////////////////// 5 UZDUOTIS /////////////////////
echo "PENKTA UZDUOTIS";
echo '<br>';
echo '<br>';
                                                        //////////////////////NOT DONE
$a1 = rand(0,2);
$a2 = rand(0,2);
$a3 = rand(0,2);
$a4 = rand(0,2);




echo '<br>';
echo '<br>';
///////////////////// 6 UZDUOTIS /////////////////////
echo "SESTA UZDUOTIS";
echo '<br>';
echo '<br>';

$pastraipa = rand(1,6);

echo "<h{$pastraipa}>$pastraipa</h{$pastraipa}>";

echo '<br>';
echo '<br>';

///////////////////// 7 UZDUOTIS /////////////////////
echo "SEPTINA UZDUOTIS";
echo '<br>';
echo '<br>';

$m = rand(-10,10);
$n = rand(-10,10);
$z = rand(-10,10);

if($m === 0 ) {
    echo "<span style='color:red'>{$m} </span>";
} else if($m > 0) {
    echo "<span style='color:blue'>{$m} </span>";
} else {
        echo "<span style='color:green'>{$m} </span>";
}
if($n === 0 ) {
    echo "<span style='color:red'>{$n} </span>";
} else if($n > 0) {
    echo "<span style='color:blue'>{$n} </span>";
} else {
        echo "<span style='color:green'>{$n} </span>";
}
if($z === 0 ) {
    echo "<span style='color:red'>{$z} </span>";
} else if($z > 0) {
    echo "<span style='color:blue'>{$z} </span>";
} else {
        echo "<span style='color:green'>{$z} </span>";
}
echo '<br>';
echo '<br>';
///////////////////// 8 UZDUOTIS /////////////////////
echo "ASTUNTA UZDUOTIS";
echo '<br>';
echo '<br>';

$zvakes = rand(5,3000);


if($zvakes < 1000){
    echo 'Zvakiu kiekis: ' . $zvakes . ' Zvakiu kaina: ' . $zvakes;
} else if( $zvakes > 2000) {
    echo  'Zvakiu kiekis: ' . $zvakes . ' Zvakiu kaina: ' . $zvakes - ($zvakes * (3 / 100));
} else  {
    echo  'Zvakiu kiekis: ' . $zvakes . ' Zvakiu kaina: ' . $zvakes -($zvakes * (4 / 100));
}

echo '<br>';
echo '<br>';
///////////////////// 9 UZDUOTIS /////////////////////
echo "DEVINTA UZDUOTIS";
echo '<br>';
echo '<br>';

$p = rand(0, 100);
$r  = rand(0, 100);
$o = rand(0, 100);
$vidurk = 3;
$vidurkz = 3;
$sk = 3;
$x = 0;
$c = 0;
$v = 0;
$skz = 3;

$x = $p;
if ($p < 10) {
       $p = 0;
    $sk = $vidurk - 1;
}
$c = $r;
if($r < 10) {
        $r = 0;
    $sk = $vidurk - 1;
}
$v = $o;
if($o < 10){
    $o = 0;
    $sk = $vidurk - 1;
}
echo "mazenes uz 10: " . round(($p + $r + $o) / $sk);
echo '<br>';

if ($x < 90) {
       $x = 0;
    $skz = $vidurkz - 1;
}

if($c < 90) {
        $c = 0;
    $skz = $vidurkz - 1;
}

if($v > 90){
    $v = 0;
    $skz = $vidurkz - 1;
}
echo "didesnes uz 90: " . round(($x + $c + $v) / $skz);
echo '<br>';
echo '<br>';
///////////////////// 10 UZDUOTIS /////////////////////
echo "DESIMTA UZDUOTIS";
echo '<br>';
echo '<br>';
$minutes = rand(0,300);


$date = "2021-08-14 17:40:00";
echo $date;
echo '<br>';
echo '<br>';
$date = strtotime($date);
$date = strtotime("+{$minutes} minute", $date);
echo date('Y-m-d H:i:s', $date);
echo '<br>';
echo '<br>';
///////////////////// 11 UZDUOTIS /////////////////////
echo "PAPILDOMA UZDUOTIS";
echo '<br>';
echo '<br>';

$P1 = rand(1000,9999);
$P2 = rand(1000,9999);
$P3 = rand(1000,9999);
$P4 = rand(1000,9999);
$P5 = rand(1000,9999);

$eile = array($P1 , $P2 , $P3 , $P4 , $P5 );
sort($eile);
echo "".implode(" ",$eile)."<br>";

?>
</body>
</html>


