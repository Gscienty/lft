<?php
    //加载类
    function loading_class($folder, $class_name){
        $class_file = $folder . '/' . $class_name . '.class.php';
        if(file_exists($class_file)){
            require_once($class_file);
        }
    }

    //加载接口
    function loading_interface($folder, $interface_name){
        $interface_file = $folder . '/' . $interface_name . '.interface.php';
        if(file_exists($interface_file)){
            require_once($interface_file);
        }
    }

    //加载方法
    function loading_functions($folder, $functions_packages){
        $functions_packages_file = $folder . '/' . $functions_packages . '.function.php';
        if(file_exists(functions_packages_file)){
            require_once($functions_packages_file);
        }
    }

    //加载配置文件
    function loading_config($config_name){
        $config_file = 'configs/' . $config_name . '.config.php';
        if(file_exists($config_file)){
            require_once($config_file);
        }
    }
?>
