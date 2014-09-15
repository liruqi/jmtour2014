CREATE DATABASE `jm2014`  DEFAULT CHARACTER SET "UTF8" ;
use jm2014;
CREATE TABLE jmuser (
    oa VARCHAR(64) NOT NULL PRIMARY KEY,
    id INTEGER NOT NULL ,
    password VARCHAR(128) NOT NULL,
    wave 	VARCHAR(128) NOT NULL,
    name 	VARCHAR(128) NOT NULL,
    level 	VARCHAR(128) NOT NULL,
    gender 	VARCHAR(128) NOT NULL,
    phone	VARCHAR(128) NOT NULL,
    bq 	VARCHAR(128) NOT NULL,
    depart 	VARCHAR(128) NOT NULL,
    title 	VARCHAR(128) NOT NULL,
    race 	VARCHAR(128) NOT NULL,
    nation 	VARCHAR(128) NOT NULL,
    height 	VARCHAR(128) NOT NULL,
    weight 	VARCHAR(128) NOT NULL,
    eat 	VARCHAR(128) NOT NULL,
    friendname 	VARCHAR(128) NOT NULL,
    friendphone 	VARCHAR(128) NOT NULL,
    friendaddr 	VARCHAR(128) NOT NULL,
    onboardtime 	VARCHAR(128) NOT NULL,
    hotel 	VARCHAR(128) NOT NULL,
    room 	VARCHAR(128) NOT NULL,
    roommate 	VARCHAR(128) NOT NULL,
    idcard 	VARCHAR(128) NOT NULL,
    endorse 	VARCHAR(128) NOT NULL,
    city 	VARCHAR(128) NOT NULL,
    huji 	VARCHAR(128) NOT NULL,
    KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARACTER SET "UTF8";

alter table jmuser add column extra text default '';
alter table jmuser add column paper text default '';

