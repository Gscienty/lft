<?php
    class request_config{
        private static $config_map = array(
            'PATH_QUERY_KEY' => 'lft-path',
        );

        public static function get($key){
            return self::$config_map[$key];
        }
    }
 ?>
