<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <form method="post" action="">
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $age = $_POST["age"];

        $fullName = $firstName . " " . $lastName;

        if ($age < 18) {
            $ageCategory = "Minor";
        } elseif ($age >= 18 && $age <= 60) {
            $ageCategory = "Adult";
        } else {
            $ageCategory = "Senior Citizen";
        }

        echo "Full Name: $fullName<br>";
        echo "Age Category: $ageCategory";
    }
    ?>
</body>
</html>