<form action="" id="filter-flight">

	<!-- KEY DATALIST FOR DIRECT FLIGHTS -->
	<datalist id="directs">
		
		<option value="Napoli Internazionale (NAP)">
			<div>
				<p class="titlelist">Napoli Internazionale (NAP)</p>
				<p class="location">Napoli, Italia</p>
			</div>
			CDC
		</option>

		<option value="San Diego">
			<div>
				<p class="titlelist">San Diego</p>
				<p class="location">California, USA</p>
			</div>
			SAN
		</option>

		<option value="Thera">
			<div>
				<p class="titlelist">Thera</p>
				<p class="location">Santorini, Grecia</p>
			</div>
			JTR
		</option>

		<option value="Tenerife">
			<div>
				<p class="titlelist">Santa Cruz de Tenerife</p>
				<p class="location">Isole Canarie, Spagna</p>
			</div>
			TCI
		</option>

	</datalist>

	<input class="departure" type="text" name="departure" value="Napoli Internazionale (NAP)" placeholder="Partenza" disabled>

	<input class="drop arrival" type="text" name="arrival" list="directs" value="" placeholder="Destinazione" required>

	<input class="airline" type="text" name="airline" value="" placeholder="Compagnia">
	
	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" pattern="\d{4}-\d{2}-\d{2}" name="from" placeholder="Dal" required>
	</div>

	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" pattern="\d{4}-\d{2}-\d{2}" name="to" placeholder="Al" required>
	</div>

	<input class="submit" type="submit" value="Cerca Volo">

</form>