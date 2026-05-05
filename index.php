<?php
$disksString = file_get_contents("disks.json");

$disks = json_decode($disksString, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotyPHPfy</title>
</head>

<body>

    <?php
    foreach ($disks as $disk) {
        echo "<ul>";
        foreach ($disk as $key => $value) {
            echo "<li>$value</li>";
        };
        echo "</ul>";
    }
    ?>

</body>

</html>