# chat_room

Web application ( Chat Room ) made using pure PHP.

# Requirements

- PHP 5+ / Mysql Server

# Database Script

"
Create database chat_room;
use chat_room;
create table users (id int primary key auto_increment, email varchar(255), password varchar(255), username varchar(255));
create table messages (id int primary key auto_increment, message varchar(255), username varchar(255));

"