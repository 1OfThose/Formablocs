<?php

require_once (__DIR__ . '../../db/global_db.php');

if(!empty($_POST['module'])){
	if ($_POST) {

		$data = [
			'module' => $_POST['module'],
			'price' => $_POST['price'],
			'description'  => $_POST['description'],
			'price_id' => $_POST['price_id'],
			'picto' => $_POST['picto'],
			'id' => $_GET['id']
		];

		$sql = "UPDATE formations SET module=:module, price=:price, price_id=:price_id, picto=:picto, description=:description WHERE id=:id";
		$a = $pdo->prepare($sql)->execute($data);
		header("Location: ../users/admin/admin.php");
	}
}

if ($_GET) {
	$stm = $pdo->query("SELECT * FROM formations WHERE id=" . $_GET['id']);
	$product = $stm->fetch(PDO::FETCH_ASSOC);
}

?>

<?php

$page = 'admin';
require_once (__DIR__ . '../../includes/header.php');

?>

<div class="admin-form">
		<div class="container">
			<div class="admin-form-container">
				<h2>Modifier une formation</h2>
				<form method="post" action="" class="red-hover">

					<div class="form-group">
						<label for="name">Formation</label>
						<br>
						<input type="text" name="item" id="name" value="<?=$product['formation']?>">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<br>
						<textarea type="text" name="description" id="desc" required><?=$product['description']?></textarea>
					</div>

					<div class="form-group">
						<label for="price">Prix</label>
						<br>
						<input name="price" id="price" value="<?=$product['price']?>" required>
					</div>

					<div class="form-group">
						<label for="price_id">Price ID</label>
						<br>
						<input type="text" name="price_id" id="price_id" value="<?=$product['price_id']?>">
					</div>

					<div class="form-group">
						<label for="picto">Picto</label>
						<br>
						<input type="text" name="picto" id="picto" value="<?=$product['picto']?>">
					</div>


					<button type="submit" class="submit-entry">Valider</button>
				</form>
			</div>
		</div>
	</div>

<?php

require_once (__DIR__ . '../../includes/footer.php');

?>