<?php
    require_once("PDOConnexion.class.php");
    
    class Playlist {
        private $PlaylistId;
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
        
		public static function getAllPlaylist(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT DISTINCT Name as nom_playlist, PlaylistId FROM Playlist";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Playlist');
			$sth->execute();
			return $sth->fetchAll(); 
        }
		public static function createPlaylist(string $name){
			$db = PDOConnexion::getInstance();
			$sql="INSERT INTO Playlist (Name) VALUES (:name)";
			$sth = $db->prepare($sql);
            $sth->bindValue(':name', $name, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Playlist');
			$sth->execute();
			return $sth->fetch(); 
		}
		public static function GetNamePlaylist(string $id) {
			$db = PDOConnexion::getInstance();
			$sql="SELECT Name FROM Playlist WHERE PlaylistId = :id";
			$sth = $db->prepare($sql);
            $sth->bindValue(':id', $id, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Playlist');
			$sth->execute();
			return $sth->fetch(); 
		}
    }
?>