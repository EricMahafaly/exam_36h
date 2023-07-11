-----USERS
INSERT INTO users VALUES 
    (DEFAULT, 'MAHAFALY', 'Eric', 'Eric@gmail.com', 'eriv', '2010-11-29', 1, 1.75, 70, 1)
;

-----CODES
INSERT INTO code VALUES 
    (DEFAULT,10,10000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,12,12000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,14,14000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,15,15000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,18,18000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,20,20000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,24,24000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,25,25000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,28,28000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,30,30000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,32,32000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,35,35000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,38,38000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,40,40000, 1)
;
INSERT INTO code VALUES 
    (DEFAULT,45,45000, 1)
;

-- nutrition --
INSERT INTO aliments VALUES 
    -- perdre du poids
    (DEFAULT, 'Courgette',  'perdre'),
    (DEFAULT, 'Brocoli', 'perdre'),
    (DEFAULT, 'Pomme', 'perdre'),
    (DEFAULT, 'Pamplemousse', 'perdre'),
    (DEFAULT, 'Riz', 'perdre'),
    (DEFAULT, 'Pommes de terre', 'perdre'),
    (DEFAULT, 'Eau', 'perdre'),
    (DEFAULT, 'The', 'perdre'),
    
    -- gains de poids
    (DEFAULT, 'Poulet', 'gains'),
    (DEFAULT, 'Viande', 'gains'),
    (DEFAULT, 'Oeufs', 'gains'),
    (DEFAULT, 'Poulet', 'gains')
;

-- sport --
INSERT INTO sport VALUES
    (DEFAULT, 'Squat saute'),
    (DEFAULT, 'Cyclisme'),
    (DEFAULT, 'Marche'),
    (DEFAULT, 'Natation')
;

-- regime --
INSERT INTO regime_perdre VALUES
    (DEFAULT, 1, 5, 1, 2, 3),
    (DEFAULT, 6, 10, 2, 2, 4),
    (DEFAULT, 11, 15, 3, 3, 4),
    (DEFAULT, 16, 20, 5, 4, 6)
;