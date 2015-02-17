<?php
/**
 * Plugin Name: ROT13 Email Obfuscator
 * Description: An easy-to-use substitution cipher which encrypts your email addresses to avoid them getting harvested by spam-bots.
 * Version: 1.0.0
 * Author: Ryan Nevius
 * Author URI: http://www.ryannevius.com
 * License: GPLv3
 */


/**
 * Obfuscate a mailto: link using a ROT13 cipher
 * 
 * @param  array  $atts  Link email address, subject, CSS class, inner HTML text, and whether to provide a fallback.
 * @return string        Obfuscated link.
 */
function rotate_by_13_places( $atts ) {
    $a = shortcode_atts( array(
            'email' => '',
            'subject' => '',
            'class' => '',
            'text' => '',
            'fallback' => 'false',
        ), $atts );

    // Subject
    if ( !empty( $a['subject'] ) ) {
        $subject = '?' . str_rot13('subject') . '=' . str_rot13( esc_attr( $a['subject'] ) );
    } else { $subject = ''; }

    // CSS Class Name
    if ( !empty( $a['class'] ) ) {
        $class = str_rot13('class') . '=' . str_rot13( esc_attr( $a['class'] ) ) . ' ';
    } else { $class = ''; }

    // Link Inner HTML
    if ( !empty( $a['text'] ) ) {
        $text = str_rot13( esc_attr( $a['text'] ) );
    } else {
        $text = str_rot13( esc_attr( $a['email'] ) );
    }

    // Provide a CSS fallback?
    if ( $a['fallback'] != 'false' ) {
        $fallback = '<noscript><span style="unicode-bidi:bidi-override;direction:rtl;">' 
                    . strrev( esc_attr( $a['email'] ) )
                    . '</span></noscript>';
    } else { $fallback = ''; }
    
    $obf_id = 'obf_' . rand(0, 9999999);

    return  '<span id="' . $obf_id . '">'
                . '<script>document.getElementById("' . $obf_id . '").innerHTML="<n ' . $class . str_rot13('href') . '=\"znvygb:' . str_rot13( esc_attr( $a['email'] ) ) . $subject . '\" gnetrg=\"_oynax\">' . $text . '</n>".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});document.body.appendChild(eo);</script>'
                . $fallback 
            . '</span>';
}
add_shortcode( 'rot13', 'rotate_by_13_places' );
