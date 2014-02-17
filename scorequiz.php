<?php

session_start();

$characters = array(
    "profile-1" => 0,
    "profile-2" => 0,
    "profile-3" => 0
    );

foreach($_POST as $key => $value) {
    foreach($characters as $charName => $charValue) {
        if($value == $charName) {
            $characters[$charName] += 1;
        }
    }
}

$maxInd = -1;
foreach($characters as $charName => $charValue) {
    if($charValue > $maxInd) {
        $maxInd = $charValue;
        $maxRes = array();
    }
    if($charValue == $maxInd) {
        $maxRes[] = $charName;
    }
}

if (count($maxRes) > 1) {
    $maxRes = $maxRes[rand(0, count($maxRes) - 1)];
} else {
    $maxRes = implode(', ', $maxRes);
}

$_SESSION['gameResult'] = $maxRes;
$_SESSION['currentPage'] = 'win';
header('location: index.php');

?>