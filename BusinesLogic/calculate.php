<?php
class calculate {
    public function calculateCubeVolume($sideLength) {
        return $sideLength * $sideLength * $sideLength;
    }

    public function calculateCubeSurfaceArea($sideLength) {
        return 6 * $sideLength * $sideLength;
    }

    public function calculateSphereVolume($radius) {
        return (4/3) * 3.14 * $radius * $radius * $radius;
    }

    public function calculateSphereSurfaceArea($radius) {
        return 4 * 3.14 * $radius * $radius;
    }
}
?>