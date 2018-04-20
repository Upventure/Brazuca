


<?php

function get_establishments() {
    global $wpdb;
    $result = $wpdb->get_results( $wpdb->prepare(
        'SELECT * FROM establishments', array()) );

    foreach ($result as $item) {
        echo "
            <ul>
                <li>".$item->street." ".$item->streetNumber." ".$item->streetNumberSuffix."</li>
                <li>".$item->postalcode."</li>
                <li>".$item->city."</li>
                <li><br /></li>
                <li>".$item->phoneNumberPrefix."-".$item->phoneNumber."</li>
                <li>".$item->emailAddress."</li>
            </ul>";
    }
}


function get_establishment($establishment_street) {
    global $wpdb;
    // FATAL SQL INJECTION CAN BE DONE
    $item = $wpdb->get_results( $wpdb->prepare("SELECT * FROM establishments WHERE street = {$establishment_street}", array()) );

    if($item) {
        echo "
            <ul>
                <li>\".$item->street.\" \".$item->streetNumber.\" \".$item->streetNumberSuffix.\"</li>
                <li>\".$item->postalcode.\"</li>
                <li>\".$item->city.\"</li>
                <li><br /></li>
                <li>\".$item->phoneNumberPrefix.\"-\".$item->phoneNumber.\"</li>
                <li>\".$item->emailAddress.\"</li>
            </ul>\"
        ";
    } else {
        echo "<p>no data...</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- <link href="/css/footerstyle.css" type="text/css" rel="stylesheet"> -->

</head>
<body>

<div class="footer">
    <div class="contact footer-content">

    </div>
</div>

<div class="footer">
    <div class="navigation footer-content">
        <div class="pages">
            <div><h1>Pagina's</h1></div>
            <div class="page-list">
                <ul>
                    <?php wp_list_pages( array('title_li' => '') ); ?>
                </ul>
            </div>
        </div>
        <div class="establishments">
            <div><h1>Brazuca Coffee</h1></div>
            <div class="establishments-list">
                <?php get_establishments(); ?>
            </div>
        </div>

        <div class="social-media">
            <div class="social-media-text">
                <h1>Follow us on social media:</h1>
            </div>
            <div class="social-media-links">
                <img src="http://www.sumterpost15.com/icons/Facebook.png" width="100%" height="100%">
                <img src="http://www.sumterpost15.com/icons/Facebook.png" width="100%" height="100%">
                <img src="http://www.sumterpost15.com/icons/Facebook.png" width="100%" height="100%">
            </div>
        </div>

    </div>
</div>



<?php wp_footer(); ?>

</body>
</html>
