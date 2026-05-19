<!DOCTYPE html>
<html>
<body>
    <!--LAB 13-->
    <h2>Lab 13: Simple Calculator</h2>
    <form method="post">
        Enter first number: <input type="number" name="num1"><br><br>
        Enter second number: <input type="number" name="num2"><br><br>
        Enter an operator (+, -, *, /): <input type="text" name="operator"><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch($operator) {
            case "+":
                echo "Result: " . ($num1 + $num2);
                break;
            case "-":
                echo "Result: " . ($num1 - $num2);
                break;
            case "*":
                echo "Result: " . ($num1 * $num2);
                break;
            case "/":
                if ($num2 != 0) {
                    echo "Result: " . ($num1 / $num2);
                } 
                 break;
            default:
                echo "Invalid operator";
        }
    }
    ?>
</body>
</html>