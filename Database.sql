-- create database dan table --
create database crud_php_native;
use crud_php_native;

create table 'users'(
    'id' int(11) not null auto_increment primary key,
    'name' varchar(100) not null,
    'jk' enum('laki-laki','perempuan'),
    'alamat' varchar(100),
    primary key ('id')
);