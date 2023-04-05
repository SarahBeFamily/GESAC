<form action="" id="filter-flight">

	
	<div class="relative">
		<input class="departure" type="text" name="departure" value="Napoli Internazionale (NAP)" placeholder="Partenza" disabled readonly>
	</div>

	<div class="relative">
		<input class="arrival" role="combobox" type="text" name="arrival" list="" data-list-id="directs" value="" placeholder="Arrivi" required autocomplete="off">
	
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
	</div>

	<div class="relative">
		<input class="airline" role="combobox" type="text" name="airline" list="" data-list-id="airlines" value="" placeholder="Compagnia">

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
	</div>

	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" name="from" placeholder="Dal">
	</div>

	<div class="input-wrapper --calendar">
		<input class="drop calendar" type="text" name="to" placeholder="Al">
	</div>

	<input class="submit" type="submit" value="Cerca Volo">

</form>