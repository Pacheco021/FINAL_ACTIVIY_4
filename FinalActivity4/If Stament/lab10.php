<DOCTYPE html>
<html>
 <body>
    <!--LAB 10-->
    <h2>Lab 10: Simple Login System</h2>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "secret" && $password == "secret21") {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
    ?>
</body>
</html>