<?php
/**
 * Partenze / arrivi template
 */
?>

<section id="pagetitle" class="dark-mode partenze-arrivi">

	<div class="col" id="pt-partenze">
		<?php get_component('breadcrumbs', 'Partenze', 'dark', true); ?>

		<h1 class="page-title">Partenze in tempo reale</h1>
		<p>
			Cerca i voli e mettili tra i preferiti: a partire da tre giorni prima del volo.
		</p>
	</div>

	<div class="col hidden" id="pt-arrivi">
		<?php get_component('breadcrumbs', 'Arrivi', 'dark', true); ?>

		<h1 class="page-title">Arrivi in tempo reale</h1>
		<p>
			Cerca i voli e mettili tra i preferiti: a partire da tre giorni prima del volo.
		</p>
	</div>

	<div class="col hidden" id="pt-single-flight">
		<?php get_component('breadcrumbs', 'Dettagli volo', 'dark', true); ?>

		<h1 class="page-title">Volo per <span class="city">Napoli</span></h1>
		<p>
			<span class="num-flight">RA18649</span>  |  <span class="airline">Ryanair</span>
		</p>
	</div>

	<div class="forms-tab">
		<div id="tab-voli" class="in-pagetitle">

			<!-- TAB VOLI STARTS -->
			<div class="main-tabs">

				<div class="tabs">
					<div class="active" data-menu-tab="#departures">
						<i class="icon icon-takeoff --active"></i>
						Partenze
					</div>

					<div data-menu-tab="#arrivals">
						<i class="icon icon-landing"></i>
						Arrivi
					</div>
				</div>

				<!-- COLUMN TWO EXTRA -->
				<div class="extra">
					<div class="hour">
						<i class="icon icon-clock"></i>
						<span id="hour">12:08</span>
					</div>

					<div class="meteo">
						<i class="icon icon-weather coperto"></i>
						<span id="temperature">22°C</span>
					</div>
				</div>
			</div>

			<div class="main-tabs-content">
				<div id="departures">
					<?php get_component('form-flight', '', false); ?>
				</div>

				<div id="arrivals" class="hidden">
					<?php get_component('form-flight-arrivi', '', false); ?>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- SECTION PARTENZE STARTS -->
<section id="sec-partenze">

	<div class="flights">

		<!-- TITLES ROW STARTS - DESKTOP ONLY -->
		<div class="titles row">
			<div class="col timetables row">
				<div class="col">Previsto</div>
				<div class="col">Partenza</div>
			</div>
			<div class="col flights-info">Destinazione | N° Volo | Compagnia Aerea</div>
			<div class="col">Check-in</div>
			<div class="col">Gate</div>
			<div class="col status">Status</div>
		</div>
		<!-- / TITLES ROW ENDS - DESKTOP ONLY -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock on-late">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">26</span>'
				</div>
				<div class="col actual on-late">12:56</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(IST)</span>
						<span class="name">Instanbul</span> &nbsp; <span class="acronym mobile-hidden">IST</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Turkish Airlines</span>
					</div>

					<div class="slidee">
						<div class="marqueeElement">V701732</div>
						<div class="marqueeElement">AF01579</div>
						<div class="marqueeElement">W601749</div>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				A3
			</div>

			<div class="col status closed">
				<i class="icon icons-status-closed"></i> <span class="status-label">Chiuso</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/condor.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(DBV)</span>
						<span class="name">Dubrovnik</span> &nbsp; <span class="acronym mobile-hidden">DBV</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Condor Airlines</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				01-02-03-04-05-06
			</div>

			<div class="col gate">
				B15
			</div>

			<div class="col status departed">
				<span class="status-label">Partito</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock on-late">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">26</span>'
				</div>
				<div class="col actual on-late">12:56</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(AMS)</span>
						<span class="name">Amsterdam</span> &nbsp; <span class="acronym mobile-hidden">AMS</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">KLM</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				B2
			</div>

			<div class="col status closed">
				<i class="icon icons-status-now-boarding"></i> <span class="status-label">Imbarco</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<?php 
		// Include the cta section "General"
		include_section('cta-general', 'posto-auto', 'Acquista il tuo Posto Auto', 'Parcheggi');
		?>

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/airfrance.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(CDG)</span>
						<span class="name">Paris</span> &nbsp; <span class="acronym mobile-hidden">CDG</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">AirFrance</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				A2
			</div>

			<div class="col status boarding">
				<i class="icon icons-status-boarding"></i> <span class="status-label">Imbarco</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/airfrance.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(MRS)</span>
						<span class="name">Marseille</span> &nbsp; <span class="acronym mobile-hidden">MRS</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">AirFrance</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				B8
			</div>

			<div class="col status closed">
				<i class="icon icons-status-closed"></i> <span class="status-label">Chiuso</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/easyjet.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(BCN)</span>
						<span class="name">Barcelona</span> &nbsp; <span class="acronym mobile-hidden">BCN</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">EasyJet</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				B6
			</div>

			<div class="col status lastcall">
				<i class="icon icons-status-lastcall"></i> <span class="status-label">Ultima Chiamata</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/britishairways.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(MAN)</span>
						<span class="name">Manchester</span> &nbsp; <span class="acronym mobile-hidden">MAN</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">British Airways</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				A4
			</div>

			<div class="col status departed">
				<span class="status-label">Partito</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<?php 
		// Include the cta section "General"
		include_section('cta-general', 'fast-track', 'Imbarco più veloce - Fast Track', 'Fast Track');
		?>

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/swiss.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(ZRH)</span>
						<span class="name">Zurich</span> &nbsp; <span class="acronym mobile-hidden">ZRH</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Swiss Airlines</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				C3
			</div>

			<div class="col status departed">
				<span class="status-label">Partito</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/ryanair.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(JTR)</span>
						<span class="name">Santorini</span> &nbsp; <span class="acronym mobile-hidden">JTR</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Ryanair</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				C8
			</div>

			<div class="col status departed">
				<span class="status-label">Partito</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/tuifly.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(BRU)</span>
						<span class="name">Bruxelles</span> &nbsp; <span class="acronym mobile-hidden">BRU</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">TUIFly</span>
					</div>

				</div>
			</div>

			<div class="col check-in">
				<div class="label mobile-only">Check-in</div>
				722-684
			</div>

			<div class="col gate">
				A2
			</div>

			<div class="col status departed">
				<span class="status-label">Partito</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<a href="#" class="link">Mostra di più</a>

	</div>

</section>

<!-- SECTION PARTENZE STARTS -->
<section id="sec-arrivi" class="hidden">

	<div class="flights">

		<!-- TITLES ROW STARTS - DESKTOP ONLY -->
		<div class="titles row">
			<div class="col timetables row">
				<div class="col">Previsto</div>
				<div class="col">Arrivo</div>
			</div>
			<div class="col flights-info">Destinazione | N° Volo | Compagnia Aerea</div>
			<div class="col nastro">Nastro bagagli</div>
			<div class="col status">Status</div>
		</div>
		<!-- / TITLES ROW ENDS - DESKTOP ONLY -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock on-late">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">26</span>'
				</div>
				<div class="col actual on-late">12:56</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(IST)</span>
						<span class="name">Instanbul</span> &nbsp; <span class="acronym mobile-hidden">IST</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Turkish Airlines</span>
					</div>

					<div class="slidee">
						<div class="marqueeElement">V701732</div>
						<div class="marqueeElement">AF01579</div>
						<div class="marqueeElement">W601749</div>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/condor.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(DBV)</span>
						<span class="name">Dubrovnik</span> &nbsp; <span class="acronym mobile-hidden">DBV</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Condor Airlines</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock on-late">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">26</span>'
				</div>
				<div class="col actual on-late">12:56</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(AMS)</span>
						<span class="name">Amsterdam</span> &nbsp; <span class="acronym mobile-hidden">AMS</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">KLM</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<?php 
		// Include the cta section "General"
		include_section('cta-general', 'bus-ticket', 'Acquista i Biglietti Bus', 'Bus Ticket');
		?>

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/airfrance.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(CDG)</span>
						<span class="name">Paris</span> &nbsp; <span class="acronym mobile-hidden">CDG</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">AirFrance</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/airfrance.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(MRS)</span>
						<span class="name">Marseille</span> &nbsp; <span class="acronym mobile-hidden">MRS</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">AirFrance</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock on-late">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">10</span>'
				</div>
				<div class="col actual on-late">12:40</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/easyjet.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(BCN)</span>
						<span class="name">Barcelona</span> &nbsp; <span class="acronym mobile-hidden">BCN</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">EasyJet</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/britishairways.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(MAN)</span>
						<span class="name">Manchester</span> &nbsp; <span class="acronym mobile-hidden">MAN</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">British Airways</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<?php 
		// Include the cta section "General"
		include_section('cta-general', 'campania', 'Campania Divina', 'Scopri le Attrazioni');
		?>

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/swiss.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(ZRH)</span>
						<span class="name">Zurich</span> &nbsp; <span class="acronym mobile-hidden">ZRH</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Swiss Airlines</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/ryanair.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(JTR)</span>
						<span class="name">Santorini</span> &nbsp; <span class="acronym mobile-hidden">JTR</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">Ryanair</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row">

			<!-- TIMETABLE ROW -->
			<div class="col timetables row">
				<div class="col expected">12:30</div>
				<div class="col clock">
					<i class="icon icons-clock-onlate"></i>
					<span class="minutes-late">00</span>'
				</div>
				<div class="col actual">12:30</div>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/tuifly.png'); ?>" alt=""></div>
				<div class="col info">

					<div class="name">
						<span class="acronym mobile-only">(BRU)</span>
						<span class="name">Bruxelles</span> &nbsp; <span class="acronym mobile-hidden">BRU</span>
					</div>

					<div class="flight-n">
						<span class="flight-number">TA18649</span> | <span class="airline-name">TUIFly</span>
					</div>

				</div>
			</div>

			<div class="col nastro">
				<div class="label mobile-only">Nastro Bagagli</div>
				34
			</div>

			<div class="col status landed">
				<i class="icon icons-status-landed"></i> <span class="status-label">Atterrato</span>
			</div>

			<i class="icon icon-arrow-circle-sec"></i>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<a href="#" class="link">Mostra di più</a>

	</div>

</section>

<!-- SECTION SIGNLE FLIGHT DETAILS FOR DEPARTURES -->
<section class="single-flight-details departure hidden" data-flight="RA18649">
	<div class="status row">
		<i class="icon icon-takeoff --active"></i> &nbsp; <span class="status">Partito</span>
	</div>

	<div class="info row">

		<div class="col departure row">
			<div class="flight" style="background-image: url(<?php echo img_path('sf-napoli-bg.png'); ?>);">
				<span class="acronym">NAP</span>
				<span class="partenza">Napoli</span>
			</div>

			<div class="meta row">
				<span class="label">Data</span>
				<span class="value arrival-date">4 Luglio</span>

				<span class="label">Partenza</span>
				<span class="value departure-time">
					<span class="expected changed">12:30</span>
					&nbsp;
					<span class="actual on-late">12:56</span>
				</span>

				<span class="label">Check-in</span>
				<span class="value check-in">722-684</span>

				<span class="label">Gate</span>
				<span class="value check-in">A3</span>
			</div>
		</div>

		<div class="col verse">
			<i class="icon icon-double-chevron mobile-hidden"></i>
			<i class="icon icon-chevron mobile-only"></i>
		</div>

		<div class="col arrival row">
			<div class="flight" style="background-image: url(<?php echo img_path('sf-santorini-bg.png'); ?>);">
				<span class="acronym">JTR</span>
				<span class="partenza">Santorini</span>
			</div>

			<div class="meta row">
				<span class="label">Data</span>
				<span class="value departure-date">4 Luglio</span>

				<span class="label">Arrivo</span>
				<span class="value arrival-time">14:00</span>
			</div>
		</div>

	</div>
</section>
<!-- / SECTION SIGNLE FLIGHT DETAILS FOR DEPARTURES -->

<!-- SECTION SIGNLE FLIGHT DETAILS FOR ARRIVALS -->
<section class="single-flight-details arrival hidden" data-flight="RA18649">
	<div class="status row">
		<i class="icon icon-landing --active"></i> &nbsp; <span class="status">Atterrato</span>
	</div>

	<div class="info row">

		<div class="col departure row">
			<div class="flight" style="background-image: url(<?php echo img_path('sf-santorini-bg.png'); ?>);">
				<span class="acronym">JTR</span>
				<span class="partenza">Santorini</span>
			</div>

			<div class="meta row">
				<span class="label">Data</span>
				<span class="value departure-date">4 Luglio</span>

				<span class="label">Partenza</span>
				<span class="value departure-time">14:00</span>
			</div>
		</div>

		<div class="col verse">
			<i class="icon icon-double-chevron mobile-hidden"></i>
			<i class="icon icon-chevron mobile-only"></i>
		</div>

		<div class="col arrival row">
			<div class="flight" style="background-image: url(<?php echo img_path('sf-napoli-bg.png'); ?>);">
				<span class="acronym">NAP</span>
				<span class="partenza">Napoli</span>
			</div>

			<div class="meta row">
				<span class="label">Data</span>
				<span class="value arrival-date">4 Luglio</span>

				<span class="label">Arrivo</span>
				<span class="value arrival-time">
					<span class="expected changed">12:30</span>
					&nbsp;
					<span class="actual on-late">12:56</span>
				</span>

				<span class="label">Nastro Bagagli</span>
				<span class="value baggage-carousel">25</span>
			</div>
		</div>
	</div>
</section>
<!-- / SECTION SIGNLE FLIGHT DETAILS FOR ARRIVALS -->

<section id="info">
	<h2 class="section-title">Info Utili</h2>

	<div id="footer-items" class="partenze">

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-suitcase"></i></span>
			<p class="content">
				<span class="title">Bagagli</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-check-ok"></i></span>
			<p class="content">
				<span class="title">Check-in</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-policeman"></i></span>
			<p class="content">
				<span class="title">Controlli di sicurezza</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-wheelchair"></i></span>
			<p class="content">
				<span class="title">Assistenze speciali</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>
	</div>

	<div id="footer-items" class="arrivi hidden">

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-bus"></i></span>
			<p class="content">
				<span class="title">In Bus</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-taxi"></i></span>
			<p class="content">
				<span class="title">In Taxi</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-car-side"></i></span>
			<p class="content">
				<span class="title">Noleggia Auto</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link solid">
			<span class="icon-circle"><i class="icon icon-camera"></i></span>
			<p class="content">
				<span class="title">Viabilità in aeroporto</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>
	</div>

</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi');
?>

<section class="link-correlati">
	<h4>Link correlati</h4>

	<ul class="related-links partenze">
		<li><a href="#">Voli diretti</a></li>
		<li><a href="#">Negozi</a></li>
		<li><a href="#">Bar e Ristoranti</a></li>
	</ul>

	<ul class="related-links arrivi hidden">
		<li><a href="#">Dove dormire</a></li>
		<li><a href="#">Bar e Ristoranti</a></li>
		<li><a href="#">Negozi</a></li>
	</ul>

</section>

<?php 
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>