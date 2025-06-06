<?php 
session_start();
include_once './config/dbconnexion.php'; 
error_reporting(E_ALL);
ini_set('display_errors', 1);
if($_SERVER['REQUEST_METHOD']==='POST'){
     // Vérifier que tous les champs sont remplis
    if(!empty($_POST['nom']) && !empty($_POST['email'] ) && !empty($_POST['password'])){

        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        //verifions si l'email n'exist pas 
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        if($user){
            echo "Cet email est déjà utilisé. Veuillez en choisir un autre.";
        }else{
            $protegePassword = password_hash($password,PASSWORD_DEFAULT);

            $stm = $pdo->prepare("INSERT INTO users (nom,email,password) VALUES (:nom,:email,:password)");
            $stm->execute([
                ":nom"=>$nom,
                ":email"=>$email,
                ":password"=> $protegePassword 
            ]);
            $_SESSION['user']=$email;
            // Créer le cookie qui expire dans 30 jours
            setcookie("user_registre",$email,time() + (86400 * 30), '/');
            setcookie("user_password",$password,time() + (86400 * 30), '/');
            echo "Inscription réussie ! <a href='login.php'>Se connecter</a>";
        }
    }else {
        echo "Veuillez remplir tous les champs.";
    }

    $saveCookieEmail= isset($_COOKIE['user_registre']) ? $_COOKIE['user_registre'] : "";
    $saveCookiePassword= isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : "";
}
?>
