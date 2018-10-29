<?php
require("header.php");
?>
<div class="container">
		  <div class="starter-template">
		  </div>
		</div>
		</br><form class="form-horizontal">
	<fieldset>

	<!-- Form Name -->
	<legend>UN PETIT GESTE UNE GRANDE UTILITÉ</legend>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Titre</label>
	  <div class="col-md-1">
		<select id="selectbasic" name="selectbasic" class="form-control">
		  <option value="----------------">--------------</option>
		  <option value="Monsieur">Madame</option>
		  <option value="Madame">Monsieur</option>
		  <option value="Famille">Famille</option>
		  <option value="Entreprise">Entreprise</option>
		  <option value="Fondation">Fondation</option>
		</select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textinput">Nom</label>  
	  <div class="col-md-2">
	  <input id="textinput" name="textinput" type="text" placeholder="nom" class="form-control input-md" required="">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textinput">Prénom</label>  
	  <div class="col-md-2">
	  <input id="textinput" name="textinput" type="text" placeholder="prenom" class="form-control input-md" required="">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textinput">Adresse Email</label>  
	  <div class="col-md-2">
	  <input id="textinput" name="textinput" type="text" placeholder="email" class="form-control input-md" required="">

	  </div>
	</div>

	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
	  <div class="col-md-2">
		<input id="passwordinput" name="passwordinput" type="password" placeholder="saisir le mot de passe" class="form-control input-md" required="">

	  </div>
	</div>

	<!-- Button Drop Down -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Pays</label>
	  <div class="col-md-2">
		<select id="selectbasic" name="selectbasic" class="form-control">
		  <option value="1">Choisir</option>
		  <option value="2">canada</option>
		  <option value="3">usa</option>
		  <option value="4">senegal</option>
		  <option value="5">Mali</option>
		  <option value="6">Afrique du nord</option>
		  <option value="7">france</option>
		  <option value="8">russie</option>
		</select>
	  </div>
	</div>


	<!-- Multiple Radios -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="radios">Sexe</label>
	  <div class="col-md-4">
	  <div class="radio">
		<label for="radios-0">
		  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
		  homme
		</label>
		</div>
	  <div class="radio">
		<label for="radios-1">
		  <input type="radio" name="radios" id="radios-1" value="2">
		  femme
		</label>
		</div>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Sujet de votre message</label>
	  <div class="col-md-2">
		<select id="selectbasic1"   name="selectbasic" class="form-control">
		  <option value="1">Choisir</option>
		  <option value="2">Don</option>
		  <option value="3">Parrainage</option>
	<!--      <option value="4">Question relatif aux droits de l'enfant</option>-->

		</select>
	  </div>
	</div>
	<div class="don 2">
	<div class="form-group">
	  <label class="col-md-4 control-label" for="montant">Votre Montant</label>  
	  <div class="col-md-4">
	  <input id="montant" name="montant" type="text" placeholder="montant" class="form-control input-md" required="">

	  </div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="radios">Type De Carte</label>
	  <div class="col-md-4">
	  <div class="radio">
		<label for="radios-0">
		  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
		  Visa
		</label>
		</div>
	  <div class="radio">
		<label for="radios-1">
		  <input type="radio" name="radios" id="radios-1" value="2">
		  Mastercard
		</label>
		</div>
	  </div>
	</div>

	<!-- Password input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="passwordinput">Num. Carte</label>
	  <div class="col-md-4">
		<input id="passwordinput" name="passwordinput" type="password" placeholder="" class="form-control input-md" required="">

	  </div>
	</div>
	</div>
		<div class="don 3">
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectmultiple">Age</label>
	  <div class="col-md-4">
		<select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
		  <option value="1">1 -&gt; 5 ans</option>
		  <option value="2">5 -&gt; 7 ans</option>
		  <option value="3">7 -&gt; 15 ans</option>
		</select>
	  </div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="radios">Sexe</label>
	  <div class="col-md-4">
	  <div class="radio">
		<label for="radios-0">
		  <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
		  garçon
		</label>
		</div>
	  <div class="radio">
		<label for="radios-1">
		  <input type="radio" name="radios" id="radios-1" value="2">
		  fille
		</label>
		</div>
	  </div>
	</div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="textarea">Message</label>
	  <div class="col-md-4">                     
		<textarea class="form-control" id="textarea" name="textarea" placeholder="exprimez vous"></textarea>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="singlebutton">Envoyer</label>
	  <div class="col-md-4">
		<button id="singlebutton" name="singlebutton" class="btn btn-danger">submit</button>
	  </div>
	</div>

	</fieldset>
	</form>

		    <script src="public/javascripts/jquery-2.1.1.min.js"></script>
			<script src="public/javascripts/bootstrap.min.js"></script>
			<script src="public/javascripts/jquery.js"></script>

	  </body>