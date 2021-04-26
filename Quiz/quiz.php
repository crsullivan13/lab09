<?php
$plusA = $_POST["2plusQ"];
$tigerA = $_POST["tigerQ"];
$engA = $_POST["engQ"];
$kuA = $_POST["kuQ"];
$swallowA = $_POST["swallowQ"];

$plus = 2;
$tiger = "Big cat";
$eng = "A master of the world";
$ku = "Better than Mizzou";
$swallow = "Is it an African or European swallow?";

$arrayA = [
    0 => $plusA,
    1 => $tigerA,
    2 => $engA,
    3 => $kuA,
    4 => $swallowA
];

$arrayCA = [
    0 => $plus,
    1 => $tiger,
    2 => $eng,
    3 => $ku,
    4 => $swallow
];

$arrayQ = [
    0 => "What is 2 + 2?",
    1 => "What is a tiger?",
    2 => "What is a software engineer?",
    3 => "What is KU?",
    4 => "What the airspeed velocity of an unladen swallow?"
];

$correctCount = 0;

for($i = 0; $i < 5; $i++) {
    $temp = $i + 1;

    if($arrayA[$i] == $arrayCA[$i]) {
        $correctCount ++;
    }

    echo 'Question '.$temp.': '.$arrayQ[$i].'<br>';
    echo '<blockquote>';
    echo 'You answered: '.$arrayA[$i].'<br>';
    echo 'Correct answer: '.$arrayCA[$i].'<br>';
    echo '</blockquote>';
    echo '<br>';
}

echo 'You got : '.$correctCount.' correct <br>';

$percentCorrect = ($correctCount / 5) * 100;

echo 'That is a '.$percentCorrect.'%';




?>