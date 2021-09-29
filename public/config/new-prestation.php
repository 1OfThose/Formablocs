<?php

require_once (__DIR__ . '../../db/global_db.php');

if(!empty($_POST['prestation'])){
	if ($_POST) {
		$sql = "INSERT INTO prestations (prestation, price, price_id, picto, link) VALUES (?,?,?,?,?)";
		$a = $pdo->prepare($sql)->execute([$_POST['prestation'], $_POST['price'], $_POST['price_id'], $_POST['picto'], $_POST['link']]);

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
				<h2>Ajouter une prestation</h2>
				<form method="post" action="" class="red-hover">

					<div class="form-group">
						<label for="name">Prestation</label>
						<br>
						<input type="text" name="prestation" id="name" required>
					</div>

					<div class="form-group">
						<label for="price">Prix</label>
						<br>
						<input type="text" name="price" id="price" required>
					</div>

					<div class="form-group">
						<label for="price_id">Price ID (Stripe)</label>
						<br>
						<input type="text" name="price_id" id="price_id" required>
					</div>

					<div class="form-group">
						<label for="picto">Picto</label>
						<br>
						<input type="text" name="picto" id="picto" value="ICONE ACCOMPAGNEMENT - PROFIL.svg" required>
					</div>

					<div class="form-group">
						<label for="link">Link</label>
						<br>
						<input type="text" name="link" id="link" required placeholder="lien necessaire pour paiement (tout texte sans espace est accepté)">
					</div>

					<button type="submit" class="submit-entry">Valider</button>

				</form>
			</div>
		</div>
	</div>

<?php

require_once (__DIR__ . '../../includes/footer.php');

?>