drop database if exists hackathon;
create database hackathon character set utf8 collate utf8_general_ci;
use hackathon;
alter database character set utf8 collate utf8_general_ci;
create table INSTITUCIJA(
id_ins int not null primary key auto_increment,
ime_ins varchar(50) not null,
info_ins varchar(400) not null,
mjesto_ins varchar(50) not null,
adresa_ins varchar(50) not null,
nivo_krvi_ins int not null
)engine=innodb;

create table DONATOR(
id_don int not null primary key auto_increment,
ime_don varchar(50) not null,
prezime_don varchar(50) not null,
oib_don char(11) not null,
broj_donacija int not null,
points_don int not null,
email_don varchar(50) not null,
lozinka_don char(32) not null,
spol_don boolean not null,
tetovaza_don boolean not null,
piercing_don boolean not null,
ovisnost_droge boolean not null,
id_krv int
)engine=innodb;

create table OPERATER(
id_ope int not null primary key auto_increment,
ime_ope varchar(50) not null,
prezime_ope varchar(50) not null,
email_ope varchar(50) not null,
lozinka_ope char(32) not null,
superadmin_ope boolean not null,
id_ins int
)engine=innodb;

create table KRV(
id_krv int not null primary key auto_increment,
grupa_krv varchar(3),
klasa_krv varchar(15)
)engine=innodb;

create table ZALIHE(
id_zal int not null primary key auto_increment,
id_krv int,
id_ins int,
kolicina_zal int 
)engine=innodb;

create table DONACIJA(
id_donacije int not null primary key auto_increment,
id_don int,
id_ins int,
datum date
)engine=innodb;

create table QUEST(
id_quest int not null primary key auto_increment,
quest_name varchar(100),
quest_text varchar(300),
quest_points int
)engine=innodb;

create table REWARD(
id_reward int not null primary key auto_increment,
reward_name varchar(100),
reward_text varchar(300),
reward_points int
)engine=innodb;

create table OBAVIJEST(
id_oba int not null primary key auto_increment,
id_ins int,
id_zal int,
opis_oba varchar(300),
datum_oba datetime
)engine=innodb;


alter table ZALIHE add foreign key (id_krv) references KRV(id_krv);
alter table ZALIHE add foreign key (id_ins) references INSTITUCIJA(id_ins);
alter table DONATOR add foreign key (id_krv) references KRV(id_krv);
alter table DONACIJA add foreign key (id_don) references DONATOR (id_don);
alter table DONACIJA add foreign key (id_ins) references INSTITUCIJA(id_ins);
alter table OBAVIJEST add foreign key (id_zal) references ZALIHE(id_zal);
alter table OBAVIJEST add foreign key (id_ins) references INSTITUCIJA(id_ins);
alter table OPERATER add foreign key (id_ins) references INSTITUCIJA(id_ins);


#1
insert into INSTITUCIJA(ime_ins,info_ins,mjesto_ins,adresa_ins,nivo_krvi_ins)
values ('KBC REBRO', 'Klinički bolnički centar Zagreb je najveća bolnička ustanova u Republici Hrvatskoj i ujedno najveća baza kliničke nastave Medicinskoga fakulteta Sveučilišta u Zagrebu.', 'Zagreb','Kišpatićeva 12',50);

#2
insert into INSTITUCIJA(ime_ins,info_ins,mjesto_ins,adresa_ins,nivo_krvi_ins)
values ('KBC Osijek', 'Klinički bolnički centar Osijek naziv je za središnju i najveću zdravstvenu ustanovu u Osječko-baranjskoj županiji, te u cijeloj Slavoniji. Također, ovo je uz KBC Zagreb, Split i Rijeku jedini klinički bolnički centar u Hrvatskoj.', 'Osijek','Josipa Huttlera 4',30);

#1
insert into OPERATER(ime_ope,prezime_ope,email_ope,lozinka_ope,superadmin_ope,id_ins)
values ('Test', 'Icle', 'admin@admin',md5('admin'),1,1);
#2 
insert into OPERATER(ime_ope,prezime_ope,email_ope,lozinka_ope,superadmin_ope,id_ins)
values ('Marija', 'Kovačević', 'marija@gmail',md5('Marija'),0,1);
#3
insert into OPERATER(ime_ope,prezime_ope,email_ope,lozinka_ope,superadmin_ope,id_ins)
values ('Josip', 'Barić', 'jbaric312@gmail.com',md5('Josip'),1,2);

#1
insert into KRV(grupa_krv,klasa_krv)
values('A+','Human Warrior');
#2
insert into KRV(grupa_krv,klasa_krv)
values('A-','Elf Warrior');
#3
insert into KRV(grupa_krv,klasa_krv)
values('B+','Human Hunter');
#4
insert into KRV(grupa_krv,klasa_krv)
values('B-','Elf Hunter');
#5
insert into KRV(grupa_krv,klasa_krv)
values('AB+','Human MAGE');
#6
insert into KRV(grupa_krv,klasa_krv)
values('AB-','Elf Mage');
#7
insert into KRV(grupa_krv,klasa_krv)
values('0+','Human Cleric');
#8
insert into KRV(grupa_krv,klasa_krv)
values('0-','Elf Cleric');


#1
insert into DONATOR(ime_don,prezime_don,oib_don,broj_donacija,points_don,email_don,lozinka_don,spol_don,tetovaza_don,piercing_don,ovisnost_droge,id_krv)
values('Ivan','Kovač','24643575432',3,120,'imatkovis@gmail.com',md5('ivan'),0,0,0,0,7);
#2
insert into DONATOR(ime_don,prezime_don,oib_don,broj_donacija,points_don,email_don,lozinka_don,spol_don,tetovaza_don,piercing_don,ovisnost_droge,id_krv)
values('Maja','Milković','56435732432',4,150,'majaaaa@gmail.com',md5('maja'),1,1,0,0,6);
#3
insert into DONATOR(ime_don,prezime_don,oib_don,broj_donacija,points_don,email_don,lozinka_don,spol_don,tetovaza_don,piercing_don,ovisnost_droge,id_krv)
values('Jelena','Marić','15743575432',0,0,'jelnaa@gmail.com',md5('jelna'),1,0,0,0,2);
#4
insert into DONATOR(ime_don,prezime_don,oib_don,broj_donacija,points_don,email_don,lozinka_don,spol_don,tetovaza_don,piercing_don,ovisnost_droge,id_krv)
values('Marko','Perić','12343575432',0,0,'crnimarko@gmail.com',md5('Marko'),0,1,1,1,8);

#1
insert into DONACIJA(id_don,id_ins,datum)
values(1,2,'2014-03-22');
#2
insert into DONACIJA(id_don,id_ins,datum)
values(2,2,'2014-05-22');
#3
insert into DONACIJA(id_don,id_ins,datum)
values(3,2,'2014-05-23');
#4
insert into DONACIJA(id_don,id_ins,datum)
values(1,1,'2014-05-24');
#5
insert into DONACIJA(id_don,id_ins,datum)
values(1,1,'2014-06-22');
#6
insert into DONACIJA(id_don,id_ins,datum)
values(2,1,'2014-07-22');

#1
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (1,1,300);
#2
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (2,1,300);
#3
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (3,1,300);
#4
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (4,1,300);
#5
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (5,1,300);
#6
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (6,1,300);
#7
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (7,1,300);
#8
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (8,1,300);
#9
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (1,2,300);
#10
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (2,2,300);
#11
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (3,2,300);
#12
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (4,2,300);
#13
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (5,2,300);
#14
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (6,2,300);
#15
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (7,2,300);
#16
insert into ZALIHE(id_krv,id_ins,kolicina_zal)
values (8,2,300);

#1
insert into QUEST(quest_name,quest_text,quest_points)
values('First Blood','You donated blood first time!', 50);
#2
insert into QUEST(quest_name,quest_text,quest_points)
values('Brave hearth','You came again and donated blood!Very nice!', 50);
#3
insert into QUEST(quest_name,quest_text,quest_points)
values('Helping spree','You keep helping others!', 150);

#1
insert into REWARD(reward_name,reward_text,reward_points)
values('Pizza!','You will get a free pizza!', 50);

#2
insert into REWARD(reward_name,reward_text,reward_points)
values('Tesla model S!','You will get a free Tesla model S car!', 5010000);


CREATE TABLE IF NOT EXISTS `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;