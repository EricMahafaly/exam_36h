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
    id_user SERIAL,
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
    id SERIAL PRIMARY KEY,
    nom VARCHAR (50)
);

CREATE TABLE aliments (
    id_aliments SERIAL PRIMARY KEY ,
    nom VARCHAR(50) ,
    categorie VARCHAR(50),
    objectif VARCHAR(50) 
);

CREATE TABLE regime_perdre (
    id_regime_perdre SERIAL PRIMARY KEY,
    kilo_perdre_min INTEGER,
    kilo_perdre_max INTEGER,
    id_aliments INTEGER,
    frequence_semaine INTEGER,
    duree_semaine INTEGER,
    FOREIGN KEY (id_aliments) REFERENCES aliments(id_aliments) 
);

CREATE TABLE regime_gains (
    id_regime_gains SERIAL PRIMARY KEY,
    kilo_gains_min INTEGER,
    kilo_gains_max INTEGER,
    id_aliments INTEGER,
    frequence_semaine INTEGER,
    duree_semaine INTEGER,
    FOREIGN KEY (id_aliments) REFERENCES aliments(id_aliments)
);


-- view --
CREATE OR REPLACE VIEW v_regime_perdre AS
    SELECT regime_perdre.id_regime_perdre, regime_perdre.kilo_perdre_min, regime_perdre.kilo_perdre_max, aliments.nom, regime_perdre.frequence_semaine, regime_perdre.duree_semaine
    FROM regime_perdre JOIN aliments ON regime_perdre.id_aliments = aliments.id_aliments
;

CREATE OR REPLACE VIEW v_regime_gains AS
    SELECT regime_gains.id_regime_gains, regime_gains.kilo_gains_min, regime_gains.kilo_gains_max, aliments.nom, regime_gains.frequence_semaine, regime_gains.duree_semaine
    FROM regime_gains JOIN aliments ON regime_gains.id_aliments = aliments.id_aliments
;

