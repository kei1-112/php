<?php
function calcTriangle($teihen, $takasa){
    $triangleS = ($teihen * $takasa) / 2;
    return $triangleS;
}
function calcSquare($width, $height){
    $squareS = $width * $height;
    return $squareS;
}
function calcDaikei($johen, $kahen, $takasa){
    $daikeiS = ($johen + $kahen) * $takasa / 2;
    return $daikeiS;
}
$triangleS = calcTriangle(3, 6);
$squareS = calcSquare(5,2);
$daikeiS = calcDaikei(2, 6, 7);
echo $triangleS . '<br>' . $squareS . '<br>' . $daikeiS;