<?php
require_once 'calculate.php';

class CalculateModel {
    private $calculate;

    public function __construct() {
        $this->calculate = new Calculate();
    }

    public function getCubeVolume($sideLength) {
        return $this->calculate->calculateCubeVolume($sideLength);
    }

    public function getCubeSurfaceArea($sideLength) {
        return $this->calculate->calculateCubeSurfaceArea($sideLength);
    }

    public function getSphereVolume($radius) {
        return $this->calculate->calculateSphereVolume($radius);
    }

    public function getSphereSurfaceArea($radius) {
        return $this->calculate->calculateSphereSurfaceArea($radius);
    }
}
?>