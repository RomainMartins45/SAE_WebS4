<?php 

        class Questionnaire{
            private $id;
            private $titre;
            private $listeQuestions;

            public function __construct($id,$titre,$liste){
                $this->id = $id;
                $this->titre = $titre;
                $this->listeQuestions = $liste;
            }

            public function getQuestions(){
                return $this->listeQuestions;
            }

            public function getId(){
                return $this->id;
            }

            public function afficher(){
                $output = "<a href = 'question.php?id=" . $this->id . "'> <div class = 'questionnaire'>" . $this->titre . "</div></a>";
                return $output;
            }
        }

        class QuestionAChoixMultiple {
            private $question;
            private $choix;
            private $reponse;
    
            public function __construct($question, $choix, $reponse) {
                $this->question = $question;
                $this->choix = $choix;
                $this->reponse = $reponse;
            }
        
            public function getReponse(){
                return $this->reponse;
            }
        
            public function checkreponse($submittedreponse) {
                return $submittedreponse === $this->reponse;
            }

            public function afficher($numero) {
                $output = "";
                $output .= "<label id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                foreach ($this->choix as $reponse){
                    $output .= "<input type ='radio' name = 'question" . $numero . "' value='". $reponse . "'>" . $reponse . "\n";
                }
                return $output;
            }

            public function afficherBonneReponse($numero) {
                $output = "";
                $output .= "<label style = 'color: #06CE59;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #06CE59;' > Bravo la bonne réponse était bien " . $this->reponse . " <p>";
                return $output;
            }

            public function afficherFausseReponse($numero,$submittedreponse) {
                $output = "";
                $output .= "<label style = 'color: #D23014;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #D23014;' > La bonne réponse était " . $this->reponse . " et non " . $submittedreponse . "<p>";
                return $output;
            }
        }
    
        class QuestionTexte {
            private $question;
            private $reponse;

        public function __construct($question,$reponse) {
            $this->question = $question;
            $this->reponse = $reponse;
        }

        public function getReponse(){
            return $this->reponse;
        }
    
        public function checkreponse($submittedreponse) {
            return $submittedreponse === $this->reponse;
        }

        public function afficher($numero) {
            $output = "";
            $output .= "<label id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
            $output .= "<input type ='text' name = 'question" . $numero . "' requi#D23014 >\n";
            return $output;
        }

        public function afficherBonneReponse($numero) {
            $output = "";
            $output .= "<label style = 'color: #06CE59;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
            $output .= "<p style = 'color: #06CE59;' > Bravo la bonne réponse était bien " . $this->reponse . " <p>";
            return $output;
        }

        public function afficherFausseReponse($numero,$submittedreponse) {
            $output = "";
            $output .= "<label style = 'color: #D23014;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
            $output .= "<p style = 'color: #D23014;' > La bonne réponse était " . $this->reponse . " et non " . $submittedreponse . "<p>";
            return $output;
        }
        }

        class QuestionNumerique {
            private $question;
            private $reponse;
        
            public function __construct($question, $reponse) {
                $this->question = $question;
                $this->reponse = $reponse;
            }
        
            public function checkreponse($submittedreponse) {
                return $submittedreponse === $this->reponse;
            }

            public function getReponse(){
                return $this->reponse;
            }

            public function afficher($numero) {
                $output = "";
                $output .= "<label id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<input type ='number' name = 'question" . $numero . "' requi#D23014>\n";
                return $output;
            }

            public function afficherBonneReponse($numero) {
                $output = "";
                $output .= "<label style = 'color: #06CE59;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #06CE59;' > Bravo la bonne réponse était bien " . $this->reponse . " <p>";
                return $output;
            }

            public function afficherFausseReponse($numero,$submittedreponse) {
                $output = "";
                $output .= "<label style = 'color: #D23014;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #D23014;' > La bonne réponse était " . $this->reponse . " et non " . $submittedreponse . "<p>";
                return $output;
            }
        }
        
        class QuestionVraiFaux {
            private $question;
            private $reponse;
        
            public function __construct($question, $reponse) {
                $this->question = $question;
                $this->reponse = $reponse;
            }
        
            public function checkreponse($submittedreponse) {
                return $submittedreponse === $this->reponse;
            }

            public function getReponse(){
                return $this->reponse;
            }

            public function afficher($numero) {
                $output = "";
                $output .= "<label id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<input type ='radio' name = 'question" . $numero . "' value='VRAI'>" . "VRAI" . "\n";
                $output .= "<input type ='radio' name = 'question" . $numero . "' value='FAUX'>" . "FAUX" . "\n";
                return $output;
            }

            public function afficherBonneReponse($numero) {
                $output = "";
                $output .= "<label style = 'color: #06CE59;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #06CE59;' > Bravo la bonne réponse était bien " . $this->reponse . " <p>";
                return $output;
            }

            public function afficherFausseReponse($numero,$submittedreponse) {
                $output = "";
                $output .= "<label style = 'color: #D23014;' id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<p style = 'color: #D23014;' > La bonne réponse était " . $this->reponse . " et non " . $submittedreponse . "<p>";
                return $output;
            }
        }

        

        $question1 = new QuestionAChoixMultiple("Qui est le meilleur joueur français ?", array("Mbappé", "Giroud", "Benzema", "Dembele"), "Mbappe");
        $question2 = new QuestionTexte("Quel pays a gagné la coupe du monde 2022 ?","Argentine");
        $question3 = new QuestionNumerique("Combien de ballons d'or possède Messi ?",7,1);
        $question4 = new QuestionAChoixMultiple("Quel est la capital de la France ?", array("Paris", "Marseille", "Lille", "Lyon"), "Paris");
        $question5 = new QuestionTexte("Qui a été le MVP du segment de printemps de LEC 2022 ?", "Vetheo");
        $question6 = new QuestionVraiFaux("Est ce que Ronaldo est le meilleur joueur du monde ?", "VRAI");
        $question7 = new QuestionVraiFaux("Est ce que Messi est le meilleur joueur du monde ?", "FAUX");
        $questions = array($question1,$question2,$question3,$question4,$question5,$question6);
        $questions2 = array($question7,$question2,$question3,$question4,$question5,$question6);
        $questionnaire = new Questionnaire(1,"Questinnaire n1",$questions);
        $questionnaire2 = new Questionnaire(2,"Questinnaire n2",$questions2);
        $questionnaire3 = new Questionnaire(3,"Questinnaire n2",$questions);
        $questionnaire4 = new Questionnaire(4,"Questinnaire n2",$questions);
        $questionnaire5 = new Questionnaire(5,"Questinnaire n2",$questions);
        $questionnaire6 = new Questionnaire(6,"Questinnaire n2",$questions);
        $questionnaire7 = new Questionnaire(7,"Questinnaire n2",$questions);
        $questionnaire8 = new Questionnaire(8,"Questinnaire n2",$questions);
        $listeQuestionnaires = array($questionnaire,$questionnaire2,$questionnaire3,$questionnaire4,$questionnaire5,$questionnaire6,$questionnaire7,$questionnaire8);
    ?>


