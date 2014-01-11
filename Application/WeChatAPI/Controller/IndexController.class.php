<?php
// 本类由系统自动生成，仅供测试用途
namespace WeChatAPI\Controller;
use Think\Controller;

class IndexController extends weixinController {
	//定义空操作，避免错误反馈
	public function _empty(){ 
	//空操作
    }

    public function index(){
 	//  
	$weixin = A('weixin'); 
	$weixin->responseMsg();
	
	//$weixin->test();
	
	}
	
}