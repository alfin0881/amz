<?php
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['latitude']) && isset($data['longitude'])) {
        $latitude = $data['latitude'];
        $longtiude = $data['longitude'];

            $log = "Latitude: $latitude, Longitude: $longtiude\n";
            file_put_contents('location_log.txt', $log, FILE_APPEND);

            echo "Latitude: $latitude, Longitude: $longtiude";
        } else {
            echo "Data tidak valid";
        }
?>