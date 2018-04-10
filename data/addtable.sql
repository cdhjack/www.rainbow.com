/*��Ա��Ϣ������*/
DROP TABLE IF EXISTS `member_info`;
CREATE TABLE `member_info`(
	`id` int(11) unsigned not null auto_increment COMMENT '������ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '��Ա����id',	
	`identity_pic` varchar(255) NOT NULL DEFAULT '' COMMENT '����֤���ֳ�����֤��Ƭ',
	`wx_nick` varchar(100) NOT NULL DEFAULT '' COMMENT '΢���ǳ�',
	`wx_tx` varchar(255) NOT NULL DEFAULT '' COMMENT '΢��ͷ��',
	`wx_pay_qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '΢���տ��ά��ͼƬ',
	`add_time` int(11) unsigned not null default 0 COMMENT '����ʱ��',
	PRIMARY KEY (`id`),UNIQUE KEY `member_id` (`member_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*��Ա���ͱ���һ����Ա�ɶ������*/
DROP TABLE IF EXISTS `member_type`;
CREATE TABLE `member_type`(
	`id` int(11) unsigned not null auto_increment COMMENT '������ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '��Ա����id',
	`member_type` tinyint(1) unsigned not null default 1 COMMENT '��Ա���ͣ�1����ң�2��������3��������',
	`invite_code` char(6) not null default '' COMMENT '����Ա�Ƿ���ʱ��6λ������',
	`balance` varchar(100) NOT NULL DEFAULT '0' COMMENT '�û�Ϊ���������͵����',
	`friend_count` int(11) unsigned not null default 0 COMMENT '����Ա�Ƿ����������ʱ��������������',	
	`wx_group_qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '����Ա�Ƿ����������ʱ������΢��Ⱥ��ά��ͼƬ',
	`add_time` int(11) unsigned not null default 0 COMMENT '����ʱ��',
	PRIMARY KEY (`id`),UNIQUE KEY `member_id_type_relation` (`member_id`,`member_type`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*����������̹�ϵ��*/
DROP TABLE IF EXISTS `member_agent`;
CREATE TABLE `member_agent`(
	`id` int(11) unsigned not null auto_increment COMMENT '������ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`member_agent_id` int(11) unsigned not null default 0 COMMENT '������ID',
	`balance` varchar(100) NOT NULL DEFAULT '0' COMMENT '�÷����ڸô������µ����',
	`add_time` int(11) unsigned not null default 0 COMMENT '��ϵ����ʱ��',
	PRIMARY KEY (`id`),UNIQUE KEY `member_agent_relation` (`member_id`,`member_agent_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*����뷿����ϵ��*/
DROP TABLE IF EXISTS `member_owner`;
CREATE TABLE `member_owner`(
	`id` int(11) unsigned not null auto_increment COMMENT '������ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '���ID',
	`member_owner_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`balance` varchar(100) NOT NULL DEFAULT '0' COMMENT '������ڸ÷����µ����',
	`add_time` int(11) unsigned not null default 0 COMMENT '��ϵ����ʱ��',
	PRIMARY KEY (`id`),UNIQUE KEY `member_owne_relation` (`member_id`,`member_owner_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*����Ա��ֵ���յ��ĳ�ֵ�����������������Ա�����Ҷ�����*/
DROP TABLE IF EXISTS `order_pay_admin`;
CREATE TABLE `order_pay_admin`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '������ID',
	`amount` varchar(100) NOT NULL DEFAULT '0' COMMENT '��ֵ��',	
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:δ����1���Ѵ�����2����ȡ��',
	`admin_id` int(11) unsigned not null default 0 COMMENT '��ֵ��������ԱID',
	`add_time` int(11) unsigned not null default 0 COMMENT '���Ӷ���ʱ��',
	`pay_time` int(11) unsigned not null default 0 COMMENT '����������ֵʱ��',
	PRIMARY KEY (`id`),INDEX `member_id` (`member_id`),INDEX `admin_id` (`admin_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*�����̳�ֵ���յ��ĳ�ֵ����������������̷����Ҷ�����*/
DROP TABLE IF EXISTS `order_pay_agent`;
CREATE TABLE `order_pay_agent`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`amount` varchar(100) NOT NULL DEFAULT '0' COMMENT '��ֵ��',	
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:δ����1���Ѵ�����2����ȡ��',
	`agent_id` int(11) unsigned not null default 0 COMMENT '������ID',
	`add_time` int(11) unsigned not null default 0 COMMENT '���Ӷ���ʱ��',
	`pay_time` int(11) unsigned not null default 0 COMMENT '����������ֵʱ��',
	PRIMARY KEY (`id`),INDEX `member_id` (`member_id`),INDEX `agent_id` (`agent_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*������ֵ���յ��ĳ�ֵ������������������Ҷ�����*/
DROP TABLE IF EXISTS `order_pay_owner`;
CREATE TABLE `order_pay_owner`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '���ID',
	`amount` varchar(100) NOT NULL DEFAULT '0' COMMENT '��ֵ��',	
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:δ����1���Ѵ�����2����ȡ��',
	`owner_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`add_time` int(11) unsigned not null default 0 COMMENT '���Ӷ���ʱ��',
	`pay_time` int(11) unsigned not null default 0 COMMENT '����������ֵʱ��',
	PRIMARY KEY (`id`),INDEX `member_id` (`member_id`),INDEX `owner_id` (`owner_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*���������������ֶ���*/
DROP TABLE IF EXISTS `order_exchange_owner`;
CREATE TABLE `order_exchange_owner`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '���ID',
	`amount` varchar(100) NOT NULL DEFAULT '0' COMMENT '���ֽ����',	
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:δ����1���Ѵ�����2����ȡ��',
	`owner_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`add_time` int(11) unsigned not null default 0 COMMENT '���Ӷ���ʱ��',
	`pay_time` int(11) unsigned not null default 0 COMMENT '��������ʱ��',
	PRIMARY KEY (`id`),INDEX `member_id` (`member_id`),INDEX `owner_id` (`owner_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*��������ı�������*/
DROP TABLE IF EXISTS `match_home`;
CREATE TABLE `match_home`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`owner_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`red_packet_amount` int(11) unsigned not null default 0 COMMENT '���俪��������',
	`red_packet_num` int(11) unsigned not null default 0 COMMENT '���俪�������',
	`status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:������2���ѽ���',
	`start_time` int(11) unsigned not null default 0 COMMENT '����ʱ��',
	`end_time` int(11) unsigned not null default 0 COMMENT '����ʱ��',
	PRIMARY KEY (`id`),INDEX `owner_id` (`owner_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*��������еĲ�����ң���ҿ����Σ�*/
DROP TABLE IF EXISTS `match_home_member`;
CREATE TABLE `match_home_member`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`home_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`owner_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '���ID',
	`pay_amount` varchar(50) NOT NULL DEFAULT '0' COMMENT '���֧����',
	`win_amount` varchar(50) NOT NULL DEFAULT '0' COMMENT '���Ӯ�õı�',
	`add_time` int(11) unsigned not null default 0 COMMENT '�ּҲ���ʱ��',
	PRIMARY KEY (`id`),INDEX `home_id` (`home_id`),INDEX `owner_id` (`owner_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*���������ʼ��ķ�������ҵ���ˮ��¼*/
DROP TABLE IF EXISTS `match_home_bill`;
CREATE TABLE `match_home_bill`(
	`id` int(11) unsigned not null auto_increment COMMENT '����ID',
	`home_id` int(11) unsigned not null default 0 COMMENT '����ID',
	`member_id` int(11) unsigned not null default 0 COMMENT '����ID�����ID',
	`introduce` varchar(500) NOT NULL DEFAULT '0' COMMENT '�����������ˮ��������',
	`amount` varchar(50) NOT NULL DEFAULT '0' COMMENT '������������ӻ�ۼ��ıң��ۼ�Ϊ����',
	`add_time` int(11) unsigned not null default 0 COMMENT '��¼ʱ��',
	PRIMARY KEY (`id`),INDEX `home_id` (`home_id`),INDEX `member_id` (`member_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


























