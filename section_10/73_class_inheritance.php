<?php
    class Car {

        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $door = 4;

        function MoveWheels() {
            $this->wheels = 10;
        }

        function CreateDoors() {
            $this->doors = 6;
        }

    }

    $bmw = new Car();

    class Plane extends Car {
        var $wheels = 3;
    }

    $jet = new Plane();
        echo $jet->wheels;

?>