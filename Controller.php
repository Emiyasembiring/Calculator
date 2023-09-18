<?php
require_once 'CalculateModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model = new CalculatorModel();

    if (isset($_POST['cubeSideLength'])) {
        $cubeSideLength = $_POST['cubeSideLength'];
        $cubeVolume = $model->getCubeVolume($cubeSideLength);
        $cubeSurfaceArea = $model->getCubeSurfaceArea($cubeSideLength);
    }

    if (isset($_POST['sphereRadius'])) {
        $sphereRadius = $_POST['sphereRadius'];
        $sphereVolume = $model->getSphereVolume($sphereRadius);
        $sphereSurfaceArea = $model->getSphereSurfaceArea($sphereRadius);
    }

    include 'View.php';
}
?>