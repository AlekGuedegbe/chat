
<!DOCTYPE html> 
  <head> 
    <title>Exemple de page PHP</title> 
  </head> 
  <body> 
    <?php  
    	$nom = $_POST['nom'];                    //On récupère le pseudo et on le stocke dans une variable
		$message = $_POST['message'];            //On fait de même avec le message
		$ligne = $nom.' > '.$message.'<br>';     //Le message est créé 
		$leFichier = file('ac.html');             //On lit le fichier ac.htm et on stocke la réponse dans une 	                                           variable (de type tableau)
		array_unshift($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au début 		                                   du tableau
		file_put_contents('ac.html', $leFichier); //On écrit le contenu du tableau $leFichier dans le fichier 		                                        ac.htm
    ?>  
 
  </body> 
</html>