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
  reponse VARCHAR(255) NOT NULL,
  FOREIGN KEY (questionnaire_id) REFERENCES questionnaires(id)
);

CREATE TABLE choixQuestions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  question_id INT NOT NULL,
  choix VARCHAR(255) NOT NULL,
  FOREIGN KEY (question_id) REFERENCES questions(id)
);

INSERT INTO utilisateurs VALUES(1,"Admin","admin","createur");
INSERT INTO questionnaires(1,"QuestionnaireAdmin",1);
INSERT INTO questions VALUES(1,1,"texte","Quel pays a gagné la coupe du monde de football de 2022 ?","Argentine");
INSERT INTO questions VALUES(1,1,"choix multiple","Qui est le meilleur joueur du monde ?","Ronaldo");
INSERT INTO choixQuestions(1,1,"Ronaldo");
INSERT INTO choixQuestions(1,1,"Messi");
INSERT INTO choixQuestions(1,1,"Mbappe");
INSERT INTO choixQuestions(1,1,"Neymar");
INSERT INTO questions VALUES(1,1,"vrai ou faux","Cette question est vrai","vrai");
