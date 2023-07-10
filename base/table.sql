CREATE DATABASE projet_48h;
\c projet_48h;

CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    pwd VARCHAR(255),
    date_naissance DATE,
    genre INTEGER,
    taille DOUBLE PRECISION,
    poids DOUBLE PRECISION,
    est_admin INTEGER
);

CREATE TABLE argent (
    id_user INTEGER,
    montant DOUBLE PRECISION,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);

CREATE TABLE code(
    id SERIAL PRIMARY KEY ,
    code VARCHAR(20) ,
    tarif DOUBLE PRECISION ,
    utilisable INTEGER
);

CREATE TABLE user_code(
    id SERIAL PRIMARY KEY ,
    est_valide INTEGER ,
    user_id INTEGER REFERENCES users ,
    code_id INTEGER REFERENCES code 
);

CREATE TABLE sport(
    id SERIAL PRIMARY KEY ,
    nom VARCHAR (50) ,
    description VARCHAR(255) ,
    frequence INTEGER ,
    repos DOUBLE PRECISION
);

CREATE TABLE nutrition(
    id SERIAL PRIMARY KEY ,
    nom VARCHAR(50) ,
    categorie VARCHAR(50) 
);

CREATE TABLE gagner_poids(
    id SERIAL PRIMARY KEY ,
    couple INTEGER ,
    eau_par_jour DOUBLE PRECISION ,
    poids_min INTEGER ,
    poids_max INTEGER ,
    genre INTEGER ,
    duree_sport DOUBLE PRECISION ,
    poids_nutrition DOUBLE PRECISION ,
    sport_id INTEGER REFERENCES sport ,
    nutrition_id INTEGER REFERENCES nutrition 
);

CREATE TABLE perdre_poids(
    id SERIAL PRIMARY KEY ,
    couple INTEGER ,
    eau_par_jour DOUBLE PRECISION ,
    poids_min INTEGER ,
    poids_max INTEGER ,
    genre INTEGER ,
    duree_sport DOUBLE PRECISION ,
    poids_nutrition DOUBLE PRECISION ,
    sport_id INTEGER REFERENCES sport ,
    nutrition_id INTEGER REFERENCES nutrition 
);

CREATE TABLE IMC(
    id SERIAL PRIMARY KEY,
    resultat DOUBLE PRECISION
);