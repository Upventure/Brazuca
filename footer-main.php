<?php
/**
 * Created by PhpStorm.
 * User: rensb
 * Date: 15/04/2018
 * Time: 16:52
 */
function get_footer_main($extra_css_class='') {

    echo "
        <div class=\"footer\">
            <div class=\"navigation footer-content ".$extra_css_class."\">
                <div class=\"pages\">
                    <div><h1>Pagina's</h1></div>
                    <div class=\"page-list\">
                        ";
                        wp_nav_menu( array('menu' => 'Footer-specialiteiten') );
                        wp_nav_menu( array('menu' => 'Footer-core') );
                        echo "
                    </div>
                </div>
                <div class=\"establishments\">
                    <div><h1>Brazuca Coffee</h1></div>
                    <div class=\"establishments-list\">
                            ";get_establishments(); echo "
                    </div>
                </div>
            </div>
        </div>
    ";
}
