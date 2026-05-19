<DOCTYPE html>
<html>
 <body>
    <!--LAB 7-->
    <h2>Lab 7: Leap Year Checker</h2>
    <form method="post">
        Enter a year: <input type="text" name="year">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];

        if (($year % 400 == 0 && $year % 100 != 0) || ($year % 100 == 0)) {
            echo "Leap year";
        } else {
            echo "Not a leap year";
        }
    }
    ?>
</body>
</html>