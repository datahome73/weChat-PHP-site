CommonInfo.class		公共类，取IP地址
TianQi.class			天气预报类
weather_cityId			天气的城市名和代码对应关系
BiaoQing.class			表情处理
Wechat.class			微信类think库


调用的链为 
IndexController.class   是入口，调用扩展的类函数
WeChatController.class  主处理函数，根据来源信息的类型进行处理，其中分支逻辑处理部分为 SUB01.class 和 SUB02.class
Wechat.class  			是封装的类库。目前根据thinkPHP3.2的要求，增加了命名空间和修改了读取参数配置，增加了将错误信息回复文本，方便调试




1. wechat.class.php  
调用官方API，具有更灵活的消息分类响应方式，支持链式调用操作 ；

2. wechatext.class.php  
非官方扩展API，

3. wechatauth.class.php  
通过微信二维码登陆微信的API, 能实现第三方网站同步登陆,

4. snoopy.class  一个抓取网页的类


参数配置在  \Application\WeChatAPI\Conf\

数据库SQL

CREATE TABLE IF NOT EXISTS `think_mysql` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` varchar(40) DEFAULT NULL,
  `account` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `from_user` (`from_user`)
)