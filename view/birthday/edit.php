<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="name" value="<?= $birthday['birthday_name']; ?>">
		<input type="text" name="day" value="<?= $birthday['birthday_day']; ?>">
        <input type="text" name="month" value="<?= $birthday['birthday_month']; ?>">
        <input type="text" name="year" value="<?= $birthday['birthday_year']; ?>">

		<input type="hidden" name="id" value="<?= $birthday['birthday_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>
</div>