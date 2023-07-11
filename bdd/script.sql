CREATE TABLE administrateur (
    idadministrateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    mail VARCHAR(255),
    pwd VARCHAR(255)
);

INSERT INTO administrateur VALUES(DEFAULT,'admin','admin@gmail.com','1234');


create table if not exists client(
    idclient INTEGER primary key auto_increment,
    email VARCHAR(100),
    motdepasse VARCHAR(100)
);

insert into client values(NULL,'user@gmail.com','user');
insert into client values(NULL,'faneva@gmail.com','faneva');
insert into client values(NULL,'dm@gmail.com','dm');
insert into client values(NULL,'ma@gmail.com','ma');
insert into client values(NULL,'ony@gmail.com','1234');

CREATE TABLE genre (
    idgenre int primary key auto_increment ,
    nom varchar(50)
);

INSERT INTO genre values(DEFAULT,'homme');
INSERT INTO genre values(DEFAULT,'femme');

CREATE TABLE profil(
    idprofil int primary key auto_increment ,
    nom varchar(50),
    prenom varchar(50),
    dtn date,
    idgenre int,
    taille float,
    poids float,
    idclient int,
    foreign key (idgenre) references genre(idgenre),
    foreign key (idclient) references client(idclient)
);

INSERT INTO profil VALUES(DEFAULT,'user','user','2003-01-01',1,170,80,1),
(DEFAULT,'faneva','faneva','2003-03-01',1,180,80,2),
(DEFAULT,'dm','dm','2004-03-01',1,160,70,3),
(DEFAULT,'ma','ma','1999-11-03',2,175,70,4),
(DEFAULT,'ony','ony','2005-01-23',2,150,60,4);


create table if not exists code(
    idcode INTEGER primary key auto_increment,
    numero VARCHAR(100) UNIQUE,
    valeur float
);

insert into code values
    (NULL,123456789,200000),
    (NULL,123456788,250000),
    (NULL,123456787,300000),
    (NULL,123456786,350000),
    (NULL,123456785,400000),
    (NULL,123456784,450000),
    (NULL,123456783,500000),
    (NULL,123456782,550000),
    (NULL,123456781,600000),
    (NULL,123456780,650000),
    (NULL,123456779,700000),
    (NULL,123456778,750000),
    (NULL,123456777,100000),
    (NULL,123456776,150000),
    (NULL,123456775,50000);

create table if not exists codeClient(
    idcodeClient INTEGER primary key auto_increment,
    idclient integer,
    idcode integer,
    etat integer,
    foreign key (idclient) references client(idclient),
    foreign key (idcode) references code(idcode)
);

insert into codeClient values
    (NULL,1,1,0),
    (NULL,2,2,0),
    (NULL,3,3,0),
    (NULL,4,4,1),
    (NULL,5,5,1),
    (NULL,1,6,1),
    (NULL,2,7,1);


CREATE TABLE historiqueEntree(
    id INTEGER primary key auto_increment,
    idclient integer,
    montant float,
    dateEntree DATE,
    foreign key(idclient) references client(idclient)
);

insert into historiqueEntree VALUES(DEFAULT,1,150000,'2023-07-02'),
(DEFAULT,2,250000,'2023-07-04'),
(DEFAULT,3,250000,'2023-07-06'),
(DEFAULT,4,350000,'2023-07-06'),
(DEFAULT,5,400000,'2023-07-10');


create table if not exists objectif(
    idobjectif INTEGER primary key auto_increment,
    nomobjectif VARCHAR(100)
);

insert into objectif values
    (NULL,'Perte'),
    (NULL,'Gain');

create table if not exists porteMonnaie(
    idporteMonnaie INTEGER primary key auto_increment,
    idclient integer,
    entree float,
    sortie float,
    foreign key (idclient) references client(idclient)
);

insert into porteMonnaie values
    (NULL,1,30000,0),
    (NULL,2,15000,10000),
    (NULL,3,3000,0),
    (NULL,4,30000,20000),
    (NULL,5,40000,0);


create table if not exists regime(
    idregime INTEGER primary key auto_increment,
    nom VARCHAR(100),
    idobjectif integer,
    variationPoids float,
    duree float,
    prixUnitaire float,
    foreign key (idobjectif) references objectif(idobjectif)
);

insert into regime values
    (NULL,'Regime 1',2,3,5,20000),
    (NULL,'Regime 2',2,5,10,30000),
    (NULL,'Regime 3',2,4,7,25000),
    (NULL,'Regime 4',1,3,7,32000),
    (NULL,'Regime 5',1,2,5,23000);

create table if not exists regimeClient(
    idregimeClient INTEGER primary key auto_increment,
    idregime integer,
    idclient integer,
    etat integer,
    foreign key (idregime) references regime(idregime),
    foreign key (idclient) references client(idclient)
);

create table if not exists repas(
    idrepas INTEGER primary key auto_increment,
    nomrepas VARCHAR(100)
);

insert into repas values
    (NULL,'Spaghetti bolognaise'),
    (NULL,'Spaghetti carbonara'),
    (NULL,'Salade verte'),
    (NULL,'Pommes de terre sautees'),
    (NULL,'Frites'),
    (NULL,'Bol renverse'),
    (NULL,'Steak frites'),
    (NULL,'Soupe aux legumes'),
    (NULL,'Salade cesar');

CREATE TABLE repasPhoto(
    idRepasPhoto INTEGER primary key auto_increment,
    nomPhoto VARCHAR(255),
    pathPhoto VARCHAR(255),
    idRepas INTEGER,
    foreign key(idRepas) references repas(idrepas)
);  

INSERT into repasPhoto VALUES
(DEFAULT, '1.jpg', 'fichiers/1.jpg', 1),
(DEFAULT, '2.jpg', 'fichiers/2.jpg', 2),
(DEFAULT, '3.jpg', 'fichiers/3.jpg', 3),
(DEFAULT, '4.jpg', 'fichiers/4.jpg', 4),
(DEFAULT, '5.jpg', 'fichiers/5.jpg', 5),
(DEFAULT, '6.jpg', 'fichiers/6.jpg', 6),
(DEFAULT, '7.jpg', 'fichiers/7.jpg', 7),
(DEFAULT, '8.jpg', 'fichiers/8.jpg', 8),
(DEFAULT, 'icon_36.png', './fichiers/icon_36.png', 9);



create table if not exists regimeRepas(
    idregimeRepas INTEGER primary key auto_increment,
    idregime integer,
    idrepas integer,
    foreign key (idregime) references regime(idregime),
    foreign key (idrepas) references repas(idrepas)
);

insert into regimeRepas values
    (NULL,1,1),
    (NULL,1,2),
    (NULL,2,5),
    (NULL,2,7),
    (NULL,3,4),
    (NULL,3,6),
    (NULL,4,3),
    (NULL,4,4),
    (NULL,5,8),
    (NULL,5,9);


create table if not exists sport(
    idsport INTEGER primary key auto_increment,
    nomsport VARCHAR(100),
    idobjectif integer,
    duree float,
    variationPoids float,
    foreign key (idobjectif) references objectif(idobjectif)
);

insert into sport values
    (NULL,'Natation',1,4,4),
    (NULL,'Musculation',2,5,2),
    (NULL,'Foot',2,4,2),
    (NULL,'Basket',1,2,1),
    (NULL,'Volley',1,6,3);









