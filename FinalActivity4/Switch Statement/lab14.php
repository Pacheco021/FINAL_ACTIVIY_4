<!DOCTYPE html>
<html>
<body>
    <!--LAB 14-->
    <h2>Lab 14: Menu Selection</h2>
    <form method="post">
        Enter choice (Add, Edit, Delete): <input type="text" name="choice"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choice = $_POST["choice"];

        switch(strtolower($choice)) {
            case "add":
                echo "You selected Add.";
                break;
            case "edit":
                echo "You selected Edit.";
                break;
            case "delete":
                echo "You selected Delete.";
                break;
            default:
                echo "Invalid choice.";
        }
    }
    ?>
</body>
</html>