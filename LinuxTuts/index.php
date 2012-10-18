<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="style.css" />
<head>
</head>

<body>

	<p>
    		Cette page ne contient que du HTML.<br />
     		Veuillez taper votre prénom :
	</p>

	<form action="cible.php" method="post">
	<p>
	     <input type="text" name="prenom" />
	     <input type="submit" value="Valider" />
	</p>
	</form>


	<p> Veuillez choisir ce qui vous voudriez voir sur ce site:</p></br>
		<input type="checkbox" name="case" class="case" /> <label 			for="case">Ma case à cocher</label>
 <br />

	<input type="checkbox" name="case1" class="case1" /><label 		for="case">plus de tutaux linux"</label>

</br>

<form action="cible_envoi.php" method="post"
enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" class="push_button" />
        </p>
</form>


<br />

<div id="slide">
	<div class="slide_button">
		<a href="#">Slide Button</a>
	</div>
</div>

<br/>


</body>

</html>
