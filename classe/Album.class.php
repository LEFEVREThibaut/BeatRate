<?php
    require_once("PDOConnexion.class.php");
    
    class Album {
        private $AlbumId;
        private $Title;
        private $ArtistId;

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
        
		public static function getAllAlbumOfArtist(string $ArtistId){
            $db = PDOConnexion::getInstance();
			$sql="SELECT title as nom_album, name as artiste, AlbumId FROM Artist as a JOIN Album as al ON a.ArtistId=al.ArtistId WHERE al.ArtistId= :aid";
			$sth = $db->prepare($sql);
            $sth->bindValue(':aid', $ArtistId, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Album');
			$sth->execute();
			return $sth->fetchAll(); 
			/*On récupère la liste de tout les albums d'un artiste*/
			/* les variables : nom_album, artiste */
        }
    }
?>