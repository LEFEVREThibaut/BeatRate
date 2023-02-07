<?php
    require_once("PDOConnexion.class.php");
    
    class InvoiceLine {
        private $InvoiceLineId;
        private $InvoiceId;
        private $TrackId;
        private $UnitPrice;
        private $Quantity;

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
        
		public static function getAllTrackBuy(string $CustomerId){
			$db = PDOConnexion::getInstance();
			$sql="SELECT InvoiceDate, t.Name as titre, Title as nom_album, a.Name as artiste, Milliseconds, il.UnitPrice, Quantity FROM Invoice as i join InvoiceLine as il join Track as t join Album as al join Artist as a on i.InvoiceId=il.InvoiceId and il.TrackId=t.TrackId and t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId WHERE CustomerId = :cid ORDER BY t.Name";
			$sql2="SELECT InvoiceDate, t.Name as titre, Title as nom_album, a.Name as artiste, Milliseconds, il.UnitPrice, Quantity FROM Invoice as i join InvoiceLine as il join Track as t join Album as al join Artist as a on i.InvoiceId=il.InvoiceId and il.TrackId=t.TrackId and t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId WHERE CustomerId = :cid ORDER BY Title";
			$sql3="SELECT InvoiceDate, t.Name as titre, Title as nom_album, a.Name as artiste, Milliseconds, il.UnitPrice, Quantity FROM Invoice as i join InvoiceLine as il join Track as t join Album as al join Artist as a on i.InvoiceId=il.InvoiceId and il.TrackId=t.TrackId and t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId WHERE CustomerId = :cid ORDER BY a.name";

			$sth = $db->prepare($sql);
			$sth2 = $db->prepare($sql2);
			$sth3 = $db->prepare($sql3);

            $sth->bindValue(':cid', $CustomerId, PDO::PARAM_STR);
			$sth2->bindValue(':cid', $CustomerId, PDO::PARAM_STR);
            $sth3->bindValue(':cid', $CustomerId, PDO::PARAM_STR);

			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth2->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');
			$sth3->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Track');

			$sth->execute();
			$sth2->execute();
			$sth3->execute();

			return [$sth->fetchAll(), $sth2->fetchAll(), $sth3->fetchAll()]; 
        }

		public static function getClassementbyGenre(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT g.Name as genre, SUM(il.unitprice*quantity) as montant_vente FROM InvoiceLine as il join Track as t join Genre as g ON il.TrackId=t.TrackId and t.GenreId=g.GenreId GROUP BY GENRE ORDER BY montant_vente DESC";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			return $sth->fetchAll(); 
        }
		
		public static function getClassementbyGenreSales($emp){
            $db = PDOConnexion::getInstance();
			$sql="SELECT g.Name as genre, SUM(il.unitprice*quantity) as montant_vente FROM InvoiceLine as il join Track as t join Genre as g join Invoice as i join Customer as c ON il.TrackId=t.TrackId and t.GenreId=g.GenreId and il.Invoiceid=i.InvoiceId and i.CustomerId=c.customerId WHERE c.SupportRepId= :emp GROUP BY GENRE";
			$sth = $db->prepare($sql);
			$sth->bindValue(':emp', $emp, PDO::PARAM_INT);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			return $sth->fetchAll(); 
        }
		public static function getClassementbyCountrySales($emp){
            $db = PDOConnexion::getInstance();
			$sql="SELECT c.Country as Pays, SUM(il.unitprice*quantity) as montant_vente FROM InvoiceLine as il join Track as t join Invoice as i join Customer as c ON il.TrackId=t.TrackId and il.Invoiceid=i.InvoiceId and i.CustomerId=c.customerId WHERE c.SupportRepId= :emp GROUP BY c.Country";
			$sth = $db->prepare($sql);
			$sth->bindValue(':emp', $emp, PDO::PARAM_INT);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			return $sth->fetchAll(); 
        }

		public static function getNombreClientByCountry(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT Country, COUNT(Country) as nombre_client_pays, ROUND(AVG(UnitPrice*Quantity),2) as moyenne_achat FROM Customer as c JOIN Invoice as i JOIN InvoiceLine as il ON c.CustomerId=i.CustomerId and i.InvoiceId=il.InvoiceId GROUP BY Country ORDER BY moyenne_achat DESC";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_OBJ);
			$sth->execute();
			return $sth->fetchAll(); 
        }
    }
?>