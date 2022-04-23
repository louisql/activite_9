<?php

$num=[1,2,3,4,5,6,7,8,9,10,11,12,13];
$suites=["Carreau", "Trèfles", "Coeur", "Pique"];

for ($i = 0; $i < count($suites); $i++){
    for ($j=0; $j < count($num); $j++){
        $deck[] = ($num[$j])."-".($suites[$i]);
    }
}

$secondHalf=0;



for ($i=0; $i <=25; $i++ ){
    $subDeck1[]=$deck[$i];
    $secondHalf++;
}


for ($i=$secondHalf; $i < count($deck); $i++ ){
    $subDeck2[]=$deck[$i];
}



$shuffleDeck = [];
for ($i =0; $i<=25; $i++){
    $shuffleDeck[] = $subDeck1[$i];
    $shuffleDeck[] = $subDeck2[$i];
}


for ($i =0; $i <=51; $i++){
    echo $shuffleDeck[$i]. "-";
    if (($i % 13) == 12 && ($i!=1)){
        echo "<br>";
    }
    
}


?>