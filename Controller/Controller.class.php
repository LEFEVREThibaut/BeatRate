<?php

class Controller
{
	private $action;
	private $user;
	private $mdp;
	private $id;
	private $name;

	// faire passer le $_POST dans la boucle du construct
	public function __construct(array $arguments = array())
	{
		if (!empty($arguments)) {
			foreach ($arguments as $property => $argument) {
				$this->{$property} = $argument;
			}
		}
	}
	public function __get($nom)
	{
		return $this->$nom;
	}
	public function __set($nom, $valeur)
	{
		$this->$nom = $valeur;
	}

	public function invoke()
	{
		if (isset($this->action)) {
			require_once('classe/Album.class.php');
			require_once('classe/Artist.class.php');
			require_once('classe/Customer.class.php');
			require_once('classe/Employee.class.php');
			require_once('classe/Genre.class.php');
			require_once('classe/Invoice.class.php');
			require_once('classe/InvoiceLine.class.php');
			require_once('classe/Playlist.class.php');
			require_once('classe/PlaylistTrack.class.php');
			require_once('classe/Track.class.php');

			session_start();
			session_regenerate_id();
			if ($this->action == "ajout-playlist") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_POST["ecrit"] != "") {
						Playlist::createPlaylist($_POST["ecrit"]);
						$total = Playlist::getAllPlaylist();
						$rang = end($total)->PlaylistId;
						$model = Track::getTrackOut($rang);
						include("view/modifplaylist-IT.php");
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "ajout-musique") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {
						if (isset($_GET["name"])) {
							if (PlaylistTrack::verifExist($_POST["albumid"], $_POST["trackid"]) == []) {
								PlaylistTrack::ajoutPlaylist($_POST["albumid"], $_POST["trackid"]);
								$rang = $_GET["name"];
								$model = Track::getTrackOut($rang);
								include("view/modifplaylist-IT.php");
							} else {
								header("Location: index.php?action=new_playlist");
							}
						} else {
							header("Location: index.php?action=new_playlist");
						}
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "ajout-in-playlist") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == "IT Manager" or $_SESSION["connexion"]->Title == "IT Staff") {

						if (isset($_GET["name"])) {
							$rang = $_GET["name"];
							$model = Track::getTrackOut($rang);
							include("view/modifplaylist-IT.php");
						} else {
							header("Location: index.php?action=new_playlist");
						}
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "artiste") {
				$model = Artist::getAllArtist();
				include("view/catalogue.php");
			}
			if ($this->action == "biblio-client") {
				if ($_SESSION["connexion"] instanceof Customer) {
					$model = InvoiceLine::getAllTrackBuy($_SESSION["connexion"]->CustomerId);
					include("view/biblio-client.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "catalogue") {
				$model = Artist::getAllArtist();
				include("view/catalogue.php");
			}
			if ($this->action == "compte") {
				if ($_SESSION["connexion"] instanceof Customer) {
					$model = Customer::getAllInfoByUser($_SESSION["connexion"]->CustomerId);
					include("view/infocompte-client.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "compte-sales") {
				if ($_SESSION["connexion"] instanceof Employee) {
					$model = Employee::getAllInfoByEmployee($_SESSION["connexion"]->EmployeeId);
					include("view/infocompte-employee.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "connect") {
				$modele_customer = Customer::search($_POST["user"], $_POST["mdp"]);
				$modele = Employee::search($_POST["user"], $_POST["mdp"]);
				if ($modele_customer != []) {
					$_SESSION["connexion"] = $modele_customer;
					$model = Artist::getAllArtist();
					include("view/catalogue.php");
				} elseif ($modele != []) {
					$_SESSION["connexion"] = $modele;
					if ($_SESSION["connexion"]->Title == 'Sales Support Agent' || $_SESSION["connexion"]->Title == 'Sales Manager' || $_SESSION["connexion"]->Title == 'General Manager') {
						$model = InvoiceLine::getClassementbyGenre();
						include_once("view/classement.php");
					}
					if ($_SESSION["connexion"]->Title == 'IT Staff' || $_SESSION["connexion"]->Title == 'IT Manager') {
						$model = Customer::getAllCostumer();
						include("view/liste.php");
					}
				} else {
					$erreur = "badid";
					include("view/indexView.php");
				}
			}
			if ($this->action == "classement") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'Sales Support Agent' || $_SESSION["connexion"]->Title == 'Sales Manager' || $_SESSION["connexion"]->Title == 'General Manager') {
						$model = InvoiceLine::getClassementbyGenre();
						include("view/classement.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "statistiques") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'Sales Support Agent' || $_SESSION["connexion"]->Title == 'Sales Manager' || $_SESSION["connexion"]->Title == 'General Manager') {
						$model = InvoiceLine::getNombreClientByCountry();
						include("view/statistiques.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "resume-achats") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'Sales Support Agent' || $_SESSION["connexion"]->Title == 'Sales Manager' || $_SESSION["connexion"]->Title == 'General Manager') {

						$model_emp = Employee::getAllSupportAgent();
						$model_genre_3 = InvoiceLine::getClassementbyGenreSales(3);
						$model_pays_3 = InvoiceLine::getClassementbyCountrySales(3);
						$model_genre_4 = InvoiceLine::getClassementbyGenreSales(4);
						$model_pays_4 = InvoiceLine::getClassementbyCountrySales(4);
						$model_genre_5 = InvoiceLine::getClassementbyGenreSales(5);
						$model_pays_5 = InvoiceLine::getClassementbyCountrySales(5);
						include("view/resume-achats.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "deco") {
				session_destroy();
				header("Location: index.php");
			}
			if ($this->action == "deconnexion") {
				include("view/deconnexion.php");
			}
			if ($this->action == "genre") {
				$model = Genre::getAllGenre();
				include("view/catalogue-genre.php");
			}
			if ($this->action == "historique-achat") {
				if ($_SESSION["connexion"] instanceof Customer) {
					$model = InvoiceLine::getAllTrackBuy($_SESSION["connexion"]->CustomerId);
					include("view/historique-achat.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "infos-artiste") {
				$model = Album::getAllAlbumOfArtist($this->name);
				include("view/detailsartiste-client.php");
			}
			if ($this->action == "infos-genre") {
				$model = Track::getAllTrackOfGenre($this->name);
				include("view/musique-genre.php");
			}
			if ($this->action == "infos-playlist") {
				$model = Track::getAllTrackOfPlaylist($this->name);
				if ($model != [[], [], []]) {
					include("view/detailsplaylist-client.php");
				} else {
					$vide = Playlist::GetNamePlaylist($this->name);
					include("view/detailsplaylist-client-vide.php");
				}
			}
			if ($this->action == "liste") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'IT Manager' || $_SESSION["connexion"]->Title == 'IT Staff') {

						$model = Customer::getAllCostumer();
						include("view/liste.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "liste-emp") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'IT Manager' || $_SESSION["connexion"]->Title == 'IT Staff') {
						$model = Employee::getAllEmployee();
						include("view/liste.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "mentions-legales") {
				if (isset($_SESSION["connexion"])) {
					include("view/mentions-legales.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "modif-compte") {
				if ($_SESSION["connexion"] instanceof Customer) {
					$model = Customer::getAllInfoByUser($_SESSION["connexion"]->CustomerId);
					include("view/modifcompte-client.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "modif-compte-it") {
				if ($_SESSION["connexion"] instanceof Employee) {
					$model = Employee::getAllInfoByEmployee($_SESSION["connexion"]->EmployeeId);
					include("view/modifcompte-employee.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "modif-info-client") {
				if ($_SESSION["connexion"] instanceof Customer) {
					$model = Customer::getAllInfoByUser($_SESSION["connexion"]->CustomerId);
					if ($model->Password == $_POST["actual-password"]) {
						if ($_POST["new-password"] != "") {
							if ($_POST["new-password"] == $_POST["verif-password"]) {
								Customer::UpdateInfoClient($_SESSION["connexion"]->CustomerId,  $_POST["prenom"], $_POST["nom"], $_POST["entreprise"], $_POST["adresse"], $_POST["ville"], $_POST["region"], $_POST["pays"], $_POST["cp"], $_POST["phone"], $_POST["fax"], $_POST["mail"], $_POST["new-password"]);
								$model = Customer::getAllInfoByUser($_SESSION["connexion"]->CustomerId);
								include("view/infocompte-client.php");
							} else {
								$erreur = "notsame";
								include("view/modifcompte-client.php");
							}
						} else {
							Customer::UpdateInfoClient($_SESSION["connexion"]->CustomerId,  $_POST["prenom"], $_POST["nom"], $_POST["entreprise"], $_POST["adresse"], $_POST["ville"], $_POST["region"], $_POST["pays"], $_POST["cp"], $_POST["phone"], $_POST["fax"], $_POST["mail"], $_POST["actual-password"]);
							$model = Customer::getAllInfoByUser($_SESSION["connexion"]->CustomerId);
							include("view/infocompte-client.php");
						}
					} else {
						$erreur = "notright";
						include("view/modifcompte-client.php");
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}

			if ($this->action == "modif-info-employee") {
				if ($_SESSION["connexion"] instanceof Employee) {
					$model = Employee::getAllInfoByEmployee($_SESSION["connexion"]->EmployeeId);
					if ($model->Password == $_POST["actual-password"]) {
						if ($_POST["new-password"] != "") {
							if ($_POST["new-password"] == $_POST["verif-password"]) {
								Employee::UpdateInfoEmployee($_SESSION["connexion"]->EmployeeId, $_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["ville"], $_POST["region"], $_POST["pays"], $_POST["cp"], $_POST["phone"], $_POST["fax"], $_POST["mail"], $_POST["new-password"]);
								$model = Employee::getAllInfoByEmployee($_SESSION["connexion"]->EmployeeId);
								include("view/infocompte-employee.php");
							} else {
								$erreur = "notsame";
								include("view/modifcompte-employee.php");
							}
						} else {
							$a = Employee::UpdateInfoEmployee($_SESSION["connexion"]->EmployeeId, $_POST["nom"], $_POST["prenom"], $_POST["adresse"], $_POST["ville"], $_POST["region"], $_POST["pays"], $_POST["cp"], $_POST["phone"], $_POST["fax"], $_POST["mail"], $_POST["actual-password"]);
							$model = Employee::getAllInfoByEmployee($_SESSION["connexion"]->EmployeeId);
							include("view/infocompte-employee.php");
						}
					} else {
						$erreur = "notright";
						include("view/modifcompte-employee.php");
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "musique-artiste") {
				$model = Track::getAllTrackOfAlbum($this->id);
				include("view/detailsalbum-client.php");
			}
			if ($this->action == "new_playlist") {
				if ($_SESSION["connexion"] instanceof Employee) {
					if ($_SESSION["connexion"]->Title == 'IT Manager' || $_SESSION["connexion"]->Title == 'IT Staff') {

						$model = Playlist::getAllPlaylist();
						include("view/playlists-IT.php");
					} else {
						session_destroy();
						header('Location: index.php');
					}
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
			if ($this->action == "playlist") {
				$model = Playlist::getAllPlaylist();
				include("view/catalogue-playlist.php");
			}
			if ($this->action == "rgpd") {
				if (isset($_SESSION["connexion"])) {
					include("view/rgpd.php");
				} else {
					session_destroy();
					header('Location: index.php');
				}
			}
		} else {
			include("view/indexView.php");
		}
	}
}
