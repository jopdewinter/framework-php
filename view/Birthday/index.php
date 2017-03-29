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
			<td><?= $birthday['birthday_id']; ?></td>
			<td><?= $birthday['birthday_name']; ?></td>
			<td><?= $birthday['birthday_day']; ?></td>
			<td><?= $birthday['birthday_month']; ?></td>
            <td><?= $birthday['birthday_year']; ?></td>
			<td><a href="<?= URL ?>birthday/edit/<?= $birthday['birthday_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>birthday/create">Toevoegen</a>
</div>