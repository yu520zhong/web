/*
Navicat MySQL Data Transfer

Source Server         : native
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : itcast_shop

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-11-06 14:06:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for miuu_admin
-- ----------------------------
DROP TABLE IF EXISTS `miuu_admin`;
CREATE TABLE `miuu_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `salt` char(6) NOT NULL COMMENT '密钥',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_admin
-- ----------------------------
INSERT INTO `miuu_admin` VALUES ('1', 'macyu', '56802b0058be8a26bd633d5f46760dfb', 'ItcAst');
INSERT INTO `miuu_admin` VALUES ('2', 'yuyu', '56802b0058be8a26bd633d5f46760dfb', 'ItcAst');

-- ----------------------------
-- Table structure for miuu_articles
-- ----------------------------
DROP TABLE IF EXISTS `miuu_articles`;
CREATE TABLE `miuu_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '文摘编号',
  `name` varchar(100) NOT NULL COMMENT '文摘名称',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `desc` text NOT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '文摘详情',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  `author` varchar(30) NOT NULL COMMENT '作者',
  `keywords` varchar(50) NOT NULL COMMENT '关键词',
  `source` varchar(20) NOT NULL COMMENT '来源',
  `url` varchar(255) NOT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_articles
-- ----------------------------
INSERT INTO `miuu_articles` VALUES ('1', '2', '12', 'HTML+CSS+JavaScript网页制作案例教程', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-03-23 16:39:16', '<p>不知道<img src=\"http://localhost/shop/Public/Uploads/desc/2016-03/23/14587223518408.jpeg\" alt=\"14587223518408.jpeg\" /></p>', '', 'no', '苦', '', '', '');
INSERT INTO `miuu_articles` VALUES ('3', '2', '111', 'Java基础入门', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-06-05 16:12:56', '', '', 'no', '打发', '', '', '');
INSERT INTO `miuu_articles` VALUES ('4', '1', '11', 'wwww', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'no', 'yes', '2016-06-05 16:16:07', '', '', 'no', '左', '', '', '');
INSERT INTO `miuu_articles` VALUES ('5', '3', '11', 'sss', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-06-05 16:16:50', '', '', 'no', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('6', '3', '111', '11111111', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'no', 'no', '2016-06-05 16:17:19', '', '', 'no', '的撒发大水', '', '', '');
INSERT INTO `miuu_articles` VALUES ('7', '3', '123', '123', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-06-05 16:17:56', '', '', 'no', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('8', '1', '222', '222', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-06-05 16:18:19', '', '', 'no', '大水法', '', '', '');
INSERT INTO `miuu_articles` VALUES ('9', '1', '333', '333', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-06-05 16:18:49', '', '', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('10', '3', '444', '444', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-06-05 16:19:19', '', '', 'no', '甘', '', '', '');
INSERT INTO `miuu_articles` VALUES ('11', '11', '555', '还有什么', '', 'yes', 'yes', '2016-06-05 16:19:55', '<p>11111111111111111111111111111111111111111</p>', '', 'no', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('12', '3', '13213', '1111111111112213213213', '', 'yes', 'yes', '2016-10-14 18:01:57', '', '', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('13', '11', '22222222', '222222222222222222', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-10-14 22:50:39', '2222222222222222', '', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('14', '11', '22222222', '222222222222222222', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-10-14 22:52:45', '2222222222222222', '', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('15', '11', '1111111111', '11111111', '', 'yes', 'yes', '2016-10-14 22:53:05', '111111111111111111111111111111', '', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('16', '11', '1111111111', '11111111', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-10-14 22:55:44', '', '<p>请在此处输入商品详情。</p>', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('17', '11', '00000', '000000', '', 'yes', 'no', '2016-10-14 22:55:57', '', '<p>0000000000000000000000000000000</p>', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('18', '11', '00000', '000000', '', 'yes', 'no', '2016-10-14 22:59:19', '0000000000000000000000000000', '<p>0000000000000000000000000000000</p>', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('19', '2', '1', '1', '', 'yes', 'yes', '2016-10-14 22:59:28', '1', '<p>1</p>', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('20', '2', '1', '1', '', 'yes', 'yes', '2016-10-14 23:00:19', '1', '<p>1</p>', 'yes', '', '', '', '');
INSERT INTO `miuu_articles` VALUES ('21', '1', '2', '2的说法撒', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-10-14 23:01:15', '2', '<p>2222222222222</p>', 'no', '11', '11', '', '');
INSERT INTO `miuu_articles` VALUES ('22', '1', 'sssssss', 'ssssssssssssss', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'no', '2016-10-22 13:37:17', 'sssssssssssss', '<p>木木木s</p>', 'no', 'ssssssssssss', 'ssssssssssss', '', '');
INSERT INTO `miuu_articles` VALUES ('23', '1', '111', '2111111111111111111111', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-10-22 13:37:47', '111', '<p>请在此处输入文摘内容。</p>', 'no', '111', '111', '', '');
INSERT INTO `miuu_articles` VALUES ('24', '1', '111', '21111111111111', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-10-22 13:38:20', '111', '<p>请在此处输入文摘内容。</p>', 'yes', '111', '111', '', '');
INSERT INTO `miuu_articles` VALUES ('25', '1', 'aaa', '工式aaaaaaaaaaaaa', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141638_1271512700.jpg', 'yes', 'yes', '2016-10-22 13:38:39', 'aaa', '<p><img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477141271.jpg\" title=\"1477141271.jpg\" alt=\"i2.jpg\" /><img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477141293.jpg\" title=\"1477141293.jpg\" alt=\"pic_business_3.jpg\" /></p>', 'no', 'aaa', 'aaa', '', '');
INSERT INTO `miuu_articles` VALUES ('26', '1', '1111', '11111111111', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477141778_1599176263.jpg', 'yes', 'no', '2016-10-22 21:09:38', '1大专', '<p>请在此处输入文摘内容。</p>', 'no', '11111111', 'sss', '', '');
INSERT INTO `miuu_articles` VALUES ('27', '28', 'ss111', '在大', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477142029_862790647.jpg', 'yes', 'no', '2016-10-22 21:13:49', 'ssss', '<p>落地有声dsfd</p>', 'no', 'ssss', 'ssss', '', '');
INSERT INTO `miuu_articles` VALUES ('28', '28', 'ss111', '在大', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477142082_2009237685.jpg', 'yes', 'no', '2016-10-22 21:14:42', 'ssss', '<p>落地有声dsfd</p>', 'no', 'ssss', 'ssss', '', '');
INSERT INTO `miuu_articles` VALUES ('29', '1', '111', '测试测试', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477146839_2093180342.jpg', 'yes', 'yes', '2016-10-22 21:42:55', '测试', '<p>测试<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477143766.png\" title=\"1477143766.png\" alt=\"item8.png\" /><img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477143771.jpg\" title=\"1477143771.jpg\" alt=\"i2.jpg\" /></p>', 'no', '测试', '测试', '社区网', 'http://www.baidu.com');

-- ----------------------------
-- Table structure for miuu_category
-- ----------------------------
DROP TABLE IF EXISTS `miuu_category`;
CREATE TABLE `miuu_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '分类名',
  `pid` int(10) unsigned NOT NULL COMMENT '父分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_category
-- ----------------------------
INSERT INTO `miuu_category` VALUES ('1', '文具', '0');
INSERT INTO `miuu_category` VALUES ('2', '铅笔', '1');
INSERT INTO `miuu_category` VALUES ('6', '学习', '0');
INSERT INTO `miuu_category` VALUES ('7', '上课学习', '6');
INSERT INTO `miuu_category` VALUES ('8', '上课语文学习', '7');
INSERT INTO `miuu_category` VALUES ('9', '上课语文学习', '7');

-- ----------------------------
-- Table structure for miuu_categoryart
-- ----------------------------
DROP TABLE IF EXISTS `miuu_categoryart`;
CREATE TABLE `miuu_categoryart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_categoryart
-- ----------------------------
INSERT INTO `miuu_categoryart` VALUES ('1', '前端开发', '0');
INSERT INTO `miuu_categoryart` VALUES ('2', '后端开发', '0');
INSERT INTO `miuu_categoryart` VALUES ('3', '移动开发', '0');
INSERT INTO `miuu_categoryart` VALUES ('4', '数据处理', '0');
INSERT INTO `miuu_categoryart` VALUES ('5', '基础知识', '0');
INSERT INTO `miuu_categoryart` VALUES ('6', '关于面试', '0');
INSERT INTO `miuu_categoryart` VALUES ('7', '前端基础', '1');
INSERT INTO `miuu_categoryart` VALUES ('8', '前端进阶', '1');
INSERT INTO `miuu_categoryart` VALUES ('9', '前端框架', '1');
INSERT INTO `miuu_categoryart` VALUES ('10', '前端工具', '1');
INSERT INTO `miuu_categoryart` VALUES ('11', 'PHP', '2');
INSERT INTO `miuu_categoryart` VALUES ('12', 'Node.js', '2');
INSERT INTO `miuu_categoryart` VALUES ('13', 'Linux', '2');
INSERT INTO `miuu_categoryart` VALUES ('14', 'JAVA', '2');
INSERT INTO `miuu_categoryart` VALUES ('15', 'Python', '2');
INSERT INTO `miuu_categoryart` VALUES ('16', 'Android', '3');
INSERT INTO `miuu_categoryart` VALUES ('17', 'iOS', '3');
INSERT INTO `miuu_categoryart` VALUES ('18', 'SQL', '4');
INSERT INTO `miuu_categoryart` VALUES ('19', 'NoSQL', '4');
INSERT INTO `miuu_categoryart` VALUES ('20', '其他', '4');
INSERT INTO `miuu_categoryart` VALUES ('21', '开发工具', '5');
INSERT INTO `miuu_categoryart` VALUES ('22', '计算机基础', '5');
INSERT INTO `miuu_categoryart` VALUES ('23', '面试技巧', '6');
INSERT INTO `miuu_categoryart` VALUES ('24', '面试题', '6');
INSERT INTO `miuu_categoryart` VALUES ('25', '前端安全', '8');
INSERT INTO `miuu_categoryart` VALUES ('28', 'HTML/CSS', '7');
INSERT INTO `miuu_categoryart` VALUES ('29', 'JavaScript', '7');
INSERT INTO `miuu_categoryart` VALUES ('30', 'HTML5', '7');
INSERT INTO `miuu_categoryart` VALUES ('31', 'CSS3', '7');
INSERT INTO `miuu_categoryart` VALUES ('32', '开发调试', '8');
INSERT INTO `miuu_categoryart` VALUES ('33', '浏览器兼容', '8');
INSERT INTO `miuu_categoryart` VALUES ('34', 'jQuery', '9');
INSERT INTO `miuu_categoryart` VALUES ('35', 'jQuery UI', '9');
INSERT INTO `miuu_categoryart` VALUES ('36', 'jQuery Mobile', '9');
INSERT INTO `miuu_categoryart` VALUES ('37', 'Bootstrap', '9');
INSERT INTO `miuu_categoryart` VALUES ('38', 'Ajax', '9');
INSERT INTO `miuu_categoryart` VALUES ('39', 'EasyUI', '9');
INSERT INTO `miuu_categoryart` VALUES ('40', 'Ext JS', '9');
INSERT INTO `miuu_categoryart` VALUES ('41', 'AngularJS', '9');
INSERT INTO `miuu_categoryart` VALUES ('42', 'ReactJS', '9');
INSERT INTO `miuu_categoryart` VALUES ('43', 'sublime Text', '10');
INSERT INTO `miuu_categoryart` VALUES ('44', 'Dreamweaver', '10');
INSERT INTO `miuu_categoryart` VALUES ('45', 'Notepad++', '10');
INSERT INTO `miuu_categoryart` VALUES ('46', 'sass/compass', '10');
INSERT INTO `miuu_categoryart` VALUES ('47', 'PHP基础', '11');
INSERT INTO `miuu_categoryart` VALUES ('48', 'ThinkPHP', '11');
INSERT INTO `miuu_categoryart` VALUES ('49', 'CodeIgniter', '11');
INSERT INTO `miuu_categoryart` VALUES ('50', 'Node.js基础', '12');
INSERT INTO `miuu_categoryart` VALUES ('51', 'express', '12');
INSERT INTO `miuu_categoryart` VALUES ('52', 'Meteor', '12');
INSERT INTO `miuu_categoryart` VALUES ('53', 'Hexo', '12');
INSERT INTO `miuu_categoryart` VALUES ('54', 'Java Web', '14');
INSERT INTO `miuu_categoryart` VALUES ('55', '基础知识', '13');
INSERT INTO `miuu_categoryart` VALUES ('56', '命令行', '13');
INSERT INTO `miuu_categoryart` VALUES ('57', 'MySQL', '18');
INSERT INTO `miuu_categoryart` VALUES ('58', 'SQL Server', '18');
INSERT INTO `miuu_categoryart` VALUES ('59', 'MongoDB', '19');
INSERT INTO `miuu_categoryart` VALUES ('60', '云计算', '4');
INSERT INTO `miuu_categoryart` VALUES ('61', '大数据', '4');
INSERT INTO `miuu_categoryart` VALUES ('62', '信息检索', '61');
INSERT INTO `miuu_categoryart` VALUES ('63', '数据分析', '61');
INSERT INTO `miuu_categoryart` VALUES ('64', 'CloudStack', '60');
INSERT INTO `miuu_categoryart` VALUES ('65', 'Git/Github', '21');
INSERT INTO `miuu_categoryart` VALUES ('66', 'SVN', '21');
INSERT INTO `miuu_categoryart` VALUES ('67', 'VI', '21');
INSERT INTO `miuu_categoryart` VALUES ('68', '计算机组成原理', '22');
INSERT INTO `miuu_categoryart` VALUES ('69', '网络工程', '22');
INSERT INTO `miuu_categoryart` VALUES ('71', '常用技能', '8');
INSERT INTO `miuu_categoryart` VALUES ('72', '云储存', '60');

-- ----------------------------
-- Table structure for miuu_categorynavs
-- ----------------------------
DROP TABLE IF EXISTS `miuu_categorynavs`;
CREATE TABLE `miuu_categorynavs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_categorynavs
-- ----------------------------
INSERT INTO `miuu_categorynavs` VALUES ('1', '开发', '0');
INSERT INTO `miuu_categorynavs` VALUES ('2', '学习', '0');
INSERT INTO `miuu_categorynavs` VALUES ('3', '源代码', '0');
INSERT INTO `miuu_categorynavs` VALUES ('4', '框架', '0');
INSERT INTO `miuu_categorynavs` VALUES ('5', '工具', '0');
INSERT INTO `miuu_categorynavs` VALUES ('6', '框架', '0');
INSERT INTO `miuu_categorynavs` VALUES ('7', '素材', '0');
INSERT INTO `miuu_categorynavs` VALUES ('8', '图标', '0');
INSERT INTO `miuu_categorynavs` VALUES ('9', '软件', '0');
INSERT INTO `miuu_categorynavs` VALUES ('10', '博文', '0');

-- ----------------------------
-- Table structure for miuu_categorynews
-- ----------------------------
DROP TABLE IF EXISTS `miuu_categorynews`;
CREATE TABLE `miuu_categorynews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_categorynews
-- ----------------------------
INSERT INTO `miuu_categorynews` VALUES ('1', '移动互联网', '0');
INSERT INTO `miuu_categorynews` VALUES ('2', '电子商务', '0');
INSERT INTO `miuu_categorynews` VALUES ('3', '互联网', '0');
INSERT INTO `miuu_categorynews` VALUES ('4', '网络营销', '0');
INSERT INTO `miuu_categorynews` VALUES ('5', '网络游戏', '0');
INSERT INTO `miuu_categorynews` VALUES ('6', '数据研究', '0');
INSERT INTO `miuu_categorynews` VALUES ('7', '自主创业', '0');
INSERT INTO `miuu_categorynews` VALUES ('8', '还有谁', '1');

-- ----------------------------
-- Table structure for miuu_categorynote
-- ----------------------------
DROP TABLE IF EXISTS `miuu_categorynote`;
CREATE TABLE `miuu_categorynote` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '分类名',
  `pid` int(10) unsigned NOT NULL COMMENT '父分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_categorynote
-- ----------------------------
INSERT INTO `miuu_categorynote` VALUES ('1', '陈年往事', '0');
INSERT INTO `miuu_categorynote` VALUES ('2', '读书笔记', '0');
INSERT INTO `miuu_categorynote` VALUES ('3', '琐事日志', '0');
INSERT INTO `miuu_categorynote` VALUES ('11', '如此邂逅', '1');

-- ----------------------------
-- Table structure for miuu_essay
-- ----------------------------
DROP TABLE IF EXISTS `miuu_essay`;
CREATE TABLE `miuu_essay` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sn` varchar(10) NOT NULL COMMENT '编号',
  `name` varchar(100) NOT NULL COMMENT '小品名',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `author` varchar(30) NOT NULL COMMENT '作者',
  `content` text NOT NULL COMMENT '博客详情',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  `source` varchar(30) NOT NULL COMMENT '来源出处',
  `url` varchar(255) NOT NULL COMMENT '来源链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_essay
-- ----------------------------
INSERT INTO `miuu_essay` VALUES ('1', '1', '工欲善其事，必先利其器', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('2', '1', '3', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '刚才看了一段视频，讲的是一个上了年纪的老艺人独自在外漂泊，靠表演维持生计。老人满头银发，提着一把二胡，拖着一个音响，虽然辛苦，但绝不落魄，一身的气质让人不觉得他是一个流离的艺人，而是某位成就不凡的艺术家。看着老人辛苦的表演和微薄的回报，不禁想到一句话：人生在世，游离与悲。\r\n    \r\n　　从古代以来，独自一人背井离乡，游离天涯都不是一件轻松快乐的事，背后总有或这或那的辛酸和悲伤。中国人骨子里有着几千年安土重迁的情怀，谁会喜欢如同无根浮萍，流浪天涯？这么想着，我知道这位老人背后一定有一段故事。\r\n    \r\n　　此时此刻，我在这样一个时间，这样一个地点看着他，不知道他现在又漂到了哪里？也许正为了下一顿饭辛苦表演着，也许正在某个城市的角落里面踽踽独行，也许正面对一个十字路口，不知何去何从......', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('3', '1', '4', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('4', '1', '5', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('5', '1', '6', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('6', '1', '8', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('7', '1', '工欲善其事，必先利其器', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('8', '1', '3', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('9', '1', '4', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('10', '1', '7', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('11', '1', '9', '', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /><img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477302631.png\" title=\"1477302631.png\" alt=\"3.png\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('13', '1', '5', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('14', '1', '6', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('15', '1', '8', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('17', '1', '7', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('18', '1', '9', '', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /><img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477302631.png\" title=\"1477302631.png\" alt=\"3.png\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('19', '1', '2', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('25', '111', 'yu', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477302903_889264412.png', 'yes', 'no', '2016-10-24 17:55:03', 'yu', '<p>yu<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477302900.png\" title=\"1477302900.png\" alt=\"1.png\" /></p>', 'no', 'ssss', '111');
INSERT INTO `miuu_essay` VALUES ('31', '1', '工欲善其事，必先利其器', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('32', '1', '3', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('33', '1', '4', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('39', '1', '2', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'no', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_essay` VALUES ('40', '111', 'yu', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477302903_889264412.png', 'yes', 'no', '2016-10-24 17:55:03', 'yu', '刚才看了一段视频，讲的是一个上了年纪的老艺人独自在外漂泊，靠表演维持生计。老人满头银发，提着一把二胡，拖着一个音响，虽然辛苦，但绝不落魄，一身的气质让人不觉得他是一个流离的艺人，而是某位成就不凡的艺术家。看着老人辛苦的表演和微薄的回报，不禁想到一句话：人生在世，游离与悲。\r\n    \r\n　　从古代以来，独自一人背井离乡，游离天涯都不是一件轻松快乐的事，背后总有或这或那的辛酸和悲伤。中国人骨子里有着几千年安土重迁的情怀，谁会喜欢如同无根浮萍，流浪天涯？这么想着，我知道这位老人背后一定有一段故事。\r\n    \r\n刚才看了一段视频，讲的是一个上了年纪的老艺人独自在外漂泊，靠表演维持生计。老人满头银发，提着一把二胡，拖着一个音响，虽然辛苦，但绝不落魄，一身的气质让人不觉得他是一个流离的艺人，而是某位成就不凡的艺术家。看着老人辛苦的表演和微薄的回报，不禁想到一句话：人生在世，游离与悲。\r\n    \r\n　　从古代以来，独自一人背井离乡，游离天涯都不是一件轻松快乐的事，背后总有或这或那的辛酸和悲伤。中国人骨子里有着几千年安土重迁的情怀，谁会喜欢如同无根浮萍，流浪天涯？这么想着，我知道这位老人背后一定有一段故事。\r\n    \r\n　　此时此刻，我在这样一个时间，这样一个地点看着他，不知道他现在又漂到了哪里？也许正为了下一顿饭辛苦表演着，也许正在某个城市的角落里面踽踽独行，也许正面对一个十字路口，不知何去何从......\r\n   \r\n　　老人独行在自己的路上，唯有二胡作伴，寂寥的音符颤动着心灵深处的旋律，他是孤独的，也是幸福的，至少，他还能再自己路上坚定地走下去。而我们呢？我们又何尝不是独行在自己的路上？甚至好多人看不清前进的路，远方的一切都是那么缥缈，虚幻。于是只好在人世中浮浮沉沉，随波逐流。\r\n    \r\n　　有时候我们发现，自己的身边不知道什么时候出现了一些人，孤寂的感觉好像一下就没了，我们找到了一个寄托。亲人，朋友，他们陪着我们一起走下去。但是，他人的陪伴终究只是一时的，就像两条铁轨，彼此重合一部分后，总会有一个岔路口。不管你愿意不愿意，最终还是会分开，这不随着人的意志而改变。 寂静的夜里，每当独自惊醒的时候，就算身边睡了一个谁，可还是没人能够走进内心，明白那万千言语难明的忧伤与哀愁。喧闹的人群中，那忽然袭来的寂寞，打的人猝不及防。可能手中牵着另一个人的手，但手毕竟不是心，手的距离相对于心的距离来说，就是咫尺天涯。', 'no', 'ssss', '111');

-- ----------------------------
-- Table structure for miuu_goods
-- ----------------------------
DROP TABLE IF EXISTS `miuu_goods`;
CREATE TABLE `miuu_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '商品编号',
  `name` varchar(100) NOT NULL COMMENT '商品名',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `stock` int(10) unsigned NOT NULL COMMENT '库存量',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `desc` text NOT NULL COMMENT '商品描述',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_goods
-- ----------------------------
INSERT INTO `miuu_goods` VALUES ('1', '0', '12', 'HTML+CSS+JavaScript网页制作案例教程', '100.00', '10', '2016-06/05/5753df08787e0.jpg', 'yes', 'yes', '2016-03-23 16:39:16', '<p>不知道<img src=\"http://localhost/shop/Public/Uploads/desc/2016-03/23/14587223518408.jpeg\" alt=\"14587223518408.jpeg\" /></p>', 'no');
INSERT INTO `miuu_goods` VALUES ('3', '0', '111', 'Java基础入门', '111.00', '11', '2016-06/05/5753df08787e0.jpg', 'yes', 'yes', '2016-06-05 16:12:56', '', 'no');
INSERT INTO `miuu_goods` VALUES ('4', '0', '11', 'wwww', '234.00', '12', '2016-06/05/5753dfc7c8117.jpg', 'yes', 'yes', '2016-06-05 16:16:07', '', 'no');
INSERT INTO `miuu_goods` VALUES ('5', '2', '11', 'sss', '11.00', '11', '2016-06/05/5753dff264cf3.png', 'yes', 'yes', '2016-06-05 16:16:50', '', 'no');
INSERT INTO `miuu_goods` VALUES ('6', '0', '111', '11111111', '11.00', '11', '2016-06/05/5753e00f91e50.jpg', 'yes', 'yes', '2016-06-05 16:17:19', '', 'no');
INSERT INTO `miuu_goods` VALUES ('7', '0', '123', '123', '123.00', '123', '2016-06/05/5753e03478c67.jpg', 'yes', 'yes', '2016-06-05 16:17:56', '', 'no');
INSERT INTO `miuu_goods` VALUES ('8', '0', '222', '222', '222.00', '222', '2016-06/05/5753e04b28c50.jpg', 'yes', 'yes', '2016-06-05 16:18:19', '', 'no');
INSERT INTO `miuu_goods` VALUES ('9', '0', '333', '333', '333.00', '333', '2016-06/05/5753e06990774.jpg', 'yes', 'yes', '2016-06-05 16:18:49', '', 'no');
INSERT INTO `miuu_goods` VALUES ('10', '0', '444', '444', '444.00', '442', '2016-06/05/5753e0876a8d7.jpg', 'yes', 'yes', '2016-06-05 16:19:19', '', 'no');

-- ----------------------------
-- Table structure for miuu_navs
-- ----------------------------
DROP TABLE IF EXISTS `miuu_navs`;
CREATE TABLE `miuu_navs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `name` varchar(100) NOT NULL COMMENT '导航名称',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `desc` text NOT NULL COMMENT '导航简述',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  `url` varchar(255) NOT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_navs
-- ----------------------------
INSERT INTO `miuu_navs` VALUES ('1', '1', '学习网', 'yes', '2016-03-23 16:39:16', '<p>不知道<img src=\"http://localhost/shop/Public/Uploads/desc/2016-03/23/14587223518408.jpeg\" alt=\"14587223518408.jpeg\" /></p>', 'no', 'http:www.baidu.com');
INSERT INTO `miuu_navs` VALUES ('3', '1', '入门网', 'yes', '2016-06-05 16:12:56', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('4', '1', '百度网', 'no', '2016-06-05 16:16:07', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('5', '1', '学习网', 'yes', '2016-06-05 16:16:50', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('6', '1', '东方网', 'yes', '2016-06-05 16:17:19', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('7', '3', '动画网', 'yes', '2016-06-05 16:17:56', '1111', 'no', '');
INSERT INTO `miuu_navs` VALUES ('8', '1', '222网', 'no', '2016-06-05 16:18:19', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('9', '1', '333网', 'no', '2016-06-05 16:18:49', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('10', '3', '444网', 'yes', '2016-06-05 16:19:19', '', 'yes', '');
INSERT INTO `miuu_navs` VALUES ('11', '11', '还有什网', 'yes', '2016-06-05 16:19:55', '<p>11111111111111111111111111111111111111111</p>', 'no', '');
INSERT INTO `miuu_navs` VALUES ('12', '3', '1111网', 'yes', '2016-10-14 18:01:57', '', 'no', '');
INSERT INTO `miuu_navs` VALUES ('13', '11', '222网', 'yes', '2016-10-14 22:50:39', '2222222222222222', 'no', '');
INSERT INTO `miuu_navs` VALUES ('14', '11', '22网', 'yes', '2016-10-14 22:52:45', '2222222222222222', 'no', '');
INSERT INTO `miuu_navs` VALUES ('15', '2', '通栏网', 'yes', '2016-10-14 22:53:05', '111111111111111111111111111111', 'no', '111');
INSERT INTO `miuu_navs` VALUES ('16', '3', '11网', 'yes', '2016-10-14 22:55:44', '11111', 'no', '1111');
INSERT INTO `miuu_navs` VALUES ('17', '5', '00网', 'yes', '2016-10-14 22:55:57', 'asfdasfas', 'no', 'www.baidu.om');
INSERT INTO `miuu_navs` VALUES ('18', '11', '00网', 'no', '2016-10-14 22:59:19', '0000000000000000000000000000', 'yes', '');
INSERT INTO `miuu_navs` VALUES ('19', '2', '1网', 'no', '2016-10-14 22:59:28', '1', 'yes', '');
INSERT INTO `miuu_navs` VALUES ('20', '2', '1网', 'yes', '2016-10-14 23:00:19', '1', 'no', 'http:www.baidu.com');
INSERT INTO `miuu_navs` VALUES ('21', '1', '2网', 'yes', '2016-10-14 23:01:15', '2', 'no', 'http:www.baidu.com');
INSERT INTO `miuu_navs` VALUES ('22', '4', '111网', 'no', '2016-10-22 21:49:56', '&lt;img src=&quot;{$notes.thumb}&quot;&gt;', 'no', '&lt;img src=&quot;{$notes.thumb}&quot;&gt;');

-- ----------------------------
-- Table structure for miuu_news
-- ----------------------------
DROP TABLE IF EXISTS `miuu_news`;
CREATE TABLE `miuu_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '商品编号',
  `name` varchar(100) NOT NULL COMMENT '商品名',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `desc` text NOT NULL COMMENT '博客摘要',
  `content` text NOT NULL COMMENT '博客详情',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  `source` varchar(30) NOT NULL COMMENT '来源出处',
  `url` varchar(255) NOT NULL COMMENT '来源链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_news
-- ----------------------------
INSERT INTO `miuu_news` VALUES ('1', '1', '1', '1', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('2', '1', '1', '3', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('3', '2', '1', '4', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('4', '5', '1', '5', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('5', '7', '1', '6', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('6', '9', '1', '8', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('7', '7', '1', '60', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('8', '9', '1', '80', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('9', '9', '1', '70', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('10', '9', '1', '创意实用的折叠飞机 可海上降落起也可飞陆地拖着走', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('11', '9', '1', '9', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('12', '9', '1', 'Pill Clip爱心提醒药片—让你爱的人知道你的爱意', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');
INSERT INTO `miuu_news` VALUES ('39', '1', '1', '2', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144108_1298265398.jpg', 'yes', 'yes', '2016-10-22 10:52:51', '1111111111', '<p>111111111111<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477144103.jpg\" title=\"1477144103.jpg\" alt=\"g2.jpg\" /></p>', 'no', '1', '111111');

-- ----------------------------
-- Table structure for miuu_notes
-- ----------------------------
DROP TABLE IF EXISTS `miuu_notes`;
CREATE TABLE `miuu_notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '商品编号',
  `name` varchar(100) NOT NULL COMMENT '商品名',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `on_sale` enum('yes','no') NOT NULL COMMENT '是否上架',
  `recommend` enum('yes','no') NOT NULL COMMENT '是否推荐',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `desc` text NOT NULL COMMENT '博客摘要',
  `content` text NOT NULL COMMENT '博客详情',
  `recycle` enum('yes','no') NOT NULL COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_notes
-- ----------------------------
INSERT INTO `miuu_notes` VALUES ('1', '2', '12', 'HTML+CSS+JavaScript网页制作案例教程', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477386026_1301220086.png', 'no', 'yes', '2016-03-23 16:39:16', '&lt;p&gt;不知道&lt;img src=', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">历经沧桑，才知生活的美丽。淡然于心，方懂世界之宽广。千回百转，兜兜转转，繁华尽处是平淡，铅华洗却是寻常。千千结，结千千，不可语，不可言</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('3', '2', '111', 'Java基础入门', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477386069_1621430975.png', 'yes', 'yes', '2016-06-05 16:12:56', '1111', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">有很多人，如流星般划过，能够点亮心空的，只是最亮的那一颗；有很多事，如雨点般滴落，雨季里盘踞在心头的，依然是那颗挥之不去的星星这颗星，未必与众不同，未必熠熠生辉，但在你的眼里，他就是那么的美好，那么的毫无瑕疵遇到能够相爱的人，是一件奢侈的事情，值得我们用一生去温暖和珍惜。</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('4', '1', '11', 'wwww', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477386108_265444286.png', 'no', 'yes', '2016-06-05 16:16:07', '情缘之路，我们缝缝补补，', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">情缘之路，我们缝缝补补，才知道谁是陌路殊途，谁是命里珍珠；朋友之手，我们聚聚散散，才明白谁是一时好感，谁是一生相伴。一路走来，陪你笑的人，不一定能陪你哭；但陪你笑又陪你哭的人， 一定不要辜负。真正的朋友，不会因为落魄而看轻你；真正的感情，不会因为平淡而离弃你。</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('5', '3', '11', 'sss', '', 'yes', 'no', '2016-06-05 16:16:50', '', '', 'no');
INSERT INTO `miuu_notes` VALUES ('6', '3', '111', '11111111', '', 'no', 'yes', '2016-06-05 16:17:19', '', '', 'no');
INSERT INTO `miuu_notes` VALUES ('7', '3', '123', '123', '', 'yes', 'no', '2016-06-05 16:17:56', '', '', 'no');
INSERT INTO `miuu_notes` VALUES ('8', '1', '222', '222', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477386148_1096784797.jpg', 'yes', 'yes', '2016-06-05 16:18:19', '人生，该显的要显', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">人生，该显的要显，该藏的要藏，是一种境界。常与高人交往，闲与雅人相会，乐与亲人分享。路是一步一步走出来的，情是一点一点换回来的，人生也是这样一页一页真实翻过来的。</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('9', '1', '333', '333', '', 'yes', 'no', '2016-06-05 16:18:49', '', '', 'no');
INSERT INTO `miuu_notes` VALUES ('10', '3', '444', '444', '', 'yes', 'yes', '2016-06-05 16:19:19', '', '', 'yes');
INSERT INTO `miuu_notes` VALUES ('11', '11', '555', '还有什么', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477386192_1678475585.jpg', 'yes', 'yes', '2016-06-05 16:19:55', '他是一个成熟的男人', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">他是一个成熟的男人，会在你需要的时候，给你留出足够的个人空间。同时他又是一个可爱的大男生，装乖耍帅卖萌换不停风格。</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('12', '3', '13213', '1111111111112213213213', '', 'no', 'yes', '2016-10-14 18:01:57', '', '', 'no');
INSERT INTO `miuu_notes` VALUES ('13', '11', '22222222', '222222222222222222', '', 'yes', 'yes', '2016-10-14 22:50:39', '2222222222222222', '<p><span style=\"font-family:\'Microsoft YaHei\', \'微软雅黑\';background-color:rgb(255,255,255);\">失望总是难以避免的，于是再去相信就很难。对他人投入，换不来等量的关心，但都比不过对自己失望。你要把心思放在值得的人身上，把故事说给懂的人听，把时间多留给自己。</span></p>', 'no');
INSERT INTO `miuu_notes` VALUES ('14', '11', '22222222', '222222222222222222', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477385889_569514597.jpg', 'yes', 'yes', '2016-10-14 22:52:45', '2222222222222222', '', 'no');
INSERT INTO `miuu_notes` VALUES ('15', '11', '1111111111', '11111111', '', 'yes', 'no', '2016-10-14 22:53:05', '111111111111111111111111111111', '', 'no');
INSERT INTO `miuu_notes` VALUES ('16', '11', '1111111111', '11111111', '', 'yes', 'no', '2016-10-14 22:55:44', '', '<p>请在此处输入商品详情。</p>', 'no');
INSERT INTO `miuu_notes` VALUES ('17', '11', '00000', '000000', '', 'yes', 'no', '2016-10-14 22:55:57', '', '<p>0000000000000000000000000000000</p>', 'no');
INSERT INTO `miuu_notes` VALUES ('18', '11', '00000', '000000', '', 'yes', 'no', '2016-10-14 22:59:19', '0000000000000000000000000000', '<p>0000000000000000000000000000000</p>', 'no');
INSERT INTO `miuu_notes` VALUES ('19', '2', '1', '1', '', 'yes', 'no', '2016-10-14 22:59:28', '1', '<p>1</p>', 'no');
INSERT INTO `miuu_notes` VALUES ('20', '2', '1', '1', '', 'yes', 'no', '2016-10-14 23:00:19', '1', '<p>1</p>', 'yes');
INSERT INTO `miuu_notes` VALUES ('21', '1', '2', '2', 'http://7xsqlc.com1.z0.glb.clouddn.com/1477144068_317324668.jpg', 'yes', 'no', '2016-10-14 23:01:15', '2', '<p>2222222222222222222222222<img src=\"http://7xsqlc.com1.z0.glb.clouddn.com/1477143900.jpg\" title=\"1477143900.jpg\" alt=\"pic-3.jpg\" /></p>', 'no');

-- ----------------------------
-- Table structure for miuu_order
-- ----------------------------
DROP TABLE IF EXISTS `miuu_order`;
CREATE TABLE `miuu_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT '购买者用户ID',
  `goods` text NOT NULL COMMENT '商品信息',
  `address` text NOT NULL COMMENT '收件人信息',
  `price` decimal(10,2) NOT NULL COMMENT '订单价格',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '下单时间',
  `cancel` enum('yes','no') NOT NULL COMMENT '是否取消',
  `payment` enum('yes','no') NOT NULL COMMENT '是否支付',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_order
-- ----------------------------
INSERT INTO `miuu_order` VALUES ('2', '4', 'a:2:{i:0;a:4:{s:2:\"id\";i:10;s:3:\"num\";i:1;s:4:\"name\";s:3:\"444\";s:5:\"price\";s:6:\"444.00\";}i:1;a:4:{s:2:\"id\";i:11;s:3:\"num\";i:1;s:4:\"name\";s:3:\"555\";s:5:\"price\";s:6:\"555.00\";}}', 'a:3:{s:9:\"consignee\";s:6:\"于忠\";s:7:\"address\";s:33:\"天津,和平区,,打发打发的\";s:5:\"phone\";s:11:\"15902153253\";}', '999.00', '2016-06-06 22:18:46', 'no', 'no');
INSERT INTO `miuu_order` VALUES ('3', '4', 'a:1:{i:0;a:4:{s:2:\"id\";i:10;s:3:\"num\";i:1;s:4:\"name\";s:3:\"444\";s:5:\"price\";s:6:\"444.00\";}}', 'a:3:{s:9:\"consignee\";s:6:\"于忠\";s:7:\"address\";s:33:\"天津,和平区,,打发打发的\";s:5:\"phone\";s:11:\"15902153253\";}', '444.00', '2016-06-06 22:31:06', 'no', 'no');
INSERT INTO `miuu_order` VALUES ('4', '4', 'a:1:{i:0;a:4:{s:2:\"id\";i:11;s:3:\"num\";i:1;s:4:\"name\";s:3:\"555\";s:5:\"price\";s:6:\"555.00\";}}', 'a:3:{s:9:\"consignee\";s:6:\"于忠\";s:7:\"address\";s:33:\"天津,和平区,,打发打发的\";s:5:\"phone\";s:11:\"15902153253\";}', '555.00', '2016-06-06 22:31:16', 'no', 'no');
INSERT INTO `miuu_order` VALUES ('5', '4', 'a:1:{i:0;a:4:{s:2:\"id\";i:11;s:3:\"num\";i:14;s:4:\"name\";s:3:\"555\";s:5:\"price\";s:6:\"555.00\";}}', 'a:3:{s:9:\"consignee\";s:6:\"于忠\";s:7:\"address\";s:33:\"天津,和平区,,打发打发的\";s:5:\"phone\";s:11:\"15902153253\";}', '7770.00', '2016-06-06 22:32:55', 'no', 'no');

-- ----------------------------
-- Table structure for miuu_shopcart
-- ----------------------------
DROP TABLE IF EXISTS `miuu_shopcart`;
CREATE TABLE `miuu_shopcart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT '购买者ID',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '加入购物车时间',
  `goods_id` int(10) unsigned NOT NULL COMMENT '购买商品ID',
  `num` tinyint(3) unsigned NOT NULL COMMENT '购买商品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_shopcart
-- ----------------------------
INSERT INTO `miuu_shopcart` VALUES ('1', '2', '2016-03-23 16:46:01', '1', '6');
INSERT INTO `miuu_shopcart` VALUES ('2', '4', '2016-06-18 01:15:48', '11', '1');

-- ----------------------------
-- Table structure for miuu_skills
-- ----------------------------
DROP TABLE IF EXISTS `miuu_skills`;
CREATE TABLE `miuu_skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '所属分类ID',
  `sn` varchar(10) NOT NULL COMMENT '文章编号',
  `name` varchar(255) NOT NULL COMMENT '文章标题',
  `content` text NOT NULL COMMENT '文章内容',
  `thumb` varchar(150) NOT NULL COMMENT '预览图',
  `author` varchar(255) NOT NULL COMMENT '作者',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `keywords` char(40) NOT NULL COMMENT '标签',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_skills
-- ----------------------------
INSERT INTO `miuu_skills` VALUES ('1', '2', '1', 'javascript判断登录与否并确定跳转页面的方法', 'aorooms博客，是Aaron个人技术博客，主要记录和总结前端工作中常用的知识及我的生活。 订阅博客文章，请关注下方微信号，后期会通过订阅号将文章发送到您的手机上。 本博客所有内容若需转载请联系我。', '', 'yuyu', '2016-04-07 11:05:11', 'js,跳转');
INSERT INTO `miuu_skills` VALUES ('30', '2', '1', 'js复制粘贴事件，获取剪切板数据（未做兼容，只支持webkit）', '<pre class=\"brush:html;toolbar:false\">&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;title&gt;JS复制粘贴事件&lt;/title&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;input type=\"text\" id=\"text\" /&gt;\r\n&lt;input type=\"button\" id=\"btn\" value=\"复制\" /&gt;\r\n&lt;/body&gt;\r\n&lt;script type=\"text/javascript\"&gt;\r\n//获取粘贴数据\r\ndocument.getElementById(\'text\').onpaste = function (e) {\r\ne.preventDefault(); //可以阻止默认粘贴\r\nvar text = (e.originalEvent || e).clipboardData.getData(\'text/plain\');\r\nconsole.log(text);\r\n}\r\n//获取复制数据\r\ndocument.getElementById(\'text\').oncopy = function () {\r\nvar text;\r\nif (window.getSelection) {\r\ntext = window.getSelection().toString();\r\n} else if (document.selection &amp;&amp; document.selection.createRange) {\r\ntext = document.selection.createRange().text;\r\n}\r\nconsole.log(text);\r\nalert(\'复制成功，请到需要的地方粘贴\');\r\n}\r\n//点击复制按钮事件，想要兼容性好的可以搜索ZeroClipboard，利用swf的方法复制\r\ndocument.getElementById(\'btn\').onclick = function () {\r\ndocument.getElementById(\'text\').select();\r\nalert(\'请按CTRL+C或者鼠标右键复制\');\r\n}\r\n&lt;/script&gt;&lt;/html&gt;</pre><p><br /></p>', '', '零度逍遥', '2016-04-11 10:03:03', 'js,跳转');
INSERT INTO `miuu_skills` VALUES ('33', '3', '3', '使用forever进行node服务器的不间断运行', '<p>使用node架设服务器的时候，当我们关闭服务窗口，node就会中断，，那么，怎么让服务一直存在呢，node有一个很好的模块可以完成这个工作，forever。</p><p>下面记录一些关于forever模块的一些用法：</p><p>使用forever运行nodejs应用<br />何为forever<br />forever可以看做是一个nodejs的守护进程，能够启动，停止，重启我们的app应用。</p><p>官方的说明是说：<br />A simple CLI tool for ensuring that a given script runs continuously (i.e. forever).<br />// 一个用来持续（或者说永远）运行一个给定脚本的简单的命令行工具</p><p>Github地址：https://github.com/nodejitsu/forever<br />用途</p><p>forever的用途就是帮我们更好的管理我们node App服务，本质上就是在forever进程之下，创建一个node app的子进程。</p><p>比如，你有一个基于express的或者其他的一些个应用那么，它将会很方便你更新和操作你的服务，并且保证你服务能持续运行。</p><p>更好的一点就是每次更改文件，它都可以帮你自动重启服务而不需要手动重启。<br />安装forever</p><p>// 记得加-g，forever要求安装到全局环境下<br />sudo npm install forever -g</p><p>forever使用说明<br />启动相关</p><p>// 1. 简单的启动<br />forever start app.js</p><p>// 2. 指定forever信息输出文件，当然，默认它会放到~/.forever/forever.log<br />forever start -l forever.log app.js</p><p>// 3. 指定app.js中的日志信息和错误日志输出文件，<br />//  -o 就是console.log输出的信息，-e 就是console.error输出的信息<br />forever start -o out.log -e err.log app.js</p><p>// 4. 追加日志，forever默认是不能覆盖上次的启动日志，<br />//  所以如果第二次启动不加-a，则会不让运行<br />forever start -l forever.log -a app.js</p><p>// 5. 监听当前文件夹下的所有文件改动<br />forever start -w app.js</p><p>文件改动监听并自动重启</p><p>// 1. 监听当前文件夹下的所有文件改动（不太建议这样）<br />forever start -w app.js</p><p>显示所有运行的服务</p><p>forever list</p><p>停止操作</p><p>// 1. 停止所有运行的node App<br />forever stopall</p><p>// 2. 停止其中一个node App<br />forever stop app.js<br />// 当然还可以这样<br />// forever list 找到对应的id，然后：<br />forever stop [id]</p><p>重启操作</p><p>重启操作跟停止操作保持一致。</p><p>// 1. 启动所有<br />forever restartall</p><p>更多一些</p><p>上面的一些解释足够平常使用，还有待之后继续补充。<br />开发和线上建议配置</p><p>// 开发环境下<br />NODE_ENV=development forever start -l forever.log -e err.log -a app.js<br />// 线上环境下<br />NODE_ENV=production forever start -l ~/.forever/forever.log -e ~/.forever/err.log -w -a app.js</p><p>上面加上NODE_ENV为了让app.js辨认当前是什么环境用的。不加它可能就不知道哦？<br />一些注意点</p><p>有可能你需要使用unix下的crontab（定时任务）</p><p>这个时候需要注意配置好环境变量。</p><p>SHELL=/bin/sh<br />PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin</p><p><br /></p>', '2016-04/11/570b1cba9860e.jpeg', '零度逍遥', '2016-04-11 11:40:42', 'js,跳转');
INSERT INTO `miuu_skills` VALUES ('35', '4', '2016411', '更为方便的字符串截断+省略号：subtext()', '<p style=\"white-space:normal;\">更为简化的调用，并且更少的判断，更快的速度。<br style=\"color:rgb(50,50,50);font-family:\'Century Gothic\', \'Microsoft yahei\';line-height:28.8px;background-color:rgb(255,255,255);\" />ThinkPHP 官方扩展的 msubstr 方法其实挺好的，但有以下几个问题：<br style=\"color:rgb(50,50,50);font-family:\'Century Gothic\', \'Microsoft yahei\';line-height:28.8px;background-color:rgb(255,255,255);\" />1，调用的时候会多次判断，包括2次判断是否自带了 mb_substr 和 iconv_substr 函数；<br style=\"color:rgb(50,50,50);font-family:\'Century Gothic\', \'Microsoft yahei\';line-height:28.8px;background-color:rgb(255,255,255);\" />2，无论是否超出长度，如果有 $suffix=true 都会追加省略号，这个不太合理；<br style=\"color:rgb(50,50,50);font-family:\'Century Gothic\', \'Microsoft yahei\';line-height:28.8px;background-color:rgb(255,255,255);\" /><br style=\"color:rgb(50,50,50);font-family:\'Century Gothic\', \'Microsoft yahei\';line-height:28.8px;background-color:rgb(255,255,255);\" />介于以上两点，并且在确保自己的服务器支持 mb_substr 函数、并且都是 utf-8 编码的情况下，我们其实可以自己在 Common/common.php（3.2 版本中为 function.php） 中自己添加一个 subtext 的函数，代码如下：</p><pre class=\"brush:php;toolbar:false\">function subtext($text, $length)\r\n{\r\n    if(mb_strlen($text, \'utf8\') &gt; $length) \r\n    return mb_substr($text, 0, $length, \'utf8\').\'...\';\r\n    return $text;\r\n}</pre><p style=\"white-space:normal;\">这样在模版中调用的话，只需要用 {$vo.title|subtext=10} 这样即可，同时实现了，如果没超出长度，则不追加省略号的效果。</p><p><br /></p>', '', '阿博', '2016-04-11 13:48:43', 'js,跳转');
INSERT INTO `miuu_skills` VALUES ('36', '7', '11', 'dddd', '<p>dfdfdffdfffdfdfdfdffd</p>', '', '111', '2016-04-12 09:53:46', '');
INSERT INTO `miuu_skills` VALUES ('37', '7', '11', 'dddd', '<p>请在此处输入文章内容。</p>', '', '111', '2016-04-12 09:55:58', '');
INSERT INTO `miuu_skills` VALUES ('38', '0', 'dffddf', 'dfdfdfdf', '<p>请在此处输入文章内容。</p>', '', 'dfdfdf', '2016-04-12 09:58:00', 'dfdf');

-- ----------------------------
-- Table structure for miuu_topic
-- ----------------------------
DROP TABLE IF EXISTS `miuu_topic`;
CREATE TABLE `miuu_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL COMMENT '微博分享内容',
  `add_time` int(10) NOT NULL COMMENT '发表时间',
  `user_id` int(10) NOT NULL COMMENT '发表用户ID',
  `thumb` varchar(200) NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=475 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_topic
-- ----------------------------
INSERT INTO `miuu_topic` VALUES ('11', '守时；\n写点日记，不要太依靠记忆；\n随时记录想到的灵感；\n把重要的观念、方法写下来，随时提示自己；\n走路比平时快30%，肢体语言健康有力，不懒散、萎靡；\n每天出门照镜子，给自己一个自信的微笑；\n每天自我反省一次；\n每天坚持一次运动；\n听心跳一分钟，在做重要的事情，疲劳时，紧张时，烦躁时……', '1458877293', '4', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('12', '微笑；\n用心倾听，不打断对方的话；\n说话有力，感觉自己的声音能产生感染力的磁场；\n说话之前，先考虑一下对方的感觉；\n节俭；\n时常运用“头脑风暴”，利用脑力激荡提升自己创新能力；\n恪守诚信；\n学会原谅。', '1458877334', '4', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('44', '过去的记忆。。。', '1459317593', '2', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('187', '一晚，同学非常神秘的对我说：今晚必须11点睡觉。我以为有什么说头，连忙问他，谁知他无比淡定的说：要不明天困[a_11]', '1459407295', '10', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('188', '男生、之所以总是高昂着头，不是因为高傲，而是因为倔强着不想让眼泪流下来。[d_46]', '1459407371', '10', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('189', '[a_65]往往在QQ聊的好疯的人，见了面通常不怎么说话。而在生活中一起疯的人，在QQ上基本不说话。', '1459407432', '5', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('190', '不要轻易暴露内心的脆弱，学会承受应该担当的一切；不要轻易述说生活的狼狈，学会面对杂乱无序的现实；不要轻易虚度每一天的光阴，因为那都是你余生中的第一天；不要轻易向世界妥协，它让你哭，你要在坚持中让自己笑。只要我们能承担、不逃避、会珍惜、心坚强，人生就不会太苍白。', '1459407480', '5', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('191', '所有的“我开玩笑的”,都一定带着一点点认真；所有的“我不懂”,其实还是有一点懂；每一次“我不在乎”,背后都有一点点在乎，每一次“我没事”,背后都还是有那么一点伤痛。[a_68][a_67]', '1459407552', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('192', '开心便笑，伤心便哭，这是人之本性。可我们都在倔强的颠覆本性。', '1459407630', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('193', '我来啦，看看你的网站[a_43][a_43]', '1459407766', '6', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('415', 'DFDF', '1459499909', '6', '');
INSERT INTO `miuu_topic` VALUES ('416', '有时候，莫名的心情不好，不想和任何人说话，只想一个人静静的发呆。有时候，夜深人静，突然觉得不是睡不着，而是固执地不想睡。有时候，听到一首歌，就会突然想起一个人。有时候，别人突然对你说，我觉得你变了，然后自己开始百感交集。丢了的自己，只能慢慢捡回来。[a_47]', '1459828787', '4', '');
INSERT INTO `miuu_topic` VALUES ('417', '[a_43]好东西都要在复习一遍才会明白，稍等会有个新的，等我十分钟可好？重要的话说三遍！！！', '1459832440', '4', '');
INSERT INTO `miuu_topic` VALUES ('437', '对方是范德萨发的顺丰到付', '1460094566', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('438', '33', '1460094848', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('439', '33', '1460094875', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('440', '大幅度的', '1460095690', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('441', '好吧，没有图片', '1460097753', '9', '1460097752_1492823653.jpg');
INSERT INTO `miuu_topic` VALUES ('469', '有时候，莫名的心情不好，不想和任何人说话，只想一个人静静的发呆。有时候，夜深人静，突然觉得不是睡不着，而是固执地不想睡。有时候，听到一首歌，就会突然想起一个人。有时候，别人突然对你说，我觉得你变了，然后自己开始百感交集。丢了的自己，只能慢慢捡回来', '1466076772', '4', '');
INSERT INTO `miuu_topic` VALUES ('470', '[a_60]', '1466079630', '4', '1466079627_618637077.png');
INSERT INTO `miuu_topic` VALUES ('471', 'dfdfdfdf', '1466080018', '4', '1466080016_923644090.jpg');
INSERT INTO `miuu_topic` VALUES ('472', 'fdsfdd', '1466080041', '4', '1466080033_1674628566.jpg');
INSERT INTO `miuu_topic` VALUES ('473', '过分过分过分过分', '1466081879', '4', '');
INSERT INTO `miuu_topic` VALUES ('474', '有时候，你的一句话可以让我回味几天。有时候，你的一句话也可以让我失望几天。这就是在乎。', '1466320297', '4', '1466320295_577360808.jpg');

-- ----------------------------
-- Table structure for miuu_user
-- ----------------------------
DROP TABLE IF EXISTS `miuu_user`;
CREATE TABLE `miuu_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '登录密码',
  `salt` char(6) NOT NULL COMMENT '密钥',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间',
  `phone` char(11) NOT NULL DEFAULT '' COMMENT '联系电话',
  `email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `consignee` varchar(20) NOT NULL DEFAULT '' COMMENT '收件人',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '收货地址',
  `face` varchar(200) NOT NULL COMMENT '用户头像',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of miuu_user
-- ----------------------------
INSERT INTO `miuu_user` VALUES ('4', '蜡笔小新', 'e8ed481537fab5352647eba67f6cf487', '90e406', '2016-03-25 10:30:01', '15902153253', '2211735722@qq.com', '于忠', '天津,和平区,,打发打发的', '');
INSERT INTO `miuu_user` VALUES ('5', '笶侕濄', '1c1825b60dbc5b4c51e449ed846777f7', '916b5e', '2016-03-31 14:50:17', '', '', '', '', '');
INSERT INTO `miuu_user` VALUES ('6', '无奈的选择', '048fb73f34d594a84d25f93e778087ae', '4360dc', '2016-03-31 14:51:16', '', '', '', '', '');
INSERT INTO `miuu_user` VALUES ('7', '仅冇旳姿态', '7928062542aae06767acdf260209d230', '9aa4cc', '2016-03-31 14:51:53', '', '', '', '', '');
INSERT INTO `miuu_user` VALUES ('8', '半夏微凉', '4e658f073b2cffa731c08a1990d3b2ae', '9c0362', '2016-03-31 14:52:41', '', '', '', '', '');
INSERT INTO `miuu_user` VALUES ('9', '偏执怪人', '422904f0bf725bf149f5fb5d99300bc7', '2a5372', '2016-03-31 14:53:06', '', '', '', '', '');
INSERT INTO `miuu_user` VALUES ('10', '铅笔的彩色天空', 'fc4e33abecaf92eb44306c8148e4fa58', '557931', '2016-03-31 14:53:41', '', '', '', '', '');
