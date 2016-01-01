CREATE DATABASE laofan_bbs;

USE laofan_bbs;

CREATE TABLE userInfo(
	userId			INT unsigned  PRIMARY KEY      AUTO_INCREMENT,
	userName		VARCHAR(20)		NOT NULL         UNIQUE,
	password		VARCHAR(48)		NOT NULL,
	mailBox			VARCHAR(60)		NOT NULL,
	sex			    CHAR(3)			  CHECK(sex='男' OR sex='女'),
	tel			    VARCHAR(20)   NULL,
	address			VARCHAR(100)  NULL,
	qq			    VARCHAR(20)   NULL,
	headPic			INT			      default 1,
	signWord		text          NULL,
	regTime			timestamp		  default current_timestamp
);

CREATE TABLE bbsType(
	typeId			INT				      PRIMARY KEY     AUTO_INCREMENT,
	typeName		VARCHAR(20)			NOT NULL,
	remark			VARCHAR(100)
);

insert INTO bbsType(typeName,remark) VALUES('灌水','其实都是奉命过来顶贴的O(∩_∩)O~');
insert INTO bbsType(typeName,remark) VALUES('生活','认真感受生活(*^__^*)');
insert INTO bbsType(typeName,remark) VALUES('娱乐','└(^o^)┘时尚时尚最时尚');

CREATE TABLE bbsInfo
(
	bbsId			INT			      PRIMARY KEY    AUTO_INCREMENT,
	title			VARCHAR(50)		NOT NULL,
	userId    INT unsigned  NOT NULL,
	typeId		INT,
	face			INT			      default 0,
	content		text			    NOT NULL,
	bbsTime		timestamp		  default current_timestamp,
	FOREIGN KEY (userId)    REFERENCES userInfo(userId),
	FOREIGN KEY (typeId)    REFERENCES bbsType(typeId)
);


CREATE TABLE reviews
(
	reId			  INT				AUTO_INCREMENT			PRIMARY KEY,
	userId		 	INT unsigned,
	bbsId			  INT,
	face			  INT				NOT NULL,
	content			TEXT			NOT NULL,
	reTime			timestamp			default current_timestamp,
	FOREIGN KEY (userId) REFERENCES userInfo(userId),
	FOREIGN KEY (bbsId)  REFERENCES bbsInfo(bbsId)
);


CREATE TABLE notices
(
	 noticeId		INT		AUTO_INCREMENT	 PRIMARY KEY,
	 content		TEXT
);

INSERT INTO notices(content) VALUES('老范论坛开放啦，大家多多支持');

SELECT * FROM userInfo;
SELECT * FROM bbsInfo;
SELECT * FROM reviews;
SELECT * FROM bbsType;
SELECT * FROM notices;
