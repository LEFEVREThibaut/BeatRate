<?php
    require_once("PDOConnexion.class.php");
    
    class Invoice {
        private $InvoiceId;
        private $CustomerId;
        private $InvoideDate;
        private $BillingAddress;
        private $BillingState;
        private $BillingCountry;
        private $BillingPostalCode;
        private $Total;

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
        
		public static function getAllTrackByUser(string $CustomerId){
            $db = PDOConnexion::getInstance();
			$sql="SELECT t.Name as titre, Title as nom_album, a.name as artiste , Milliseconds FROM Invoice as i join InvoiceLine as il join Track as t join Album as al join Artist as a on i.InvoiceId=il.InvoiceId and il.TrackId=t.TrackId and t.AlbumId=al.AlbumId and al.ArtistId=a.ArtistId WHERE CustomerId = :cid";
			$sth = $db->prepare($sql);
            $sth->bindValue(':cid', $CustomerId, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Customer');
			$sth->execute();
			return $sth->fetchAll(); 
        }
    }
?>