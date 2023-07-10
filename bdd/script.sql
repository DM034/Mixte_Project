CREATE TABLE administrateur (
    idadministrateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    mail VARCHAR(255),
    pwd VARCHAR(255)
);

INSERT INTO administrateur VALUES(DEFAULT,'admin','admin@gmail.com','1234');

create table if not exists objectif(
    idobjectif INTEGER primary key auto_increment,
    nomobjectif VARCHAR(100)
);

insert into objectif values
    (NULL,'Perte'),
    (NULL,'Gain');

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

create table if not exists objectif(
    idobjectif INTEGER primary key auto_increment,
    nomobjectif VARCHAR(100)
);

insert into objectif values
    (NULL,'Perte'),
    (NULL,'Gain');

create table if not exists repas(
    idrepas INTEGER primary key auto_increment,
    nomrepas VARCHAR(100)
);

CREATE TABLE repasPhoto(
    idRepasPhoto INTEGER primary key auto_increment,
    nomPhoto VARCHAR(255),
    pathPhoto VARCHAR(255),
    idRepas INTEGER,
    foreign key(idRepas) references repas(idrepas)
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

create table if not exists intervalle(
    idintervalle INTEGER primary key auto_increment,
    min float,
    max float
);

insert into intervalle values
    (NULL,1,3),
    (NULL,4,8),
    (NULL,9,14),
    (NULL,15,null);

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

select regimeRepas.*,regime.nom,regime.prixunitaire,regime.duree,repas.nomrepas,objectif.nomobjectif from regimerepas 
join regime on regimerepas.idregime=regime.idregime 
join repas on regimerepas.idrepas=repas.idrepas
join objectif on regime.idobjectif=objectif.idobjectif;


create table if not exists client(
    idclient INTEGER primary key auto_increment,
    email VARCHAR(100),
    motdepasse VARCHAR(100)
);

insert into client values(NULL,'yohanrabepro@gmail.com','root');
insert into client values(NULL,'andrea@gmail.com','root');
insert into client values(NULL,'safidi@gmail.com','root');
insert into client values(NULL,'mirado@gmail.com','root');
insert into client values(NULL,'ony@gmail.com','root');

create table if not exists porteMonnaie(
    idporteMonnaie INTEGER primary key auto_increment,
    idclient integer,
    entree float,
    sortie float,
    foreign key (idclient) references client(idclient)
);

insert into porteMonnaie values
    (NULL,1,30000,0),
    (NULL,2,0,10000),
    (NULL,3,3000,0),
    (NULL,4,0,20000),
    (NULL,5,40000,0);

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

SELECT codeClient.idcodeClient,client.*,code.* 
FROM codeClient 
JOIN code
ON codeClient.idcode = code.idcode
JOIN client
ON codeClient.idclient = client.idclient;

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