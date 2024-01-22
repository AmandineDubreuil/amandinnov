<div class="modal-container">
	<div class="overlay modal-trigger"></div>
	<div class="modal">
		<button class="close-modal modal-trigger"><i class="fa-solid fa-square-xmark"></i></button>
		<h1>Demande de contact</h1>
		<form method="POST">

			<div class="form-field">
				<label for="nom">Nom <sup class="star">*</sup> :</label>
				<input type="text" name="nom" id="nom" class="" required="required">
			</div>

			<div class="form-field">
				<label for="societe">Société :</label>
				<input type="text" name="societe" id="societe" class="">
			</div>
			<div class="form-field">
				<label for="phone">Téléphone <sup class="star">*</sup> :</label>
				<input type="text" name="phone" id="phone" class="" required="required">
			</div>
			<div class="form-field">
				<label for="email">E-mail <sup class="star">*</sup> :</label>
				<input type="email" name="email" id="email" class="" required="required">
			</div>
			<div class="form-field">
				<label for="objet">Objet <sup class="star">*</sup> :</label>
				<input type="text" name="objet" id="objet" class="" required="required">
			</div>
			<div class="form-field">
				<label for="message">Message <sup class="star">*</sup> :</label>

				<textarea name="message" id="message" cols="30" rows="10" class="form-control rounded-1" required="required"></textarea>
			</div>
			<div class="groupeBtn">
				<button name="submitContact" class="btn btnOk" id="submitContact"></button>

			</div>
		</form>
		<p class="grey"><sup class="star">*</sup> champs requis</p>
	</div>

</div>