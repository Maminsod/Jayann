<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2">
    </form>
    <?php
        $num1 = 10;
        $num2 = 2;

        function add($a, $b) {
            return $a + $b;
        }

        function subtract($a, $b) {
            return $a - $b;
        }

        function multiply($a, $b) {
            return $a * $b;
        }

        function divide($a, $b) {
            if ($b == 0) {
                throw new Exception("Division by zero");
            }
            return $a / $b;
        }

        $result = "";
        $result .= "Addition: " . add($num1, $num2) . "<br>";
        $result .= "Subtraction: " . subtract($num1, $num2) . "<br>";
        $result .= "Multiplication: " . multiply($num1, $num2) . "<br>";
        $result .= "Division: " . divide($num1, $num2) . "<br>";

        echo "<h1>Results:</h1>";
        echo "<p>$result</p>";
    ?>
</body>
</html>