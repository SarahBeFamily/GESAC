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

	<datalist id="airlines">
		
		<option value="Ryanair">
			<div>
				<p class="titlelist">Ryanair</p>
				<p class="location">Napoli, Italia</p>
			</div>
			CDC
		</option>

		<option value="Volotea">
			<div>
				<p class="titlelist">Volotea</p>
				<p class="location">Padova, Italia</p>
			</div>
			CDC
		</option>

	</datalist>

	<input class="departure" role="combobox" type="text" name="departure" list="" data-list-id="airports" value="Napoli Internazionale (NAP)" placeholder="Partenze" required autocomplete="off">
	<a id="change" role="button"></a>
	<input class="arrival" role="combobox" type="text" name="arrival" list="" data-list-id="airports" value="" placeholder="Arrivi" required autocomplete="off">

	<input class="airline" role="combobox" type="text" name="airline" list="" data-list-id="airlines" value="" placeholder="Compagnia">
	<input type="text" name="flight" value="" placeholder="Numbero Volo">

	<input class="submit" type="submit" value="Cerca Volo">

</form>