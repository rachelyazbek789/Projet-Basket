CREATE TABLE Profil(
                       id_pro INT  AUTO_INCREMENT,
                       libelle_pro VARCHAR(15) NOT NULL,
                       CONSTRAINT profil_pk PRIMARY KEY (id_pro)
) ENGINE = INNODB;

CREATE TABLE Utilisateur (
                             idUti INT  AUTO_INCREMENT,
                             nomUti VARCHAR(50) NOT NULL,
                             prenomUti VARCHAR(50) NOT NULL,
                             telUti VARCHAR(20),
                             id_pro INT,
                             CONSTRAINT utilisateur_pk PRIMARY KEY (idUti),
                             CONSTRAINT utilisateur_profil_fk FOREIGN KEY (id_pro) REFERENCES Profil(id_pro)
) ENGINE = INNODB;

CREATE TABLE Club (
                      idClb INT AUTO_INCREMENT,
                      nomClb VARCHAR(50) NOT NULL,
                      addClb VARCHAR(50) NOT NULL,
                      cpClb  VARCHAR(5) NOT NULL,
                      CONSTRAINT club_pk PRIMARY KEY (idClb)
) ENGINE = INNODB;

CREATE TABLE Joueur (
                        idJou INT  AUTO_INCREMENT,
                        nom VARCHAR(50) NOT NULL,
                        prenom VARCHAR(50) NOT NULL,
                        date_naissance DATE,
                        sexe ENUM('M', 'F') NOT NULL,
                        idClb INT NOT NULL,
                        CONSTRAINT joueur_pk PRIMARY KEY (idJou),
                        CONSTRAINT joueur_club_fk FOREIGN KEY (idClb) REFERENCES Club(idClb)
) ENGINE = INNODB;

CREATE TABLE Competition (
                             id_compet INT AUTO_INCREMENT,
                             debut DATE NOT NULL,
                             fin DATE NOT NULL,
                             nb_matchs_max INT NOT NULL,
                             idClb INT NOT NULL,
                             CONSTRAINT competition_pk PRIMARY KEY (id_compet),
                             CONSTRAINT competition_club_fk FOREIGN KEY (idClb) REFERENCES Club(idClb)
) ENGINE = INNODB;

CREATE TABLE Matcch (
                       id_match INT  AUTO_INCREMENT,
                       id_compet INT NOT NULL,
                       id_club_un INT NOT NULL,
                       id_club_deux INT NOT NULL,
                       score_club_un INT NOT NULL,
                       score_club_deux INT NOT NULL,
                       date_match DATETIME NOT NULL,
                       vainqueur INT,
                       CONSTRAINT match_pk PRIMARY KEY (id_match),
                       CONSTRAINT match_competition_fk  FOREIGN KEY (id_compet) REFERENCES Competition(id_compet),
                       CONSTRAINT match_club_fk FOREIGN KEY (id_club_un) REFERENCES Club(idClb),
                       CONSTRAINT match_club_deux_fk  FOREIGN KEY (id_club_deux) REFERENCES Club(idClb),
                       CONSTRAINT match_club_vainqueur_fk FOREIGN KEY (vainqueur) REFERENCES Club(idClb)
) ENGINE = INNODB;
