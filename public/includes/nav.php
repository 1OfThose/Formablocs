<header>
	<div class="container">
		<div class="header-main">
			<div class="header-info">
				<div class="info-a">
					<a href="tel:+330200991188">
						<img src="<?=$domain?>/icons/TELEPHONE.svg" alt="Téléphone">
						<span>02 00 99 11 88</span>
					</a>
				</div>
				<div class="info-a">
					<a href="mailto:contact@formablocs.com">
						<img src="<?=$domain?>/icons/ENVELOPPE.svg" alt="Mail">
						<span>contact@formablocs.com</span>
					</a>
				</div>
			</div>
			<div class="right-icons">

				<a href="<?=$domain?>/../index"><img src="<?=$domain?>/icons/MAISON BLANCHE.svg" alt="Accueil"></a>

				<?php if (isset($_SESSION['user_id']) && $_SESSION['user_role'] == "user") { ?>
					<a href="<?=$domain?>/../includes/logout.php"><img src="<?=$domain?>/icons/SE DECONNECTER.svg" alt="Déconnexion"></a>
					<div class="user-account">
						<a class="user-icon" href="<?=$domain?>/../users/user.php">
							<img src="<?=$domain?>/icons/USER.svg" alt="Votre compte"> 
							<span><?php echo $_SESSION['user_name']?></span> 
						</a>
					</div>
				<?php } elseif (isset($_SESSION['user_id']) && $_SESSION['user_role'] == "admin") { ?>
					<a href="<?=$domain?>/../includes/logout.php"><img src="<?=$domain?>/icons/SE DECONNECTER.svg" alt="Déconnexion"></a>
					<div class="user-account">
						<a class="user-icon" href="<?=$domain?>/../users/admin/admin.php">
							<img src="<?=$domain?>/icons/USER.svg" alt="Votre compte"> 
							<span><?php echo $_SESSION['user_name']?></span> 
						</a>
					</div>
				<?php } else { ?>
					<div class="user-account">
						<a class="user-icon" href="<?=$domain?>/../login-signup">
							<img src="<?=$domain?>/icons/USER.svg" alt="Login"> 
							<span>Se connecter</span> 
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</header>

<div class="navbar">
	<div class="container">
		<div class="nav">
			<div class="logo">
				<a href="<?=$domain?>/../index"><img src="<?=$domain?>/img/logo.png" alt="Formablocs | Accueil"></a>
			</div>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<div class="navlinks">
				<ul class="navlist">
					<li class="linko"><a href="<?=$domain?>/../formations" class="underline <?php if($page == 'formations'){echo 'active';} ?>">Nos formations</a></li>
					<li class="linko"><a href="<?=$domain?>/../prestations" class="underline <?php if($page == 'prestations'){echo 'active';} ?>">Nos prestations de conseil</a></li>
					<li class="linko"><a href="<?=$domain?>/../financement" class="underline <?php if($page == 'financement'){echo 'active';} ?>">Financement</a></li>
					<li class="linko"><a href="<?=$domain?>/../contact" class="underline <?php if($page == 'contact'){echo 'active';} ?>">Contact</a></li>
					<li class="linko"><a href="<?=$domain?>/../forum" class="underline <?php if($page == 'forum'){echo 'active';} ?>">Forum</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>