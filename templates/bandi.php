<?php
/**
 * Bandi template
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Bandi', 'dark', true); ?>

		<h1 class="page-title">Bandi</h1>
	</div>

</section>

<section id="bandi">

	<div class="row between-content wrap">

		<div id="articles">

			<div class="single">
				<div class="content">
					<div class="date">02 Luglio 2022</div>

					<h3>Indagini archeologiche preventive area di volo Aeroporto di Salerno Costa d'Amalfi</h3>

					<p>
						La presente procedura viene gestita per via telematica ex 58 D. Lgs. 50/16, attraverso il Portale Acquisti di GE.S.A.C.
						Per le modalità di partecipazione si rinvia all'avviso.
					</p>

					<p class="scadenza">
						Scadenza ricevimento delle offerte: <span>26/07/2022 ore 12:00</span> 
					</p>

					<a href="#" class="button white w-icon icon-file-dnl">Avviso</a>
					<a href="#" class="button white w-icon icon-file-dnl">Lorem ipsum dolor sit amet</a>
				</div>
			</div>

			<div class="single">
				<div class="content">
					<div class="date">02 Luglio 2022</div>

					<h3>Servizio di Car Valet CIG 9318416824</h3>

					<p>
						La presente procedura viene gestita per via telematica ex 58 D. Lgs. 50/16, attraverso il Portale Acquisti di GE.S.A.C.
						Per scaricare la documentazione di gara e per le modalità di partecipazione si rinvia al disciplinare di gara.
					</p>

					<p class="scadenza">
						Scadenza ricevimento delle offerte: <span>26/07/2022 ore 12:00</span> 
					</p>

					<a href="#" class="button white w-icon icon-file-dnl">Discipline di gara</a>
					<a href="#" class="button white w-icon icon-file-dnl">CSA</a>
				</div>
			</div>

			<div class="single">
				<div class="content">
					<div class="date">02 Luglio 2022</div>

					<h3>Procedura aperta senza previa pubblicazione di bando ai sensi dell’art. 17 del Regolamento approvato da GESAC per l’affidamento dei servizi di manutenzione delle aree a verde ed altre attività’ funzionali all’area di movimento dell’Aeroporto Internazionale di Napoli - Capodichino CIG 87908853GB</h3>

					<p>
						La presente procedura viene gestita per via telematica ex 58 D. Lgs. 50/16, attraverso il Portale Acquisti di GE.S.A.C.
						Per scaricare la documentazione di gara e per le modalità di partecipazione si rinvia al disciplinare di gara.
					</p>

					<p class="scadenza">
						Scadenza ricevimento delle offerte: <span>26/07/2022 ore 12:00</span> 
					</p>

					<a href="#" class="button white w-icon icon-file-dnl">Discipline di gara</a>
					<a href="#" class="button white w-icon icon-file-dnl">CSA</a>
				</div>
			</div>
		</div>

		<div class="sidebar">
			<div>
				<div class="search gray">
					<input type="text" id="search" placeholder="Cerca Bando"><input type="submit" value="">
				</div>

				<div class="bg">
					<h3>Archivio gare concluse</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis ultrices et posuere aliquam nisl at rhoncus suspendisse. 
					</p>

					<a href="#" class="button secondary">Scopri di più</a>
				</div>

				<div class="bg">
					<h3>Pubblicazione a sensi del D.Lgs. 33/2013</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis ultrices et posuere aliquam nisl at rhoncus suspendisse. 
					</p>

					<a href="#" class="button secondary">Scopri di più</a>
				</div>

				<div class="bg">
					<h3>Portale acquisti</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis ultrices et posuere aliquam nisl at rhoncus suspendisse. 
					</p>

					<a href="#" class="button secondary">Scopri di più</a>
				</div>
			</div>
		</div>

		<a href="#" id="more-news" class="link">Mostra di più</a>

	</div>
</section>

<section id="related-bandi" class="link-correlati">
	<h4>Link correlati</h4>

	<ul class="related-links">
		<li><a href="#">Bandi sotto soglia comunitaria</a></li>
		<li><a href="#">Bandi e avvisi area Commerciale</a></li>
		<li><a href="#">Altri Bandi e Avvisi</a></li>
	</ul>
</section>

<?php
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>