<?php

$page ='forum';
require_once (__DIR__ . '/includes/header.php');

?>

<section id="home">
	<div class="home-bg">
		<img src="<?=$domain?>/img/banners/Forum_ 1980x714 px.png" alt="">
	</div>
</section>

<section id="forum-body">
	<div class="container">
		<div class="forum-wrapper">
			<div class="forum-search">
				<form class="search-form" action="#">
					<input type="text" placeholder="Recherchez des mots-clés" required>
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div class="forum-messages">
				<div class="forum-messages-container">

					<div class="forum-top">

						<span class="dropdown-el">
							<input type="radio" name="sortType" value="Trier par" checked="checked" id="sort-relevance">
							<label for="sort-relevance" class="low-opacity">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-best">
							<label for="sort-best">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-low">
							<label for="sort-low">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-high">
							<label for="sort-high">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-brand">
							<label for="sort-brand">Trier par</label>

							<input type="radio" name="sortType" value="Trier par" id="sort-name">
							<label for="sort-name">Trier par</label>

						</span>

						<span class="dropdown-el">
							<input type="radio" name="Filtres" value="Filtres" checked="checked" id="Filtres-relevance">
							<label for="Filtres-relevance" class="low-opacity">Filtres</label>

							<input type="radio" name="Filtres" value="Filtres" id="Filtres-best">
							<label for="Filtres-best">Filtres</label>

							<input type="radio" name="Filtres" value="Filtres" id="Filtres-low">
							<label for="Filtres-low">Filtres</label>

							<input type="radio" name="Filtres" value="Filtres" id="Filtres-high">
							<label for="Filtres-high">Filtres</label>

							<input type="radio" name="Filtres" value="Filtres" id="Filtres-brand">
							<label for="Filtres-brand">Filtres</label>

							<input type="radio" name="Filtres" value="Filtres" id="Filtres-name">
							<label for="Filtres-name">Filtres</label>

						</span>


					</div>

					<div class="forum-message">
						<div class="forum-user-img">
							
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Bonjour, je suis salarié en CDI dans une banque en tant que conseiller bancaire particuliers. Je forme les nouveaux arrivants mais j’aimerais me professionnaliser, voir changer de secteur. Comment financer ma formation ? Et la rémunération, comment ça se passe ?</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Bonjour, nous sommes un club sportif professionnel de rugby. Nous souhaitons ouvrir notre propre CFA. Nous avons une obligation de formation de nos joueurs mineurs et d’accompagnement à la reconversion de nos sénior. Pouvez vous nous accompagner ?</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Bonjour, je souhaite suivre deux modules de la formation CIP cette année, et les autres l’année suivante. Est ce que j’aurai quand même mon diplôme à la fin ?</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
							
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Bonjour, je suis en charge du service formation continue de mon établissement. Nous sommes en pleine démarche de certification qualité et souhaitons être accompagnés. Je suis cependant un peu inquiet du tout distanciel, pouvez vous me préciser les modalités d’accompagnement ?</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<div class="forum-message">
						<div class="forum-user-img">
						
						</div>
						<div class="forum-user-message">
							<h3>Jean Bonbeur</h3>
							<p>Bonjour, je ne suis pas contre le distanciel mais je souhaiterais vous rencontrer, si possible physiquement avant de me lancer, est-ce possible ?</p>
							<img src="<?=$domain?>/icons/FLECHE DROITE BLEUE.svg" alt="">
						</div>
					</div>
					<img src="<?=$domain?>/icons/FLECHE BAS BLEUE.svg" alt="">
				</div>
				<div class="forum-filters-container">
					<h1>Mes filtres</h1>
					<div class="filter">
						<button class="active-filter"></button>
						<h2>Financement</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Formations</h2>
					</div>
					<div class="filter">
						<button class="active-filter"></button>
						<h2>Accompagnements</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
					<div class="filter">
						<button class="inactive-filter"></button>
						<h2>Informations</h2>
					</div>
				</div>
			</div>
			<div class="forum-bottom">
				<h1>Vous ne trouvez pas votre bonheur sur le forum ?</h1>
				<p>Vous souhaitez plus d’information, sur une prestation, une formation ou l’accompagnement proposé par Formablocs, n’hésitez pas à nous contacter. Nous nous engageons à vous répondre sous 2 jours ouvrés. A très bientôt !</p>
				<a href="<?=$domain?>/../contact" class="red-hover"><button>Nous contacter</button></a>
			</div>
		</div>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?=$domain?>/js/trier.js"></script>
<?php

require_once (__DIR__ . '/includes/footer.php');

?>