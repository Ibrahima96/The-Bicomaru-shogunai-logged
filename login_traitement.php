<?php include_once './config/dbconnexion.php'; 

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $user_login = $_POST['email'];
        $password = $_POST['password'];

        // Préparation d'une requête pour récupérer un seul utilisateur
        $stm = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stm->execute([$user_login]);
        $user = $stm->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['logged'] = $user_login;
            // header("Location: register.php");
            echo "bienvenu ". $_SESSION['logged'];
            exit(); // Important après un header
        } else {
            echo "Veuillez saisir les bons identifiants.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}
?>



