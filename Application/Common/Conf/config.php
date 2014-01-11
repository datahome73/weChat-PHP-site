<?php
return array(
	//'配置项'=>'配置值'
	
    /* 模块相关配置 */
    'AUTOLOAD_NAMESPACE' => array('Addons' => ONETHINK_ADDON_PATH), //扩展模块列表
    'DEFAULT_MODULE'     => 'Home',
    //'MODULE_DENY_LIST'   => array('Common', 'User'),
    'MODULE_ALLOW_LIST'  => array('Home','WeChatAPI'),
	
    /* URL配置 */
    'URL_MODEL'            => 3, //URL模式
 
 
	
);