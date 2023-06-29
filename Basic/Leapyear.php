
<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <!-- a simple code to if the year is a leap year-->
    <h2>Leap Year?</h2>
    <form method="post" action="">
        <label for="number">EnterThe year:</label>
        <input type="text" name="number" id="number" required>
        <br><br>
        <input type="submit" value="Leap Year?">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['number'];
    $originalNum = $year; // To keep original year
    //multiple conditions to check the leap year  
    if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
    {  
        echo "$year is a Leap Year";    
    }  
    else  
    {  
        echo "$year is not a Leap Year";    
    }  
} 

?>

</body>
</html>
