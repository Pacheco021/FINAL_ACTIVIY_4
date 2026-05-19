<DOCTYPE html>
<html>
 <body>
    <!--LAB 3-->
    <h2>Lab 3: If-Elseif Statement</h2>
    <form method="post">
        Enter a grade: <input type="text" name="grade">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST["grade"];

        if ($grade < 0 || $grade > 100) {
            echo "Invalid grade";
        } else if ($grade >= 90 && $grade <= 100) {
            echo "Excellent";
        } else if ($grade >= 80) {
            echo "Good";
        } else if ($grade >= 70) {
            echo "Average";
        } else {
            echo "Failed";
        }
    }
    ?>
</body>
</html>