<?php

require_once 'Game.php';

$icons = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

$winCombinations = [
    0 => [2, 3],
    1 => [0, 4],
    2 => [1, 3],
    3 => [1, 4],
    4 => [0, 2]
];

$usersChoice = (string)$_POST['choice'] ?? "rock";
$pcChoice = (string)$icons[array_rand($icons)];

$game = new Game(
    array_search($usersChoice, $icons),
    array_search($pcChoice, $icons)
);

$result = $game->play($winCombinations);

?>

<html lang="en">
<head>
    <title>RPS++</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<h1 style="text-align: center;"><?= $result; ?></h1>
<div class="icons">
    <img src="/icons/<?= $usersChoice; ?>-icon.jpg" alt="user's choice"/>
    <h2 style="text-align: center; padding: 15px;">You vs PC</h2>
    <img src="/icons/<?= $pcChoice; ?>-icon.jpg" alt="PC's choice"/>
</div>
<form action="/" method="post">
    <div class="icons">
        <button type="submit" name="choice" value="rock">
            <img src="/icons/rock-icon.jpg" alt="submit"/>
        </button>
        <button type="submit" name="choice" value="paper">
            <img src="/icons/paper-icon.jpg" alt="submit"/>
        </button>
        <button type="submit" name="choice" value="scissors">
            <img src="/icons/scissors-icon.jpg" alt="submit"/>
        </button>
        <button type="submit" name="choice" value="lizard">
            <img src="/icons/lizard-icon.jpg" alt="submit"/>
        </button>
        <button type="submit" name="choice" value="spock">
            <img src="/icons/spock-icon.jpg" alt="submit"/>
        </button>
    </div>
</form>
</body>
</html>

