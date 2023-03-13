<?php
/**
 * Negozi / Ristoranti template
 */
?>

<section id="pagetitle" class="dark-mode negozi">

	<div class="col">
		<?php get_component('breadcrumbs', 'Negozi', 'dark', true); ?>

		<h1 class="page-title">Negozi e Ristoranti</h1>
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

	<div class="shop-list row grid between-content wrap">

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
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

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
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

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
			<div class="logo">
				<img src="<?php echo img_path('negozi/logo2.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Dai Fratelli la Bufala</h2>

				<div class="description">
					Autentica pizza napoletana e la vera mozzarella di bufala campana oltre a una selezione di piatti caldi e freddi.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Esterno area arrivi</span></p>
					<p class="timetable">Orari di apertura: <span class="time">7.00 - 23.00</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 0817516274</span></p>
				</div>
			</div>

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
				<div class="slideshow">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
					<img src="<?php echo img_path('negozi/foto1.png'); ?>" alt="">
				</div>

				<div class="row between-content">
					<div class="col">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem id vestibulum egestas rhoncus, quam faucibus. Sem at quis integer rhoncus, sit nec adipiscing aenean turpis. Ac at at massa fermentum risus. Tempor semper vulputate blandit tristique vestibulum. Nulla tellus in mattis nunc. Venenatis ornare mauris morbi molestie lectus urna vitae, rhoncus. Lectus sed in etiam sit. Ullamcorper tristique consequat ullamcorper id lobortis lectus. Vestibulum donec turpis sed aenean proin. Amet, eget nunc amet sagittis, commodo. Pulvinar placerat tristique sit in et bibendum facilisi nibh risus. Sit facilisi vitae risus lobortis quisque.
						Accumsan, tortor, ullamcorper tempus elit mauris mauris non. Sem vulputate elementum adipiscing pulvinar sed elementum. Sollicitudin.
					</div>

					<div class="col">
						<img src="<?php echo img_path('negozi/foto2.png'); ?>" alt="">
					</div>
				</div>
			</div>
			<!-- / SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->

		</div>

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
			<div class="logo">
				<img src="<?php echo img_path('negozi/logo3.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Mc Donalds</h2>

				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec faucibus massa metus, turpis in arcu tellus. Lorem aliquet eros in eget nec id.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Area partenze - Primo piano</span></p>
					<p class="timetable">Orari di apertura: <span class="time">7.00 - 21.30</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 08119889133</span></p>
				</div>
			</div>

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
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

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
			<div class="logo">
				<img src="<?php echo img_path('negozi/logo4.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Take Off</h2>

				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec faucibus massa metus, turpis in arcu tellus. Lorem aliquet eros in eget nec id.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Area partenze - Piano terra</span></p>
					<p class="timetable">Orari di apertura: <span class="time">6.00 - 20.00</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 0817802220</span></p>
				</div>
			</div>

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
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

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
			<div class="logo">
				<img src="<?php echo img_path('negozi/logo5.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Tagliati X il Successo</h2>

				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec faucibus massa metus, turpis in arcu tellus. Lorem aliquet eros in eget nec id.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Esterno Area Partenze</span></p>
					<p class="timetable">Orari di apertura: <span class="time">7.00 - 21.30</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 08118893644</span></p>
				</div>
			</div>

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
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

		<!-- SINGLE SHOP COLUMN -->
		<div class="single-shop list">
			<div class="logo">
				<img src="<?php echo img_path('negozi/logo6.png'); ?>" alt="">
			</div>

			<div class="info">
				<h2>Sunglass Up</h2>

				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec faucibus massa metus, turpis in arcu tellus. Lorem aliquet eros in eget nec id.
				</div>

				<div class="meta">
					<p class="position">Posizione: <span class="pos">Galleria commerciale - Primo piano</span></p>
					<p class="timetable">Orari di apertura: <span class="time">7.00 - 21.30</span></p>
					<p class="contacts">Contatti: <span class="tel">Tel. +39 0815993099</span></p>
				</div>
			</div>

			<!-- SINGLE CONTENT, ONLY VISIBLE ON SHOP CLICK -->
			<div class="single hidden">
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

	<div class="link"><a href="#" class="link">Mostra di più</a></div>

</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>