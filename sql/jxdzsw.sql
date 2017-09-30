-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: jxdzsw
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0' COMMENT '所属公司id',
  `role` text COMMENT '角色',
  `username` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `nickname` char(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,0,'admin','111111','111111','kaka','','','2017-09-26 23:38:56','2017-09-26 23:38:56',0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '案例名称',
  `file` varchar(256) DEFAULT NULL COMMENT '案例图片',
  `url` varchar(256) DEFAULT NULL COMMENT '案例网址',
  `power` int(4) NOT NULL DEFAULT '1' COMMENT '权重',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  `type` varchar(64) DEFAULT NULL COMMENT '类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases`
--

LOCK TABLES `cases` WRITE;
/*!40000 ALTER TABLE `cases` DISABLE KEYS */;
INSERT INTO `cases` VALUES (1,'嘉兴市食品流通商会','/public/img/upload/20170927/327f0fc858f1ac83dff998d5bf85c9fd.jpg||201708281414349119.jpg','http://www.jxsplt.com',1,'2017-09-27 00:40:17','2017-09-27 00:40:17',0,'web'),(2,'嘉兴市公共交通协会','/public/img/upload/20170927/a96ea2bb10011328972101fe3c2177c6.jpg||201708281412596475.jpg','http://jxgj.org/index.asp',1,'2017-09-27 00:40:53','2017-09-27 00:40:53',0,'web'),(3,'浙江嘉兴三塔建材股份有限公司','/public/img/upload/20170927/44017a364ba0911ee8f6f7926ef5041c.jpg||20170828141120805.jpg','http://www.chinasanta.com',1,'2017-09-27 00:41:15','2017-09-27 00:41:15',0,'web'),(4,'嘉兴市安全培训有限公司','/public/img/upload/20170928/374141ec18dcc4d35cbcb349527b4955.jpg||201708281409451914.jpg','http://www.jxaqpx.com/index.asp',1,'2017-09-28 05:10:07','2017-09-28 05:10:07',0,'web'),(6,'深安净水器','/public/img/upload/20170930/34ed3cad8f802783af06d647acb3f9bc.jpg||201708241138511321.jpg','',1,'2017-09-30 09:13:39','2017-09-30 09:13:39',0,'small'),(7,'黑白论道','/public/img/upload/20170930/a6235a6b7e6add6efa00604fc283ea26.jpg||201708190941216877.jpg','',1,'2017-09-30 09:19:30','2017-09-30 09:19:30',0,'pubsite');
/*!40000 ALTER TABLE `cases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cases_category`
--

DROP TABLE IF EXISTS `cases_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cases_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '名称',
  `alias` varchar(32) NOT NULL COMMENT '代号',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cases_category`
--

LOCK TABLES `cases_category` WRITE;
/*!40000 ALTER TABLE `cases_category` DISABLE KEYS */;
INSERT INTO `cases_category` VALUES (1,'政企网站','web','2017-09-29 16:32:17','2017-09-29 16:32:17',0),(2,'小程序系统','small','2017-09-29 16:32:33','2017-09-29 16:32:33',0),(3,'微信公众号','pubsite','2017-09-29 16:32:45','2017-09-29 16:32:45',0);
/*!40000 ALTER TABLE `cases_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT '' COMMENT '列名',
  `value` text COMMENT '内容',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'名称：','嘉兴市电子商务服务中心（运营中心）','2017-09-29 13:59:59','2017-09-29 13:59:59',0),(2,'地址：','嘉兴市中环西路颐高广场2F ','2017-09-29 14:00:59','2017-09-29 14:00:59',0),(3,'联系人：','顾老师','2017-09-29 14:03:49','2017-09-29 14:03:49',0),(4,'电话：','18757379696    ','2017-09-29 14:04:01','2017-09-29 14:04:01',0),(5,'公司介绍：','嘉兴市电子商务服务中心（以下简称服务中心）于2004年6月1日正式登记成立，主管单位为嘉兴市经济和信息化委员会。服务中心的成立旨在为嘉兴市中小企业开展电子商务活动提供经常性专业','2017-09-29 14:11:35','2017-09-29 14:11:35',0),(6,'服务团队：','我公司工程技术部主要负责微信公众号、程序的编写、客户培训及客户整体方案策划。我们将根据您的设计要求及网上商务目标指定相应的网站建设计划，从网页设计直','2017-09-29 14:12:28','2017-09-29 14:12:28',0);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` varchar(16) DEFAULT '' COMMENT '手机',
  `email` varchar(64) DEFAULT '' COMMENT '邮箱',
  `content` text NOT NULL COMMENT '内容',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (3,'qwefqewf','asdfsdaf','asdfasdfadsf','2017-09-29 14:30:53','2017-09-29 14:30:53',0),(4,'adsfadsf','nihao','adfadsf','2017-09-30 09:58:09','2017-09-30 09:58:09',0);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `power` int(4) NOT NULL DEFAULT '1' COMMENT '权重',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,' 阿里巴巴公布私有化银泰商业交易建议谋划新零售','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">2017年1月10日，阿里巴巴集团控股有限公司(纽约证券交易所代码：BABA，“阿里巴巴集团”)全资子公司Alibaba Investment Limited(“阿里巴巴”)宣布，其联同银泰商业(集团)有限公司(香港交易所代码：1833)创始人沈国军的全资公司(合称“联合要约方”)，要求银泰董事会向其股东提呈有关通过协议安排私有化银泰的建议。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">阿里巴巴公布私有化银泰商业交易建议谋划新零售&nbsp;</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　根据建议，联合要约方将就每股计划股份支付10.00港元，较其最后60个交易日的平均收市价溢价约53.59%，较2016年12月28日停牌前最后交易日的收市价每股7.03港元溢价约42.25%。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　阿里巴巴集团首席执行官张勇表示﹕“中国零售行业的总规模已达到4.5万亿美元，并正以每年10.7%的速度增长。阿里巴巴集团正与线下零售商共同重构传统业态，创新用户消费体验，用实际行动拥抱新零售所带来的长期发展机遇。”</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　张勇认为，经济没有实体和虚拟之分，只有新旧之别。如果漠视机遇，那么就会不可避免被边缘甚至被淘汰。若能融合移动互联网、实时用户数据及科技的力量来提升运营效率，实体零售企业能够为消费者创造出全新的价值。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　银泰商业是中国领先的百货连锁企业，运营29家百货店及17个购物中心，主要位于中国一线及二线城市。银泰在阿里巴巴集团总部所在的浙江省发展尤为强劲。通过2014年7月的首次投资及2016年6月的可换股债券转股，阿里巴巴目前拥有银泰约28%权益。根据建议交易，阿里巴巴将成为银泰的控股股东，持股比例预计增至约74%。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　完成建议交易所需的最大现金金额约为198亿港元(约合177亿元人民币)，联合要约方正以内部现金资源或外部债务融资支付交易所需款项。此次建议交易待惯例完成条件达成后方可作实，包括获得银泰独立股东以及开曼群岛大法院的批准。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　此次建议交易，折射的是阿里巴巴集团以其庞大的消费者群体、丰富的大数据及技术帮助实体零售业转型的战略意图。随着移动互联网的应用发展，在线与线下消费体验的区隔已成为过去式。所谓“电子商务”，不再是端坐在家中的计算机前购物，如今的中国消费者可借助手机随时随地进行。移动互联网带来的巨大转变，让阿里巴巴集团能够与实体零售商携手合作，通过“会员通”整合在线以及线下的消费者数据，通过“服务通”优化消费者的购物体验，以及通过“货品通”来提升库存效率以至销售流转。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　截至2016年9月底，阿里巴巴集团旗下零售平台的商品交易额中78%来自移动端，9月份移动月度活跃用户数达到4.5亿。</p><p><br/></p>',1,'2017-09-26 23:46:10','2017-09-26 23:46:10',0),(2,'电商大数据建设 行业分化加剧','<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">【电商大数据建设 行业分化加剧】未来几年电商行业整体的移动端销售占比将再难有大幅提升， PC端销售占比下降到30%左右之后，将基本趋于稳定。但3:7或2:8 并不是简单的PC购物群体与移动购物群体的区隔划分，多屏互动的购物习惯正在养成。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　每日经济新闻消息，1月17日，一位接近国家质检总局的人士透露，国家发改委与国家质检总局将共建“全国电子商务质量大数据应用中心”，并落户于杭州，这个中心有望在杭州云栖小镇进行建设。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　为了支持这个电商质量大数据中心，杭州市政府有意配套建设4张网，即共享网、打假维权网、标准网、检测协作网，此举有望进一步遏制愈来愈烈的网络售假，通过数据分析来提升相关职能部门的执法水平。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　“全国电子商务质量大数据应用中心将于杭州落地，这对丰富国家宏观经济数据和加强质量信用体系建设意义重大。”上述人士说，这与杭州电商发展处于全国前列有关，可能的地点是云栖小镇。杭州市将配套建设共享网、打假维权网、标准网、检测协作网，由此来支持大数据中心，目前这些平台的建设正在紧锣密鼓地推进中。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　行业分析</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; color: rgb(102, 102, 102); font-family: STHeiti; font-size: medium; white-space: normal; background-color: rgb(255, 255, 255);\">　　2014年下半年开始，中国B2C电商格局已经趋于稳定，开始显现“强者愈强”的马太效应，小型B2C电商愈加艰难 。未来几年电商行业整体的移动端销售占比将再难有大幅提升， PC端销售占比下降到30%左右之后，将基本趋于稳定。但3:7或2:8 并不是简单的PC购物群体与移动购物群体的区隔划分，多屏互动的购物习惯正在养成。</p><p><br/></p>',1,'2017-09-26 23:47:00','2017-09-26 23:47:00',0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '' COMMENT '产品名',
  `first_img` varchar(256) DEFAULT NULL COMMENT '产品缩略图',
  `detail` text COMMENT '产品详情',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  `type` varchar(64) DEFAULT NULL COMMENT '类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'企业网站小程序','/public/img/upload/20170927/81fb3cc5b2917abf7da6ee6b49678fb6.jpg||h1.jpg','/public/img/upload/20170928/18baf1a66c62910b1f47e02b87e265dc.jpg||xiaochengxu1.jpg,/public/img/upload/20170928/0fcd661afcbb9377a57c359419cf31d6.jpg||15027647719702101.jpg','2017-09-26 23:47:25','2017-09-26 23:47:25',0,NULL),(2,'商城小程序','/public/img/upload/20170926/1134d67a7f5ac0716e652f9b10494265.jpg||h2.jpg',NULL,'2017-09-26 23:47:36','2017-09-26 23:47:36',0,NULL),(3,'微信商城系统','/public/img/upload/20170926/a76d0c44f1236af967d94baaeb20e1fd.jpg||h3.jpg',NULL,'2017-09-26 23:47:45','2017-09-26 23:47:45',0,NULL),(4,'新媒体运营','/public/img/upload/20170926/4712e7047764a1eda756b16aa09bd6f8.jpg||h4.jpg',NULL,'2017-09-26 23:47:51','2017-09-26 23:47:51',0,NULL),(5,'网站建设','/public/img/upload/20170926/4d766e2753eab126a1ed5c9946fc95df.jpg||h5.jpg',NULL,'2017-09-26 23:48:00','2017-09-26 23:48:00',0,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT '名称',
  `alias` varchar(32) NOT NULL COMMENT '代号',
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `role` varchar(128) DEFAULT NULL,
  `created_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_time` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(4) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-30 10:07:19
