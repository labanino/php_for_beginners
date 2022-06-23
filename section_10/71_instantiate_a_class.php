<?php
    class Car {

        function MoveWheels() {
            echo "Wheels move" . "<br>";
        }

    }

    $bmw = new Car();
    $audi = new Car();

    $bmw->MoveWheels();
    $audi->MoveWheels();

?>