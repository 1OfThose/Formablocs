<?php

require_once (__DIR__ . '/../../db/global_db.php');
$stm = $pdo->query("SELECT * FROM formations");
$formations = $stm->fetchall(PDO::FETCH_ASSOC);

$stm2 = $pdo->query("SELECT * FROM modules_formation_adultes");
$module1 = $stm2->fetchall(PDO::FETCH_ASSOC);

$stm3 = $pdo->query("SELECT * FROM modules_formation_conseiller");
$module2 = $stm3->fetchall(PDO::FETCH_ASSOC);

$stm4 = $pdo->query("SELECT * FROM prestations");
$prestations = $stm4->fetchall(PDO::FETCH_ASSOC);

?>

<?php
$page = 'admin';
require_once (__DIR__ . '/../../includes/header.php');
?>

<section id="admin">
	<div class="container">
		<div class="admin-main-container">
			<p>Pensez à apportez vos modifications sur le compte stripe aussi en suivant <a href="https://dashboard.stripe.com/test/products?active=true" target="_blank">ce lien</a></p>
			<div class="admin-btns">
				<a href="../../config/new-formation.php" class="red-hover"><button>Ajouter une formation</button></a>
				<a href="../../config/new-module-2.php" class="red-hover"><button>Ajouter un module formation d'adultes</button></a>
				<a href="../../config/new-module.php" class="red-hover"><button>Ajouter un module formation conseiller</button></a>
				<a href="../../config/new-prestation.php" class="red-hover"><button>Ajouter une prestation</button></a>
			</div>
			<div class="admin-container">
	
				<h1>Formations</h1>
				<table class="users-table">
					<tr>
						<th>ID</th>
						<th>Formation</th>
						<th>Prix</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php foreach($formations as $row) { ?>
						<tr>
							<td><?=$row['id']?></td>
							<td><?=$row['formation']?></td>
							<td><?=$row['price']?> €</td>
							<td><a href="../../config/delete-formation.php?id=<?=$row['id']?>&link=<?=$row['link']?>"><span class="remove">Supprimer</span></a></td>
							<td><a href="../../config/edit-formation.php?id=<?=$row['id']?>"><span class="edit">Modifier</span></a></td>
						</tr>
					<?php } ?>
				</table>
	
				<h1>Modules Formation d'Adultes</h1>
				<table class="users-table">
					<tr>
						<th>ID</th>
						<th>Module</th>
						<th>Prix</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php foreach($module1 as $mod) { ?>
						<tr>
							<td><?=$mod['id']?></td>
							<td><?=$mod['module']?></td>
							<td><?=$mod['price']?> €</td>
							<td><a href="../../config/delete-module.php?id=<?=$mod['id']?>&link=<?=$mod['link']?>"><span class="remove">Supprimer</span></a></td>
							<td><a href="../../config/edit-module.php?id=<?=$mod['id']?>"><span class="edit">Modifier</span></a></td>
						</tr>
					<?php } ?>
				</table>
	
				<h1>Modules Formation Conseiller</h1>
				<table class="users-table">
					<tr>
						<th>ID</th>
						<th>Module</th>
						<th>Prix</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php foreach($module2 as $mod2) { ?>
						<tr>
							<td><?=$mod2['id']?></td>
							<td><?=$mod2['module']?></td>
							<td><?=$mod2['price']?> €</td>
							<td><a href="../../config/delete-module-2.php?id=<?=$mod2['id']?>&link=<?=$mod2['link']?>"><span class="remove">Supprimer</span></a></td>
							<td><a href="../../config/edit-module-2.php?id=<?=$mod2['id']?>"><span class="edit">Modifier</span></a></td>
						</tr>
					<?php } ?>
				</table>
	
				<h1>Prestations</h1>
				<table class="users-table">
					<tr>
						<th>ID</th>
						<th>Prestation</th>
						<th>Prix</th>
						<th colspan="2">Actions</th>
					</tr>
					<?php foreach($prestations as $pre) { ?>
						<tr>
							<td><?=$pre['id']?></td>
							<td><?=$pre['prestation']?></td>
							<td><?=$pre['price']?> €</td>
							<td><a href="../../config/delete-prestation.php?id=<?=$pre['id']?>&link=<?=($pre['link'])?>"><span class="remove">Supprimer</span></a></td>
							<td><a href="../../config/edit-prestation.php?id=<?=$pre['id']?>"><span class="edit">Modifier</span></a></td>
						</tr>
					<?php } ?>
				</table>
	
			</div>
		</div>
	</div>
</section>



<?php

require_once (__DIR__ . '/../../includes/footer.php');

?>