<?php
    require_once("PDOConnexion.class.php");
    
    class Genre {
        private $GenreId;
        private $Name;

        public function __construct(array $arguments = array()){
			if(!empty($arguments)){
				foreach($arguments as $property=>$argument){
					$this->{$property}=$argument;
				}
			}
		}
		public function __get($nom){
			return $this->$nom;
		}
		public function __set($nom, $valeur){
			$this->$nom=$valeur;
		}
        
		public static function getAllGenre(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT DISTINCT Name as genre, GenreId FROM Genre";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Genre');
			$sth->execute();
			return $sth->fetchAll(); 
			/* On récupère tout les genre  */
			/* variable : genre, GenreId */
        }
    }
?>