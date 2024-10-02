<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="num1">Enter the first number:</label>
    <input type="number" id="num1" name="num1" required> 
    <br>
    <label for="num2">Enter the second number:</label>
    <input type="number" name="num2" required> 
    <br> 
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;

    if ($num2 != 0) {
        $quotient = $num1 / $num2;
    } else {
        $quotient = "Cannot divide by zero!";
    }

    echo "<h3>Results:</h3>";
    echo "Sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>"; 
    echo "Quotient: $quotient<br>";
}
?>

    
</body>
</html>