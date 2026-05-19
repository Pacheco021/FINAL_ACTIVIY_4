<DOCTYPE html>
<html>
 <body>
    <!--LAB 8-->
    <h2>Lab 8: Nested If</h2>
    <form method="post">
        Enter your age: <input type="text" name="age">
        Enter your citizenship: <input type="text" name="citizenship">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"];
        $citizenship = $_POST["citizenship"];

        if ($age >= 18) {
            if ($citizenship == "FILIPINO") {
                echo "You are eligible to vote.";
            } else {
                echo "You are not eligible to vote.";
            }
        }
    }
    ?>