CREATE DATABASE projet_48h;
\c projet_48h;

CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    pwd VARCHAR(255),
    date_naissance DATE,
    est_admin INTEGER
);