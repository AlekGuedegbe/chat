<!DOCTYPE html>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/comp.js" type="text/javascript"></script>

  <head>
    <meta charset="UTF-8">
    <title>Chat jQuery</title>
      <style type="text/css">
      #conversation {
        width: 300px;
        height: 400px;
        border: black 1px solid;
        background-color: #efecca;
        overflow-x: hidden;
        overflow-y: scroll; 
        padding: 5px;
        margin-left: 10px;
      }
      fieldset {
        width: 330px;
        background-color: #e6e2af;
        border: black 1px solid;
      }    
    </style>
  </head>
  
  <body>
   

    <?php  
      
      $nom = $_POST['nom'];                    //On récupère le pseudo et on le stocke dans une variable
      $message = $_POST['message'];            //On fait de même avec le message
      $ligne = $nom.' > '.$message.'<br>';     //Le message est créé 
      $leFichier = file('ac.html');             //On lit le fichier ac.htm et on stocke la réponse dans 
                                                 // une variable (de type tableau)
      array_unshift($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au 
                                                // début du tableau
      file_put_contents('ac.html', $leFichier); //On écrit le contenu du tableau $leFichier dans le 
                                                 // fichier ac.htm
    ?>  
 


   <fieldset>
    
     <legend>Un chat en jQuery</legend>
      <div id="conversation"></div><br />
      <form action="#" method="post">
        <input type="text" id="nom" value="pseudo" size="6">
        <input type="text" id="message" size="27">
        <button type="button" id="envoyer" title="Envoyer"><img src="envoyer.gif"></button>
      </form>
    </fieldset>

  </body>
</html>
