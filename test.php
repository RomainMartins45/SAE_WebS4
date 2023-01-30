<?php 
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
                    $output .= "<input type ='checkbox' name = 'question" . $numero . "' value='". $reponse . "'>" . $reponse . "\n";
                }
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
            $output .= "<input type ='text' name = 'question" . $numero . "'>\n";
            return $output;
        }
        }

        class QuestionNumerique {
            private $question;
            private $reponse;
            private $tolerance;
        
            public function __construct($question, $reponse, $tolerance) {
                $this->question = $question;
                $this->reponse = $reponse;
                $this->tolerance = $tolerance;
            }
        
            public function checkreponse($submittedreponse) {
                return abs($submittedreponse - $this->reponse) <= $this->tolerance;
            }

            public function getReponse(){
                return $this->reponse;
            }

            public function afficher($numero) {
                $output = "";
                $output .= "<label id ='Q" . $numero . "' for='Q". $numero ."'>" . $this->question . "</label>";
                $output .= "<input type ='text' name = 'question" . $numero . "'>\n";
                return $output;
            }
        }

        $question1 = new QuestionAChoixMultiple("Qui est le meilleur joueur français ?", array("Mbappé", "Giroud", "Benzema", "Dembele"), "Mbappe");
        $question2 = new QuestionTexte("Quel pays a gagné la coupe du monde 2022 ?","Argentine");
        $question3 = new QuestionNumerique("Combien de ballons d'or possède Messi ?",7,1);
        $question4 = new QuestionAChoixMultiple("Quel est la capital de la France ?", array("Paris", "Marseille", "Lille", "Lyon"), "Paris");
        $question5 = new QuestionTexte("Qui a été le MVP du segment de printemps de LEC 2022 ?", array("Nisqy la fraude", "Vetheo", "Caps", "Faker"), "Vetheo");
        $questions = array($question1,$question2,$question3,$question4,$question5);
    ?>


