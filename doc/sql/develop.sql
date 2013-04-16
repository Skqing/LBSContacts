SHOW DATABASES;

/** 创建数据库 */
CREATE DATABASE IF NOT EXISTS app_lbscontacts default charset utf8 COLLATE utf8_general_ci;


CREATE TABLE app_user
(
	id_ varchar(32) primary key not null,
	nikename_ varchar(50) ,
	password_ varchar(32) not null
);
CREATE TABLE app_user_info
(
	id_ varchar(32) primary key not null,
	user_id varchar(32) not null,
	email_ varchar(100) unique not null,
	avatar_ varchar(100)
);

CREATE TABLE app_linkman_info
(
	id_ varchar(32) primary key not null,
	user_id varchar(32) not null,
	name_ varchar(50),
	describe_ varchar(500), 
	mobileNo_ varchar(20), /**手机号码*/
	telNo_ varchar(20),  /**电话号码*/
	qq_ int(15),
	fax_ int(15),
	birthday_ date,
	company_ varchar(100),
	position_ varchar(50),
	workAddress_ varchar(200),
	familyAddress_ varchar(200),
	homepage_ varchar(100)
);


CREATE TABLE app_user_login
(
	id_ varchar(32) primary key not null,
	user_id varchar(32) not null,
	ip_ varchar(32) not null
);


EXPLAIN SELECT * FROM app_linkman_info;

