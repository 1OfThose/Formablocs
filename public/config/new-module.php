<?php

require_once (__DIR__ . '../../db/global_db.php');

if(!empty($_POST['module'])){
	if ($_POST) {
		$sql = "INSERT INTO modules_formation_adultes (module, description, price, price_id, link) VALUES (?,?,?,?,?)";
		$a = $pdo->prepare($sql)->execute([$_POST['prestation'], $_POST['price'], $_POST['price_id'], $_POST['description'], $_POST['link']]);

		$sql2 = "INSERT INTO toutes_formations (formation, price_id, link) VALUES (?,?,?)";
		$b = $pdo->prepare($sql2)->execute([$_POST['prestation'], $_POST['price_id'], $_POST['link']]);
		header("Location: ../users/admin/admin.php");
	}
}

?>

<?php

$page = 'admin';
require_once (__DIR__ . '../../includes/header.php');

?>

	<div class="admin-form">
		<div class="container">
			<div class="admin-form-container">
				<h2>Ajouter un module formation conseiller</h2>
				<form method="post" action="" class="red-hover">

					<div class="form-group">
						<label for="name">Module</label>
						<br>
						<input type="text" name="module" id="name" required placeholder="Nom module">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<br>
						<textarea type="text" name="description" id="desc" required placeholder="Description"></textarea>
					</div>

					<div class="form-group">
						<label for="price">Prix</label>
						<br>
						<input type="text" name="price" id="price" required placeholder="Sous format 'xxxx.xx'">
					</div>

					<div class="form-group">
						<label for="price_id">Price ID (Stripe)</label>
						<br>
						<input type="text" name="price_id" id="price_id" required placeholder="Recuperer le price_id du produit sur Stripe">
					</div>

					<div class="form-group">
						<label for="picto">Link</label>
						<br>
						<input type="text" name="link" id="picto" required placeholder="lien necessaire pour paiement (tout texte sans espace est accepté)">
					</div>

					<button type="submit" class="submit-entry">Valider</button>

				</form>
			</div>
		</div>
	</div>

<?php

require_once (__DIR__ . '../../includes/footer.php');

?>