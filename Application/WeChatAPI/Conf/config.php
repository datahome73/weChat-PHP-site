<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.thinkphp.cn>
// +----------------------------------------------------------------------


// 小九机器人的后台用户名、密码
//这里为你的小九后台账号,不填不能正常回复！！！！
define("XIAOJO_DB", "你的");
define("XIAOJO_PW", "你的");
//三个公众号的  opinID 值
define("SUB_ID0", "你的"); //分支程序测试，正式号的微信公众号
define("SUB_ID1", "你的"); //分支程序测试，测试号1的微信公众号
define("SUB_ID2", "你的"); //分支程序测试，测试号2 的微信公众号

//下面定义用到的各个提示信息
define("REPLY_SUBSCRIBE", "感谢你关注这个公众号"); //关注事件
define("REPLY_UNSUBSCRIBE", ""); //取消关注事件
define("REPLY_STR00", "你发送了数字 0 ，所以你就看到了这么多 000000000000。 "); //输入0的回复字符串
define("REPLY_STR01", "你发送了数字 1 ，所以你就看到了这么多 1111111111111。"); //输入1的回复字符串
define("REPLY_STR03", "你发送了数字 0 ，分支2正常。回复 000000000000。 "); //输入0的回复字符串
define("REPLY_STR04", "你发送了数字 1 ，分支2正常。回复 1111111111111。"); //输入1的回复字符串
define("REPLY_DB_TEST_STR", "数据库测试 ，分支2正常。回复 777777777777。"); //输入1的回复字符串
define("SUB1", "测试号1分支测试。。。仅支持提交文字信息。。"); //分支1程序测试
define("SUB2", "测试号2分支测试。。。仅支持提交文字信息。。"); //分支2程序测试
define("SUB1_TEST", "测试号1回复："); //分支1程序测试
define("SUB2_TEST", "测试号2回复："); //分支2程序测试回复内容
define("SUB2_IP_ADD", "分支2测试，你的IP地址是："); //分支2程序测试回复内容,IP地址

/**
 * 前台配置文件
 * 所有除开系统级别的前台配置
 */
return array(

	//微信的 TOKEN
	'WE_CHAT_TOKEN'=>'你的', //填写你设定的 token 
	
	//数据库配置信息
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'think', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'think_', // 数据库表前缀 
	

);


