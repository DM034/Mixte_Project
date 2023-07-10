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