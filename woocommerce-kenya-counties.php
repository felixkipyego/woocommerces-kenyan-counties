<?php

/*
Plugin Name: Kenyan Counties for WooCommerce 
Plugin URI: http://felixkipyego.com
Description: A short plugin that adds Kenyan counties to WooCommerce's list of states.
Version: 1.0
Author: Felix Kipyego
Author URI: http://felixkipyego.com
*/

/**
 * Copyright (c) 2018 Felix Kipyego. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 */


function  wc_kenyan_counties_add_counties( $states ) {

    $states['KE'] = array(
                            'KE01' => 'Mombasa',
                            'KE02' => 'Kwale',
                            'KE03' => 'Kilifi',
                            'KE04' => 'Tana River',
                            'KE05' => 'Lamu',
                            'KE06' => 'Taita–Taveta',
                            'KE07' => 'Garissa',
                            'KE08' => 'Wajir',
                            'KE09' => 'Mandera',
                            'KE10' => 'Marsabit',
                            'KE11' => 'Isiolo',
                            'KE12' => 'Meru',
                            'KE13' => 'Tharaka-Nithi',
                            'KE14' => 'Embu',
                            'KE15' => 'Kitui',
                            'KE16' => 'Machakos',
                            'KE17' => 'Makueni',
                            'KE18' => 'Nyandarua',
                            'KE19' => 'Nyeri',
                            'KE20' => 'Kirinyaga',
                            'KE21' => 'Murang\'a',
                            'KE22' => 'Kiambu',
                            'KE23' => 'Turkana',
                            'KE24' => 'West Pokot',
                            'KE25' => 'Samburu',
                            'KE26' => 'Trans-Nzoia',
                            'KE27' => 'Uasin Gishu',
                            'KE28' => 'Elgeyo-Marakwet',
                            'KE29' => 'Nandi',
                            'KE30' => 'Baringo',
                            'KE31' => 'Laikipia',
                            'KE32' => 'Nakuru',
                            'KE33' => 'Narok',
                            'KE34' => 'Kajiado',
                            'KE35' => 'Kericho',
                            'KE36' => 'Bomet',
                            'KE37' => 'Kakamega',
                            'KE38' => 'Vihiga',
                            'KE39' => 'Bungoma',
                            'KE40' => 'Busia',
                            'KE41' => 'Siaya',
                            'KE42' => 'Kisumu',
                            'KE43' => 'Homa Bay',
                            'KE44' => 'Migori',
                            'KE45' => 'Kisii',
                            'KE46' => 'Nyamira',
                            'KE47' => 'Nairobi',
                           );
    return $states;

}

add_filter( 'woocommerce_states', 'wc_kenyan_counties_add_counties' );
