<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  

class Console {
    public function __construct() {
    }
	
	public static function log($input, $echo = true)
	{
        if ($echo) {
            echo '<pre>';
            if (is_array( $input) || is_object($input)) {
                print_r( $input );
            } else {
                echo $input;
            }
            echo '</pre>';
        } else {
            echo '<textarea cols=140 rows=35>';
            if (is_array( $input) || is_object($input)) {
                print_r( $input );
            } else {
                echo $input;
            }
            echo '</textarea>';
        }
	}
}