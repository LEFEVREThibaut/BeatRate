<?php
    require_once("PDOConnexion.class.php");
    
    class Artist {
        private $ArtistId;
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
        
		public static function getAllArtist(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT Name as artiste, ArtistId FROM Artist LIMIT 15";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Artist');
			$sth->execute();
			return $sth->fetchAll(); 
			/* On récupère la liste de tout les artiste */
			/* variable : artiste */
        }
    }
?>