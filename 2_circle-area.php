<!DOCTYPE html>
<html>
<head>
    <title>Area of Circle</title>
</head>
<body>

<form method="POST">
    <input type="number" name="radius" step="any" placeholder="Enter radius" required>
    <input type="submit" name="submit-btn" value="Submit">
</form>

<?php
define("PI", 3.14159);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["radius"])) {
    $radius = (float) $_POST["radius"];
    $area = PI * $radius * $radius;

    echo "<p><strong>Area of circle is:</strong> " . number_format($area, 2) . "</p>";
}
?>

</body>
</html>
