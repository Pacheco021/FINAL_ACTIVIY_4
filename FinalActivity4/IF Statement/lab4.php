<DOCTYPE html>
<html>
 <body>
    <!--LAB 4-->
    <h2>LAB 4: Even or Odd Number</h2>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            echo "Even number";
        } else {
            echo "Odd number";
        }
    }
    ?>
</body>
</html>