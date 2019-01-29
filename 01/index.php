<h1>Siandien sninga</h1>

<?php
echo 'labas';

echo (2+4);

echo '<h1>Siandien sninga</h1>';

echo 7 % 2;      // 7/2   3sveikus ir 1 liekana

echo '<h2>------</h2>';
$sk = 5;
echo ++$sk;
echo '<br>';
echo $sk;
echo '<br>';
$ketvirtas= 5;
//$ketvirtas= $ketvirtas+ 5;
$ketvirtas += 5;
echo $ketvirtas;

echo '<h2>------</h2>';
$pirmas = 'bla bla';
$antras = "ku $pirmas kū";
$antras = 'ku' . $pirmas . 'kŪ';
echo $antras;

$spec = "ku kū \n\n\n\n\n\n\n";  // nauja eilute
$spec = 'ku kū \n\n\n\n\n\n\n';  // nauja eilute neegzistuoja
echo $spec;
echo $antras;

echo '<h2>------</h2>';
echo '6kiaule'+7;
echo '6' +7;

echo '<h2>------</h2>';
$s = 'simbolis';
echo $s;
echo '<h2>------</h2>';
print_r($s);
echo '<h2>------</h2>';
$antras = "ŽŽŽŽŽŽ";
var_dump($antras);

echo '<h2>------</h2>';
var_dump(0 == "a"); // 0 == 0 -> true

echo '<h2>------</h2>';
$drambliai = 3;
if ($drambliai) echo 'Yra drambliu';

echo '<h2>------</h2>';
$petras = rand(10, 20);
$jonas = rand(5, 25);
if($petras > $jonas) {
    echo 'Laimejo Petras. Tasku Petras-Jonas: ' . $petras . '-' . $jonas;
}
elseif ($petras == $jonas) {
    echo 'Niekas nelaimejo. Tasku Petras-Jonas: ' . $petras . '-' . $jonas;
}
else {
    echo 'Laimejo Jonas. Tasku Petras-Jonas: ' . $petras . '-' . $jonas;
}
//echo $petras;
