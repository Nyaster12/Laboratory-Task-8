<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chinese Zodiac for loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Define constants for the start and end year as required
define("START_YEAR", 1912);
define("END_YEAR", 2021);

// Associative array storing zodiac signs and their corresponding image filenames
$zodiacSigns = [
    "Rat"     => "images/rat.jpg",
    "Ox"      => "images/ox.jpg",
    "Tiger"   => "images/tiger.jpg",
    "Rabbit"  => "images/rabbit.jpg",
    "Dragon"  => "images/dragon.jpg",
    "Snake"   => "images/snake.jpg",
    "Horse"   => "images/horse.jpg",
    "Goat"    => "images/goat.jpg",
    "Monkey"  => "images/monkey.jpg",
    "Rooster" => "images/rooster.jpg",
    "Dog"     => "images/dog.jpg",
    "Pig"     => "images/pig.jpg"
];
?>

<div class="table-container">
    <table class="zodiac-table">
        <!-- Main Activity Header -->
        <thead>
            <tr class="main-title-row">
                <th colspan="12">Chinese Zodiac for loop</th>
            </tr>
            <!-- Row for Sign Names -->
            <tr class="header-names-row">
                <?php
                foreach ($zodiacSigns as $sign => $imagePath) {
                    echo "<th>" . htmlspecialchars($sign) . "</th>";
                }
                ?>
            </tr>
            <!-- Row for Sign Images -->
            <tr class="header-images-row">
                <?php
                foreach ($zodiacSigns as $sign => $imagePath) {
                    echo "<th>";
                    echo "<img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($sign) . "'>";
                    echo "</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // For loop generating rows from 1912 through 2021 in intervals of 12 years
            for ($year = START_YEAR; $year <= END_YEAR; $year += 12) {
                echo "<tr>";
                for ($col = 0; $col < 12; $col++) {
                    $currentYear = $year + $col;
                    if ($currentYear <= END_YEAR) {
                        echo "<td>" . $currentYear . "</td>";
                    } else {
                        // Empty cell when the range exceeds 2021
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>