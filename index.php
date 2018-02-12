<HTML>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php 
        include_once('connectBdd.php');
        require('select_joueur.php'); 
        require('select_aventurier.php');

	//require('affecterJoueur.php'); 
        ?>
    </head>
    <body>
        <H1>Ajouter Aventurier</H1>
        <FORM action="affecterJoueur.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label>Joueur : </label>
			<select class="form-control" name="listJoueur" id="listJoueur">
				<?php  
					foreach ($joueurs as $joueur) {
						echo('<option value="'.$joueur["idJoueur"].'">');
						echo $joueur["nom"];
						echo "</option>";
					}
				?>
			</select>
		</div>
        <div class="col-md-6">
            <label>Aventurier : </label>
            <select class="form-control" name="listAventurier" id="listAventurier">
				<?php  
					foreach ($aventuriers as $aventurier) {
						echo('<option value="'.$aventurier["idAventurier"].'">');
						echo $aventurier["nom"];
						echo "</option>";
					}
				?>
			</select>
            <!---Créé aventurier :
            <libelle>Nom d'aventurier : </libelle>
			<input type="text" name="nomAvent"></input>
            <input type="submit" value="valider" name="Valider"></input>-->
          <input class="btn btn-primary" type="submit" value="valider" name="Valider"></input> 
		</div>
         
        
        </FORM>
    </body>
</HTML>
