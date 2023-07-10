CREATE TABLE client (
    idclient int auto_increment primary key,
    email varchar(100),
    motdepasse varchar(50)

);

CREATE TABLE genre (
    idgenre int auto_increment primary key,
    nom varchar(50)
)

CREATE TABLE profil(
    idprofil int auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    idgenre int,
    taille float,
    poids float,
    idclient int,
    foreign key (idgenre) references genre(idgenre),
    foreign key (idclient) references client(idclient)

);