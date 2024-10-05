select * from clients;

update clients set name="Zolie " where client_id =1 ; 
insert into clients(name, client_contact, client_type) values 
("Zaza", "123456789", "child") ; 

delete from clients where client_id=2;

show tables; 
create table clients(
client_id int auto_increment primary key not null, 
name varchar(100) not null, 
client_contact varchar(200) not null, 
client_type enum("adult", "child") not null
 ); 
 
 select * from clients; 
