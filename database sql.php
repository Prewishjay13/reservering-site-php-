CREATE TABLE users (
 user_int(11) not null PRIMARY KEY AUTO_INCREMENT,
 user_first varchar(256) not null,
user_last varchar(256) not null,
user_email varchar(256) not null,
user_uid varchar(256) not null,
user_pwd varchar(256) not null
 );