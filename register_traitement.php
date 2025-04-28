<?php include_once ('./config/dbconnexion.php');?>
<?php 
//bon si la methode utiliser est post et on verifie que les champs ne sont pas vide {{!empty}} on cree les variables
if ($_SERVER['REQUEST_METHOD']=== $_POST) {
   if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']))
   //si tous tes correct on stock les data sur les variables
   {
   
   }
}


?>