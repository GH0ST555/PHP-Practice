<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
    <h2>Employee List</h2>
    <?php
    $employees = array("Arjun" => 5000, "Jon" => 2000);

    // Add new employee
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //to prevent crossside scripting (XSS)
        $name = htmlspecialchars($_POST['name']);
        $salary = htmlspecialchars($_POST['salary']);

        if (!empty($name) && !empty($salary)) {
            $employees[$name] = $salary;
            echo "<p>New employee added: $name - Salary: $salary</p>";
        } else {
            echo "<p>Please enter both name and salary.</p>";
        }
    }

    // Display existing employees
    if (!empty($employees)) {
        echo "<ul>";
        foreach ($employees as $name => $salary) {
            echo "<li>$name - Salary: $salary</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No employees found.</p>";
    }
    ?>

    <h2>Add Employee</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="salary">Salary:</label>
        <input type="text" name="salary" id="salary" required>
        <br><br>
        <input type="submit" value="Add Employee">
    </form>

</body>
</html>

