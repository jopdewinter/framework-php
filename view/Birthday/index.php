<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>naam</th>
			<th>dag</th>
			<th>maand</th>
            <th>jaar</th>
		</tr>
		
		<?php foreach ($brithdays as $birthday) { ?>
		<tr>
			<td><?= $birthday['id']; ?></td>
			<td><?= $birthday['name']; ?></td>
			<td><?= $birthday['day']; ?></td>
			<td><?= $birthday['month']; ?></td>
            <td><?= $birthday['year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>