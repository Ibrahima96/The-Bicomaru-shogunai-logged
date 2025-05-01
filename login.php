
<!-- login.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Se connecter</h2>

    <form action="login_traitement.php" method="POST" class="space-y-4">
        <input type="email" name="email" placeholder="Votre email" required class="w-full p-3 border rounded-lg">
        <input type="password" name="password" placeholder="Votre mot de passe" required class="w-full p-3 border rounded-lg">
        <button type="submit" class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600">Se connecter</button>
    </form>

    <p class="mt-4 text-center text-gray-600">
        Pas encore de compte ? <a href="register.php" class="text-green-500 hover:underline">Créer un compte</a>
    </p>
</div>

</body>
</html>
