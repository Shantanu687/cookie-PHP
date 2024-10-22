<!DOCTYPE html>
<html>
<head>
  <title>Addition Calculator</title>
</head>
<body>
  <h2>Addition Calculator</h2>
  <form action="calculate.php" method="GET">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required><br><br>
    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required><br><br>
    <input type="submit" value="Calculate">
  </form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Check if the input fields are set and not empty
  if (isset($_GET['num1']) && isset($_GET['num2']) && !empty($_GET['num1']) && !empty($_GET['num2'])) {
    // Validate the input data
    if (is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
      $num1 = (float) $_GET['num1'];
      $num2 = (float) $_GET['num2'];

      $sum = $num1 + $num2;

      echo "The sum of $num1 and $num2 is: $sum";
    } else {
      echo "Invalid input. Please enter numeric values.";
    }
  } else {
    echo "Please enter both numbers.";
  }
} else {
  echo "Invalid request method.";
}
?>
</body>
</html>