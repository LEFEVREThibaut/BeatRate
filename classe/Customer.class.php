<?php
    require_once("PDOConnexion.class.php");
    
    class Customer {
        private $CustomerId;
        private $FirstName;
        private $LastName;
        private $Company;
        private $Address;
        private $City;
        private $State;
        private $Country;
        private $PostalCode;
        private $Phone;
        private $Fax;
        private $Email;
        private $SupportRepId;
        private $Password;

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
        
        public static function search(string $user, string $mdp){
            $db = PDOConnexion::getInstance();
			$sql="SELECT * from Customer where Email = :user and Password = :mdp ";
			$sth = $db->prepare($sql);
            $sth->bindValue(':user', $user, PDO::PARAM_STR);
            $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Customer');
			$sth->execute();
			return $sth->fetch();
            /* On regarde si l'utilisateur est dans la table client */
            /**/
        }
        public static function getAllInfoByUser(string $CustomerId){
            $db = PDOConnexion::getInstance();
			$sql="SELECT CustomerId, LastName, FirstName, Email, Fax, Phone, Country, State, City, Address, PostalCode, Password from Customer where CustomerId= :cid";
			$sth = $db->prepare($sql);
            $sth->bindValue(':cid', $CustomerId, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Customer');
            $sth->execute();
			return $sth->fetch(); 
            /* On récupère toutes les informations du client */
            /* variable : LastName, FirstName, Email, Fax, Phone, Country, State, City, Address, PostalCode */
        }
        public static function getAllCostumer(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT CustomerId, FirstName, LastName, Country, Email, Phone, Company FROM Customer";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Customer');
			$sth->execute();
			return $sth->fetchAll();
        }

        public static function UpdateInfoClient($CustomerId, $FirstName, $LastName, $Company, $Address, $City, $State, $Country, $PostalCode, $Phone, $Fax, $Email, $Password) {
            $db = PDOConnexion::getInstance();
			$sql="UPDATE Customer SET FirstName = :FirstName, LastName = :LastName, Company = :Company, Address = :Address, City = :City, State = :State, Country = :Country, PostalCode = :PostalCode, Phone = :Phone, Fax = :Fax, Email = :Email, Password = :Password WHERE CustomerId = :CustomerId";
			$sth = $db->prepare($sql);
            $sth->bindValue(':FirstName', $FirstName, PDO::PARAM_STR);
            $sth->bindValue(':LastName', $LastName, PDO::PARAM_STR);
            $sth->bindValue(':Company', $Company, PDO::PARAM_STR);
            $sth->bindValue(':Address', $Address, PDO::PARAM_STR);
            $sth->bindValue(':City', $City, PDO::PARAM_STR);
            $sth->bindValue(':State', $State, PDO::PARAM_STR);
            $sth->bindValue(':Country', $Country, PDO::PARAM_STR);
            $sth->bindValue(':PostalCode', $PostalCode, PDO::PARAM_STR);
            $sth->bindValue(':Phone', $Phone, PDO::PARAM_STR);
            $sth->bindValue(':Fax', $Fax, PDO::PARAM_STR);
            $sth->bindValue(':Email', $Email, PDO::PARAM_STR);
            $sth->bindValue(':Password', $Password, PDO::PARAM_STR);
            $sth->bindValue(':CustomerId', $CustomerId, PDO::PARAM_STR); 
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Customer');
			$sth->execute();
           
        }
        
        
    }
?>