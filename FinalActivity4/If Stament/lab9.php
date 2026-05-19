<DOCTYPE html>
<html>
 <body>
    <!--LAB 9-->
    <h2>Lab 9: Discount Calculator</h2>
    <form method="post">
        Purchase amount: <input type="text" name="amount">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];

        if ($amount >= 1000) {
           echo "Discount: 20%<br>";
        } elseif ($amount >= 500) {
            echo "Discount: 10%<br>";
        } else {
            echo "No discount available.";
        }
    }
    ?>
</body>
</html>