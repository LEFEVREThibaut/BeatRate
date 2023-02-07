<?php
    require_once("PDOConnexion.class.php");
    
    class Track {
        private $TrackId;
        private $Name;
        private $AlbumId;
        private $MediaTypeId;
        private $Genreld;
        private $Composer;
        private $Milliseconds;
        private $Bytes;
        private $UnitPrice;

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
        public static function getAllTrackOfAlbum(string $AlbumId){
			$db = PDOConnexion::getInstance();
			$sql="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, milliseconds, UnitPrice as prix, g.Name as genre FROM Track as t JOIN Album as al JOIN Artist as a ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId JOIN Genre as g ON t.GenreId=g.GenreId WHERE t.AlbumId= :aid ORDER BY t.Name";
			$sql2="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, milliseconds, UnitPrice as prix, g.Name as genre FROM Track as t JOIN Album as al JOIN Artist as a ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId JOIN Genre as g ON t.GenreId=g.GenreId WHERE t.AlbumId= :aid ORDER BY UnitPrice";
			$sql3="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, milliseconds, UnitPrice as prix, g.Name as genre FROM Track as t JOIN Album as al JOIN Artist as a ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId JOIN Genre as g ON t.GenreId=g.GenreId WHERE t.AlbumId= :aid ORDER BY milliseconds";

			$sth = $db->prepare($sql);
			$sth2 = $db->prepare($sql2);
			$sth3 = $db->prepare($sql3);

            $sth->bindValue(':aid', $AlbumId, PDO::PARAM_STR);
			$sth2->bindValue(':aid', $AlbumId, PDO::PARAM_STR);
            $sth3->bindValue(':aid', $AlbumId, PDO::PARAM_STR);

			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth2->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth3->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');

			$sth->execute();
			$sth2->execute();
			$sth3->execute();

			return [$sth->fetchAll(), $sth2->fetchAll(), $sth3->fetchAll()]; 
        }
        public static function getAllTrackOfGenre(string $GenreId){
			$db = PDOConnexion::getInstance();
			$sql="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId WHERE g.GenreId= :gid ORDER BY t.Name";
			$sql2="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId WHERE g.GenreId= :gid ORDER BY Title";
			$sql3="SELECT t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId WHERE g.GenreId= :gid ORDER BY a.Name";

			$sth = $db->prepare($sql);
			$sth2 = $db->prepare($sql2);
			$sth3 = $db->prepare($sql3);

            $sth->bindValue(':gid', $GenreId, PDO::PARAM_STR);
			$sth2->bindValue(':gid', $GenreId, PDO::PARAM_STR);
            $sth3->bindValue(':gid', $GenreId, PDO::PARAM_STR);

			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth2->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth3->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');

			$sth->execute();
			$sth2->execute();
			$sth3->execute();

			return [$sth->fetchAll(), $sth2->fetchAll(), $sth3->fetchAll()]; 
        }
        
        public static function getAllTrackOfPlaylist(string $PlaylistId){
            $db = PDOConnexion::getInstance();
			$sql="SELECT p.name as nom_playlist, t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g JOIN Playlist as p JOIN PlaylistTrack as pt ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId and p.PlaylistId=pt.PlaylistId and pt.TrackId=t.TrackId WHERE p.PlaylistId= :pid ORDER BY t.Name";
			$sql2 = "SELECT p.name as nom_playlist, t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g JOIN Playlist as p JOIN PlaylistTrack as pt ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId and p.PlaylistId=pt.PlaylistId and pt.TrackId=t.TrackId WHERE p.PlaylistId= :pid ORDER BY Title";
			$sql3 = "SELECT p.name as nom_playlist, t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g JOIN Playlist as p JOIN PlaylistTrack as pt ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId and p.PlaylistId=pt.PlaylistId and pt.TrackId=t.TrackId WHERE p.PlaylistId= :pid ORDER BY a.Name";

			$sth = $db->prepare($sql);
			$sth2 = $db->prepare($sql2);
			$sth3 = $db->prepare($sql3);

            $sth->bindValue(':pid', $PlaylistId, PDO::PARAM_STR);
			$sth2->bindValue(':pid', $PlaylistId, PDO::PARAM_STR);
            $sth3->bindValue(':pid', $PlaylistId, PDO::PARAM_STR);

			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth2->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth3->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');

			$sth->execute();
			$sth2->execute();
			$sth3->execute();

			return [$sth->fetchAll(), $sth2->fetchAll(), $sth3->fetchAll()]; 
        }

		public static function getAllTrack() {
			$db = PDOConnexion::getInstance();
			$sql="SELECT t.TrackId as ID, t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId";	
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth->execute();
			return [$sth->fetchAll()]; 
		}

        public static function getTrackOut($PlaylistId) {
			$db = PDOConnexion::getInstance();
			$sql="SELECT DISTINCT t.TrackId as ID, t.Name as titre, Title as nom_album, a.Name as nom_artiste, g.Name as genre, milliseconds, UnitPrice as prix FROM Track as t JOIN Album as al JOIN Artist as a JOIN Genre as g JOIN Playlist as p JOIN PlaylistTrack as pt ON t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId and t.GenreId=g.GenreId and p.PlaylistId=pt.PlaylistId and pt.TrackId=t.TrackId WHERE t.TrackId NOT IN (SELECT TrackId FROM PlaylistTrack as pt WHERE pt.PlaylistId = :Id)";
			$sth = $db->prepare($sql);
			$sth->bindValue(':Id', $PlaylistId, PDO::PARAM_STR);

			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth->execute();
			return $sth->fetchAll(); 
		}
    }
?>