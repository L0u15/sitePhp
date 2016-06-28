<?php
include '../lib/includes.php';
include '../partials/admin_header.php';

$select = $bd->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();

/**
* Suppression
**/
if(isset($_GET['delete'])){
	checkCsrf();
	$id = $bd->quote($_GET['delete']);
	$bd->query("DELETE FROM categories WHERE id=$id");
	flash('La catégorie a bien été supprimée');
}

?>
<h1>Les catégories</h1>
<?= var_dump($categories) ?>
<table class="tablet table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($categories as $category): ?>
			<tr>
				<td><?= $category['id']; ?></td>
				<td><?= $category['name']; ?></td>
				<td>
					<a href="category_edit.php?id=<?= $category['id']; ?>" class="btn btn-default">Edit</a>
					<a href="?delete=<?= $category['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('Êtes vous sûr?');">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>

</table>
<?php include '../lib/debug.php'; ?>
<?php include '../partials/footer.php'; ?>