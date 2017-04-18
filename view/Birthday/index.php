<div class="container">

	<h1>Kalender</h1>
	<table border="1">
		<tr>
			<th>Naam</th>
			<th>Dag</th>
			<th>Maand</th>
			<th>Jaar</th>
			<th colspan="2">Actie</th>
		</tr>
		
		<?php foreach ($birthdays as $birthday) { ?>
		<tr>
			<td><?= $birthday['person']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
			<td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">Aanpassen</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>">Verwijderen</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">+ Toevoegen</a>
</div>