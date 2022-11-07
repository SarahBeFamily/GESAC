<?php
/**
 * Blog Section with latest news carousel
 * 
 * Recalled in
 * - Homepage
 * - Voli Diretti
 */
?>

<section id="blog">
	<div class="col">

		<div class="text">
			<h2>Blog</h2>
			<p>
				Rimani aggiornato e scopri le ultime News relative all’Aeroporto di Napoli. 
			</p>

			<!-- LINK FOR DESKTOP -->
			<a href="#" class="link arrow-secondary">Tutte le News</a>
		</div>

		<div class="arrows"></div>

	</div>

	<div class="col">
		<div class="slick-news">

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Traffico passeggeri record all’Aeroporto Internazionale di Napoli.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Ryanair celebra 5 anni a Napoli e svela il più grande operativo di sempre.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Ryanair celebra 5 anni a Napoli e svela il più grande operativo di sempre.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- LINK FOR MOBILE (hidden up to 768px) -->
		<a href="#" class="link arrow-secondary">Tutte le News</a>
	</div>
</section>