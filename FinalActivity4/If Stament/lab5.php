<DOCTYPE html>
<html>
 <body>
    <!--LAB 5-->
    <h2>Lab 5: Largest of Three Numbers</h2>
    <form method="post">
        Enter first number: <input type="text" name="num1"><br><br>
        Enter second number: <input type="text" name="num2"><br><br>
        Enter third number: <input type="text" name="num3"><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "The largest number is: " . $num1;
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            echo "The largest number is: " . $num2;
        } else {
            echo "The largest number is: " . $num3;
        }
    }
    ?>
</body>
</html>