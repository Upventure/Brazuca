<?php
/**
 * Created by PhpStorm.
 * User: rensb
 * Date: 17/04/2018
 * Time: 17:08
 */

function webpost_referal($page_url, $title, $summary, $picture_url, $link_text='Lees meer', $mirrored=False) {
    $extra_class = "";
    if ($mirrored) { $extra_class = "row-reverse"; }

    echo "
        <div class='referal-advertisement-div'>
            <div class='referal-advertisement ".$extra_class."'>
                <div class='picture'><img src='".$picture_url."' alt='picture'></div>
                <div class='content'>
                    <div class='title'><h1>".$title."</h1></div>
                    <div class='summary'><p>".$summary."</p></div>
                    <div class='hyperlink'><a href='".$page_url."' class='button'><b>".$link_text."</b></a></div>
                </div>
            </div>
        </div>
    ";
}

function webpost_full($page_url, $title, $summary, $link_text='Lees meer', $background_css_class='') {
    if($background_css_class == '') {
        echo "
            <div class='referal-advertisement-div'>
                <div class='referal-advertisement'>
                    <div class='content'>
                        <div class='title'><h1><br></h1></div>
                        <div class='summary summary-extra'><h1>".$title."</h1><p>".$summary."</p></div>
                        <div class='hyperlink-center'><a href='".$page_url."' class='button'><b>".$link_text."</b></a></div>
                    </div>
                </div>
            </div>
        ";
    }
    else {
        echo "
            <div class='referal-advertisement-div'>
                <div class='referal-advertisement ".$background_css_class."'>
                    <div class='content mask-layer'>
                        <div class='title'><h1><br></h1></div>
                        <div class='summary summary-extra'><h1>".$title."</h1><p>".$summary."</p></div>
                        <div class='hyperlink-center'><a href='".$page_url."' class='button'><b>".$link_text."</b></a></div>
                    </div>
                </div>
            </div>
        ";
    }
}