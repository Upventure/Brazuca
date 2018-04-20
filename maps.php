<?php
/**
 * Created by PhpStorm.
 * User: rensb
 * Date: 16/04/2018
 * Time: 10:58
 */

function get_latitude($establishment_street) {
    global $wpdb;
    // FATAL SQL INJECTION CAN BE DONE
    $result = $wpdb->get_results( $wpdb->prepare("SELECT * FROM world_location WHERE street = \"{$establishment_street}\";", array()) );

    if ($result) return($result[0]->latitude);
    else return(0);
}
function get_longitude($establishment_street) {
    global $wpdb;
    // FATAL SQL INJECTION CAN BE DONE
    $result = $wpdb->get_results( $wpdb->prepare("SELECT * FROM world_location WHERE street = \"{$establishment_street}\";", array()) );

    if ($result) return($result[0]->longtitude);
    else return(0);
}

function get_map($establishment_street) {

    $lat = get_latitude($establishment_street);
    $lng = get_longitude($establishment_street);
    $marker = get_marker($establishment_street);

    echo "
        <div id=\"map\" style='width: 100%; height: 100%;'></div>
        <script>
            function initMap() {

                // MAP
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: {lat: ".$lat.", lng: ".$lng."}
                });

                // MARKERS
                ".$marker."
            }
        </script>
        <script async defer
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBiWe2YbZwxrSri8c1tx3cP_QhCoT_Rkz8&callback=initMap\">
        </script>
    ";
}

function get_map_all() {

    $streets = get_streets();

    $lat_avg = 0;
    $lng_avg = 0;
    $markers = "";


    for ($i = 0; $i < count($streets); $i++) {
        $lat_avg += get_latitude($streets[$i]->street);
        $lng_avg += get_longitude($streets[$i]->street);
        $markers = $markers . get_marker($streets[$i]->street);

        if ($i == count($streets) - 1) {
            $lat_avg = $lat_avg / count($streets);
            $lng_avg = $lng_avg / count($streets);
        }
    }


    echo "
        <div id=\"map\" style='width: 100%; height: 100%;'></div>
        <script>
            function initMap() {

                // MAP
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 9,
                    center: {lat: ".$lat_avg.", lng: ".$lng_avg."}
                });

                // MARKERS
                ".$markers."
            }
        </script>
        <script async defer
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBiWe2YbZwxrSri8c1tx3cP_QhCoT_Rkz8&callback=initMap\">
        </script>
    ";
}

function get_marker($establishment_street) {

    $lat = get_latitude($establishment_street);
    $lng = get_longitude($establishment_street);

    $variable_name = "x" . random_string();

    return("
        var ".$variable_name." = new google.maps.Marker({
            position: {lat: ".$lat.", lng: ".$lng."},
            map: map
        });
    ");
}