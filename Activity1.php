<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the week</title>
</head>
<body>
    <h2>Click a Button to Display the Day</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="submit" name="day" value="Monday">
      <input type="submit" name="day" value="Tuesday">
      <input type="submit" name="day" value="Wednesday">
      <input type="submit" name="day" value="Thursday">
      <input type="submit" name="day" value="Friday">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['day'])) {
        $day = $_POST['day'];
        echo "<h3>You clicked: " . $day . "</h3>";
    }
    ?>

</body>
</html>