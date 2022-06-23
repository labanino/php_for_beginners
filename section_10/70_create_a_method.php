<?php
    class Car {

        function MoveWheels() {
            echo "Wheels move";
        }

    }

    if(method_exists("Car", "MoveWheels")) {
        echo "Yes, method exist!";
    } else {
        echo "No, method doesn't exist!";
    }
?>