<?php
/**
 * Singolo Negozio template
 * part di Negozi / Ristoranti template
 */
?>


<section id="pagetitle" class="dark-mode negozi">

	<div class="col">
		<?php get_component('breadcrumbs', 'Air Cafè Ristobar', 'dark', true); ?>

		<h1 class="page-title">Air Cafè Ristobar</h1>
	</div>

</section>

<section id="shop-list">
	<div class="shop-filter">
		<select name="area" id="area" class="double-chevron gray" required>
			<option value="">Area</option>
			<option value="before-controls">Prima dei controlli</option>
			<option value="after-controls">Dopo i controlli</option>
		</select>

		<select name="category" id="category" class="double-chevron gray" required>
			<option value="">Categoria</option>
			<option value="food">Ristoro</option>
			<option value="shop">Shopping</option>
		</select>
	</div>

	<div class="shop-list row between-content wrap">

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop single-view">

			<div class="logo">
				<img src="<?php echo img_path('negozi/logo1.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Air Cafè Ristobar</h2>

				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem id vestibulum egestas rhoncus, quam faucibus.
					Sem at quis integer rhoncus, sit nec adipiscing aenean turpis.
					Ac at at massa fermentum risus. Tempor semper vulputate blandit tristique vestibulum.
					Nulla tellus in mattis nunc. Venenatis ornare mauris morbi molestie lectus urna vitae, rhoncus.
					Lectus sed in etiam sit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Lorem id vestibulum.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Adiacente area Car Rental</span></p>
					<p class="timetable">Orari di apertura: <span class="time">7.00 - 21.30</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 0817803370</span></p>
				</div>
			</div>

			<div class="single">
				<div class="slideshow">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
				</div>

				<div class="row between-content">
					<div class="col">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Lorem id vestibulum egestas rhoncus, quam faucibus.
						Sem at quis integer rhoncus, sit nec adipiscing aenean turpis.
						Ac at at massa fermentum risus. Tempor semper vulputate blandit tristique vestibulum.
						Nulla tellus in mattis nunc. Venenatis ornare mauris morbi molestie lectus urna vitae, rhoncus.
						Lectus sed in etiam sit.
					</div>

					<div class="col">
						<img src="<?php echo img_path('negozi/foto2.png'); ?>" alt="">
					</div>
				</div>
			</div>
			<!-- / SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->

		</div>


	</div>

</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>