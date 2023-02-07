drop table choixQuestions;
drop table score;
drop table questions;
drop table questionnaires;
drop table utilisateurs;

CREATE TABLE utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  mot_de_passe VARCHAR(255) NOT NULL,
  role ENUM('createur', 'repondeur') NOT NULL
);

CREATE TABLE questionnaires (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255) NOT NULL,
  utilisateur_id INT NOT NULL,
  FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);

CREATE TABLE questions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  questionnaire_id INT NOT NULL,
  type ENUM('texte', 'choix multiple', 'vrai ou faux') NOT NULL,
  texte VARCHAR(255) NOT NULL,
  FOREIGN KEY (questionnaire_id) REFERENCES questionnaires(id)
);

CREATE TABLE choixQuestions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  question_id INT NOT NULL,
  choix VARCHAR(255) NOT NULL,
  juste BOOLEAN NOT NULL,
  FOREIGN KEY (question_id) REFERENCES questions(id)
);

CREATE TABLE score(
  utilisateur_id INT NOT NULL,
  questionnaire_id INT NOT NULL,
  dateScore DATE NOT NULL,
  points INT NOT NULL,
  FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id),
  FOREIGN KEY (questionnaire_id) REFERENCES questionnaires(id)
);

INSERT INTO utilisateurs VALUES(1,"Admin","admin","createur");
INSERT INTO questionnaires VALUES(1,"QuestionnaireAdmin",1);
INSERT INTO questions VALUES(1,1,"texte","Quel pays a gagné la coupe du monde de football de 2022 ?");
INSERT INTO questions VALUES(2,1,"choix multiple","Qui est le meilleur joueur du monde ?");
INSERT INTO choixQuestions VALUES(1,1,"Ronaldo", TRUE);
INSERT INTO choixQuestions VALUES(2,2,"Messi", TRUE);
INSERT INTO choixQuestions VALUES(3,2,"Mbappe", FALSE);
INSERT INTO choixQuestions VALUES(4,2,"Neymar", FALSE);
INSERT INTO questions VALUES(3,1,"vrai ou faux","Cette question est vrai");
INSERT INTO choixQuestions VALUES(5,3,"Vrai",TRUE);
INSERT INTO choixQuestions VALUES(6,3,"Feux",FALSE);
INSERT INTO score VALUES(1,1,"2023-01-24 22:22",1);
