<?php
    require_once("PDOConnexion.class.php");

    
    class Employee {
        private $EmployeeId;
        private $LastName;
        private $FirstName;
        private $Title;
        private $ReportsTo;
        private $BirthDate;
        private $HireDate;
        private $Address;
        private $City;
        private $State;
        private $Country;
        private $PostalCode;
        private $Phone;
        private $Fax;
        private $Email;
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
			$sql="SELECT * from Employee where Email= :user and Password = :mdp ";
			$sth = $db->prepare($sql);
            $sth->bindValue(':user', $user, PDO::PARAM_STR);
            $sth->bindValue(':mdp', $mdp, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Employee');
			$sth->execute();
			return $sth->fetch(); 
            /* On regarde si l'utilisateur est dans la table Employee */
            /**/
        }
        public static function getAllEmployee(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT EmployeeId, FirstName, LastName, Title, Country, Email, Phone, HireDate FROM Employee";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Employee');
			$sth->execute();
			return $sth->fetchAll();
        }

        public static function getAllInfoByEmployee(string $EmployeeId){
            $db = PDOConnexion::getInstance();
			$sql="SELECT * from Employee where EmployeeId= :eid";
			$sth = $db->prepare($sql);
            $sth->bindValue(':eid', $EmployeeId, PDO::PARAM_STR);
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Employee');
            $sth->execute();
			return $sth->fetch(); 
            /* On récupère toutes les informations du client */
            /* variable : LastName, FirstName, Email, Fax, Phone, Country, State, City, Address, PostalCode */
        }

        public static function getAllSupportAgent(){
            $db = PDOConnexion::getInstance();
			$sql="SELECT EmployeeId, FirstName, LastName FROM Employee WHERE Title = \"Sales Support Agent\" ";
			//$sql="SELECT EmployeeId, FirstName, LastName FROM Employee WHERE EmployeeId = 3 or EmployeeId = 4 or EmployeeId = 5";
			$sth = $db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			return $sth->fetchAll(); 
        }   

        public static function UpdateInfoEmployee($EmployeeId, $LastName, $FirstName, $Address, $City, $State, $Country, $PostalCode, $Phone, $Fax, $Email, $Password) {
            $db = PDOConnexion::getInstance();
			$sql="UPDATE Employee SET LastName = :LastName, FirstName = :FirstName, Address = :Address, City = :City, State = :State, Country = :Country, PostalCode = :PostalCode, Phone = :Phone, Fax = :Fax, Email = :Email, Password = :Password WHERE EmployeeId = :EmployeeId";
			$sth = $db->prepare($sql);
            $sth->bindValue(':FirstName', $FirstName, PDO::PARAM_STR);
            $sth->bindValue(':LastName', $LastName, PDO::PARAM_STR);
            $sth->bindValue(':Address', $Address, PDO::PARAM_STR);
            $sth->bindValue(':City', $City, PDO::PARAM_STR);
            $sth->bindValue(':State', $State, PDO::PARAM_STR);
            $sth->bindValue(':Country', $Country, PDO::PARAM_STR);
            $sth->bindValue(':PostalCode', $PostalCode, PDO::PARAM_STR);
            $sth->bindValue(':Phone', $Phone, PDO::PARAM_STR);
            $sth->bindValue(':Fax', $Fax, PDO::PARAM_STR);
            $sth->bindValue(':Email', $Email, PDO::PARAM_STR);
            $sth->bindValue(':Password', $Password, PDO::PARAM_STR);
            $sth->bindValue(':EmployeeId', $EmployeeId, PDO::PARAM_STR); 
			$sth->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Employee');
			$sth->execute();
        }
    }
?>