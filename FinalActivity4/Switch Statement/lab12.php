<!DOCTYPE html>
<html>
<body>
    <!--LAB 12-->
    <h2>Lab 12: Grade Description</h2>
        <form method="post ">
            Enter your grade (A, B, C, D, F): <input type="text" name="grade"><br><br>
            <input type="submit" value="Submit">
        </form>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST["grade"];

        switch(strtoupper($grade)){
            case "A":
                echo "Excellent!";
                break;
            case "B":
                echo "Good";
                break;
            case "C":
                echo "Average";
                break;
            case "D":
                echo "Poor";
                break;
            case "F":
                echo "Failed";
                break;
            default:
                echo "Invalid grade";
        }
    }
    ?>
</body>
</html>