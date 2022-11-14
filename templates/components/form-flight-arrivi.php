<form action="" id="search-flight">

	<datalist id="airports">
		
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

	<input class="departure" type="text" name="departure" list="airports" value="" placeholder="Partenze" required>
	<a id="change" role="button"></a>
	<input class="arrival" type="text" name="arrival" list="airports" value="Napoli Internazionale (NAP)" placeholder="Arrivi" required>

	<input type="text" name="airline" value="" placeholder="Compagnia">
	<input type="text" name="flight" value="" placeholder="Numbero Volo">

	<input class="submit" type="submit" value="Cerca Volo">

</form>