
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    // a simple code to calculate sum of digits in php
    <h2>Sum of Digits Calculator</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" id="number" required>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];
    $originalNum = $num; // To keep original number
    $sum = 0;

    while($num > 0) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = intval($num / 10);
    }

    echo "The sum of digits of $originalNum is $sum";
}
?>

</body>
</html>
