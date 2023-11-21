<?php

/**
 * @package Censored
 * @version 0.1
 */
/*
Plugin Name: Censored
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is a plug-in that censors the use of several crass words in English and Spanish.
Author: Subconsciente colectivo
Version: 0.1
Author URI:
*/
$soeces = array("Wordpress","puto","puta","carajo","gilipollas","limpiaculos","anormal",
    "furcia","zalamera","coño","vividor");
$eufemismos = array("WordpressDam","gay","dama de compañía","gónada","idiota arroagante","elogiador","discapacitado","mujer de alto standing",
    "conveniensias","vulva","hedonista");
    function renym_wordpress_typo_fix( $text ) {
        global $soeces,$eufemismos;
        return str_ireplace( $soeces, $eufemismos, $text );
    }

    add_filter( 'the_content', 'renym_wordpress_typo_fix' );

?>