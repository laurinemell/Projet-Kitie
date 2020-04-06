function synchro(){
	include 'fonctions.php';
	var listing=recuperer_donnees_listing();
	var BD=recuperer_donnees_BD();
	comparer_donnees(listing,BD);
}
