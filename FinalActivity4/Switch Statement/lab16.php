<!DOCTYPE html>
<html>
<body>
    <!--LAB 16-->
    <h2>Lab 16: Traffic Light System</h2>
        <form method="post ">
            <label for="color">Enter traffic light color:</label>
            <input type="text" id="color" name="color">
            <input type="submit" value="Submit">
        </form>

        <?php
    if (isset($_POST["color"])) {
        $color = strtoupper($_POST["color"]);

        switch($color){
            case "RED ":
                echo "Stop ";
                break;
            case "YELLOW ":
                echo "Caution ";
                break;
            case "GREEN ":
                echo "Go ";
                break;
            default:
                echo "Invalid traffic light color ";
        }
    }
    ?>
    </div>
</body>
</html>