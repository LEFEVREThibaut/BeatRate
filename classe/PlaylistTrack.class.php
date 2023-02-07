<?php
    require_once("PDOConnexion.class.php");
    
    class PlaylistTrack {
        private $PlaylistId;
        private $TrackId;

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
		public static function verifExist(string $pid, string $track) {
			$db = PDOConnexion::getInstance();
			$sql="SELECT * FROM PlaylistTrack WHERE PlaylistId = :pid AND TrackId = :track";
			$sth = $db->prepare($sql);
			$sth->bindValue(':pid', $pid, PDO::PARAM_STR);
            $sth->bindValue(':track', $track, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'PlaylistTrack');
			$sth->execute();
			return $sth->fetch();
		}

        public static function ajoutPlaylist(string $pid, string $track){
			$db = PDOConnexion::getInstance();
			$sql="INSERT INTO PlaylistTrack VALUES (:pid, :track)";
			$sth = $db->prepare($sql);
			$sth->bindValue(':pid', $pid, PDO::PARAM_STR);
			$sth->bindValue(':track', $track, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'PlaylistTrack');
			$sth->execute();
			
		}
    }
