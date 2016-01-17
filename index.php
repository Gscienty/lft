<?php
    require_once('core/util.function.php');

    //加载请求实体
    loading_class('core/base', 'request');
    //加载响应实体
    loading_class('core/base', 'response');

    //加载配置文件
    loading_config('request');

    //获取Path
    $path = $_GET[request_config::get('PATH_QUERY_KEY')];

    echo $path;
?>
