<?php
include('template/head.php');
?>

<body class="bg-dark">
	<div id="main-connexion">
		<title>Connexion</title>
		<form method="POST" action="index.php?action=connecter">
			<label for="email" >Adresse email</label>
			<input type="email" id="email" name="email" placeholder="Votre adresse mail" value="petitjean.elise@voila.fr">
			<label for="mdp" >Mot de passe</label>
			<input type="password" id="mdp" name="password" placeholder="Votre mot de passe" value="pwDeschamps">
			<input type="submit" value="Connexion">
		</form>
        <small><?php echo $alerte; ?></small>
	</div>
</body>
</html>
