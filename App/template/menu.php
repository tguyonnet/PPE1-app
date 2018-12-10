<body id="main-page">
	<header>
		<div>
			<p><?php echo Config::APPLI_NAME.' '.Config::APPLI_VERSION; ?></p>
		</div>
		<nav>
			<ul>
                <li><a href="../index.php?c=utilisateur&action=profil">Handball</a></li>
				<li><a href="../index.php?c=parametres">Paramètres</a></li>
				<li><a href="../index.php?c=connexion&action=deconnecter">Déconnexion</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<nav>
			<ul>
				<li><a href="../index.php?c=Accueil">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span>Accueil</span>
                </a></li>

				<li><a href="../index.php?c=Formation">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span>Formation</span>
                </a></li>

				<li><a href="../index.php?c=Carriere">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <span>Carriere</span>
                </a></li>

				<li><a href="../index.php?c=Absence">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                        <span>Absence</span>
                </a></li>

			</ul>
		</nav>
