<div class="container">

	<h1>Toevoegen</h1>

	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="Naam">
		<input type="text" name="day" placeholder="Dag">
		<input type="text" name="month" placeholder="Maand">
		<input type="text" name="year" placeholder="Jaar">

		<input type="submit" value="Verzenden">
	
	</form>

</div>