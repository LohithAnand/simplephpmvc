<?php
/**
 * Author: Lohith
 */

//All global configurations
$CONFIG = array(
    
    'SERVER' => 'localhost',
    
    'DB_TYPE' => 'mysql',
    
    'DB_USERNAME' => '',
    
    'DB_PASSWORD' => '',
    
    'DB_NAME' => '',
);

class Config {
    static function get($key) {
        global $CONFIG;
        if(isset($CONFIG[$key])) {
            return $CONFIG[$key];
        }
        return FALSE;
    }
}

