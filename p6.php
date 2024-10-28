<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Selection Statements</center></h1>
        <div class="box">
            <?php
            // Initialize five string variables
            $strings = ["Banana", "Apple", "Orange", "Grape", "Cherry"];
            
            // Initialize five integer variables
            $numbers = [5, 15, 10, 20, 25];

            // Function to sort strings in ascending order
            function sortStringsAscending($arr) {
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    for ($j = $i + 1; $j < count($arr); $j++) {
                        if ($arr[$i] > $arr[$j]) {
                            // Swap the strings
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                return $arr;
            }

            // Function to sort strings in descending order
            function sortStringsDescending($arr) {
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    for ($j = $i + 1; $j < count($arr); $j++) {
                        if ($arr[$i] < $arr[$j]) {
                            // Swap the strings
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                return $arr;
            }

            // Function to sort numbers in ascending order
            function sortNumbersAscending($arr) {
                for ($i = 0; $i < count($arr) - 1; $i++) {
                    for ($j = $i + 1; $j < count($arr); $j++) {
                        if ($arr[$i] > $arr[$j]) {
                            // Swap the numbers
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                return $arr;
            }

            // Display strings in ascending order
            $sortedStringsAsc = sortStringsAscending($strings);
            echo "<h2>Strings in Ascending Order:</h2>";
            echo "<ul>";
            foreach ($sortedStringsAsc as $string) {
                echo "<li>$string</li>";
            }
            echo "</ul>";

            // Display strings in descending order
            $sortedStringsDesc = sortStringsDescending($strings);
            echo "<h2>Strings in Descending Order:</h2>";
            echo "<ul>";
            foreach ($sortedStringsDesc as $string) {
                echo "<li>$string</li>";
            }
            echo "</ul>";

            // Check divisibility and perform calculations
            $firstNumber = $numbers[0];
            $fifthNumber = $numbers[4];

            if ($firstNumber % $fifthNumber == 0) {
                // Calculate sum, product, and average
                $sum = array_sum($numbers);
                $product = array_product($numbers);
                $average = $sum / count($numbers);

                echo "<h2>Calculations:</h2>";
                echo "<p><strong>Sum:</strong> $sum</p>";
                echo "<p><strong>Product:</strong> $product</p>";
                echo "<p><strong>Average:</strong> $average</p>";
            } else {
                // Display numbers in ascending order
                $sortedNumbersAsc = sortNumbersAscending($numbers);
                echo "<h2>Numbers in Ascending Order:</h2>";
                echo "<ul>";
                foreach ($sortedNumbersAsc as $number) {
                    echo "<li>$number</li>";
                }
                echo "</ul>";
            }
            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
        <center>Leo Dimol<br>October 12, 2024</center>
    </div>

</body>
</html>
