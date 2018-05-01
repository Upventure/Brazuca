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
                    center: {lat: ".$lat.", lng: ".$lng."},
                    styles: [{\"featureType\":\"all\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#000000\"},{\"lightness\":40}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#000000\"},{\"lightness\":16}]},{\"featureType\":\"all\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17},{\"weight\":1.2}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":20}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":21}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":16}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":19}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#000000\"},{\"lightness\":17}]}]
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
                    center: {lat: ".$lat_avg.", lng: ".$lng_avg."},
                    styles: [{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#e9e9e9\"},{\"lightness\":17}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":20}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":21}]},{\"featureType\":\"poi.park\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#dedede\"},{\"lightness\":21}]},{\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#333333\"},{\"lightness\":40}]},{\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f2f2f2\"},{\"lightness\":19}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":17},{\"weight\":1.2}]}]
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