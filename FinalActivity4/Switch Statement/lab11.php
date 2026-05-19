<!DOCTYPE html>
<html>
<body>
    <!--LAB 11-->
    <h2>Lab 11: Day of the Week</h2>
        <form method="post ">
            <label for="day">Enter a number:</label>
            <input type="number" id="day" name="day">
            <input type="submit" value="Submit"><br><br>
        </form>

        <?php
    if (isset($_POST["day"])) {
        $day = $_POST["day"];

        switch($day){
            case 1:
                echo "Monday ";
                break;
            case 2:
                echo "Tuesday ";
                break;
            case 3:
                echo "Wednesday ";
                break;
            case 4:
                echo "Thursday ";
                break;
            case 5:
                echo "Friday ";
                break;
            case 6:
                echo "Saturday ";
                break;
            case 7:
                echo "Sunday ";
                break;
            default:
                echo "Invalid input ";
        }
    }
    ?>