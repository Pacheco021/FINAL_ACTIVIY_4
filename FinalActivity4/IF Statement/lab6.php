<DOCTYPE html>
<html>
 <body>
    <!--LAB 6-->
    <h2>Lab 6: Password Checker</h2>
    <form method="post">
        Enter a password: <input type="text" name="password">
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];

        if ($password == "secret") {
            echo "Password is correct";
        } else {
            echo "Password is incorrect";
        }
    }
    ?>
</body>
</html>