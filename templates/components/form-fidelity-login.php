<?php
/**
 * Form fidelity login eshop component
 * - Eshop
 */
?>

<div class="fidelity-login">
	<form action="" id="fidelity-login-eshop">
		<p class="member">
			<label>
			<input type="checkbox" name="already-member" class="already-member">
			Sei registrato al programma fidelity? <a class="link" href="#">(Effettua Login)</a> oppure <a class="link" href="#">(Registrati)</a></label>
		</p>

		<div class="already-member-fields hidden">

			<div class="internal-login">
				<input type="text" placeholder="Username" required>
				<input type="password" placeholder="Password" value="" class="password" required><i class="icon icon-hide-password toggle-password"></i>
				<input type="submit" class="submit" value="Accedi">
				<a href="#" class="button secondary border-only">Registrati</a>
			</div>

			<div class="other-login">
				<a href="#" class="link pass-recovery">Non ricordo la password</a>

				oppure

				<div class="social-login">
					<a href="#"><i class="google-icon"></i>Continua con Google</a>
					<a href="#"><i class="facebook-icon"></i>Continua con Facebook</a>
					<a href="#"><i class="instagram-icon"></i>Continua con Instagram</a>
				</div>
			</div>

		</div>
	</form>
</div>