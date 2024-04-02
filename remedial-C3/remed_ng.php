<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
function sum_of_numbers($arr) {
    // Initialize total sum to 0
    $total = 0;

    // Iterate through each element in the array
    foreach ($arr as $num) {
        // Check if the element is a number
        if (is_numeric($num)) {
            // Add the number to the total sum
            $total += $num;
        }
    }

    // Output the result
    echo "Input: [" . implode(', ', $arr) . "]<br>";
    echo "Output: $total<br><br>";
}

// Test cases
sum_of_numbers([1, 5.2, 4, 0, -1]);
sum_of_numbers([]);
sum_of_numbers([-2.398]);

?>