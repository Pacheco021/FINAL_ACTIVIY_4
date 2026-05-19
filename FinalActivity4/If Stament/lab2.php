<DOCTYPE html>
<html>
 <body>
    <!--LAB 2-->
    <h2>Lab 2: If-Else Statement</h2>
    <form method="post">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number > 0) {
            echo "Positive number";
        } else {
            echo "Negative number";
        } 
    }
    ?>
</body>
</html>