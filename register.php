<?php 
session_start();


;?>
<!-- register.php -->
 <!-- on cree {{register_traitement.php }}pour la login du creation du comptes -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Créer un compte</h2>

    <form action="register_traitement.php" method="POST" class="space-y-4">
        <input type="text" name="nom" placeholder="Votre nom complet" required class="w-full p-3 border rounded-lg">
        <input type="email" name="email" placeholder="Votre email" required class="w-full p-3 border rounded-lg">
        <input type="password" name="password" placeholder="Votre mot de passe" required class="w-full p-3 border rounded-lg">
        <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600">S'inscrire</button>
    </form>
     <!-- on se dirigera vers le lien login apres creation du compte -->
    <p class="mt-4 text-center text-gray-600">
        Déjà un compte ? <a href="login.php" class="text-blue-500 hover:underline">Connectez-vous</a>
    </p>
</div>

</body>
</html>
