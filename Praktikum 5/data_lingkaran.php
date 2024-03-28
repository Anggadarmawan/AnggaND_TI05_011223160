<?php
require_once './class_lingkaran.php';

echo "Nilai PHI : " . lingkaran :: PHI;

$lingkar1 = new Lingkaran( 10 );
$lingkar2 = new Lingkaran( 7 );

echo "<br/>Luas object Lingkaran 1 : ".$lingkar1->getLuas();
echo "<br>Luas object Lingkaran 2 : ".$lingkar2->getLuas();


echo "<br/>Keliling Lingkaran 1 : ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran 2 : ".$lingkar2->getKeliling();

?>