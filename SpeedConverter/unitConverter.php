<?php
class unitConverters {
    public function mToMile($m) {
        return $m * 0.000621371;
    }
    public function mileToKm($mile) {
        return $mile * 1.60934;
    }

    public function kmToM($km) {
        return $km * 1000;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $unit = $_POST['unit'];
    $conversionType = $_POST['conversionType'];

    $converter = new unitConverters();

    if ($conversionType === 'm_to_mile') {
        $result = $converter->mToMile($unit);
        $fromUnit = 'meters';
        $toUnit = 'miles';
    } else if ($conversionType === 'mile_to_km') {
        $result = $converter->mileToKm($unit);
        $fromUnit = 'miles';
        $toUnit = 'kilometers';
    } else if ($conversionType === 'km_to_m') {
        $result = $converter->kmToM($unit);
        $fromUnit = 'kilometers';
        $toUnit = 'meters';
    } else {
        die('Invalid Conversation Type');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unit Converter Result</title>
    <style>
        body {

            background: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');

        }
        </style>
</head>
<body>
<h1>Unit Conversion Result</h1>
<p>
    <?php
    if (isset($result)) {
        echo $unit . ' ' . $fromUnit . ' is equal to ' . $result . ' ' . $toUnit;
    }
    ?>
</p>
<a href="home.html">Go back</a>
</body>
</html>
