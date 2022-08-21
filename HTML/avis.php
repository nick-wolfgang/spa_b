<?php 
	include('connexion.php');
    $statut=$dbd->query('SELECT * FROM temoignage limit 12');
    $listeImage=$statut->fetchAll();
?>
<?php
if(isset($_POST['envoyer'])) {
    if(isset($_POST['nom'])&& isset($_FILES['image']) && isset($_POST['comment']) && isset($_POST['email'])) {
        $nom=$_POST['nom'];
        $photo=$_FILES['image']['tmp_name'];
        $commentaire=$_POST['comment'];
        $email=$_POST['email'];
        $extension=strchr($_FILES['image']['name'], '.');  //Ceci c'est le nom que nous avons fabriquer pour l'image de chaque internaute
       
        // echo "<br> nom : ".$nom; 
        // echo "<br> photo : ".$photo; 
        // echo "<br> comment : ".$commentaire; 
        // echo "<br> email : ".$email; 
        
        // echo "<br> nom uploader : ".$nom.$extension; 

        //on envoie dabord le fichier dans le serveur web stocke nos pages web (appele www)
       $envoiReuisi=move_uploaded_file($photo, 'photo_commentaire/'.$nom.$extension);
       echo  $envoiReuisi;
       //Puis on enregistre ses informations dans la BD
       if($envoiReuisi){
            $requete="INSERT INTO temoignage (nomClient,photo, commentaire, email) VALUES('$nom','$nom$extension', '$commentaire', '$email')";
            $statutExecution=$dbd->query($requete);
        }
       else{
            $requete="INSERT INTO temoignage (nomClient,photo, commentaire, email) VALUES('$nom','av.PNG', '$commentaire', '$email')";
            $statutExecution=$dbd->query($requete);
        } 
       
    }
}
?>

<!DOCTYPE html>
<html lang="fr"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="temoignage.css">
    <title>ZEN POST-PARTUM</title>
    <link rel="shortcut icon" href="../Images/icone/zen.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/contact.css">

    <style>
        .em {
            flex-direction: row;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    
    <header>
        <div class="banniere_image">
            <div class="contenu text_containt">
                <div>
                    <a class="logo_text" href="../index.html">
                        <img src="../Images/icone/zen.jpg" alt="" height="50px" class="logo-zen">
                        <div><span>ZEN</span> POST-PARTUM</div>
                    </a>
                </div>
                <nav>
                    <ul class="menu">
                        <li> <a href="../index.html">ACCUEIL</a></li>
                        <li> <a href="./aPropos.html">A PROPOS</a></li>
                        <li> <a href="./services.html">SERVICES</a></li>
                        <li> <a href="./offrir.html">OFFRE</a></li>
                        <li> <a href="./contacts.html">CONTACTS</a></li>
                    </ul>
                    <div class="toggle">
                        <i class="fa-solid fa-bars ouvrir"></i>
                        <i class="fa-solid fa-xmark fermer"></i>
                    </div>
                </nav>
            </div>

        </div>
    </header>
    <section>
        <form action="avis.php" method="post" enctype="multipart/form-data">
            <h1>Avis</h1>
            <div class="separation"></div>
            <div class="corps-formulaire">
                <div class="gauche">
                    <div class="groupe">
                        <label for="nom">Votre Prénom</label>
                        <input name='nom' type="text" autocomplete="off">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="groupe">
                        <label for="email">Votre adresse e-mail</label>
                        <input name="email" type="email" autocomplete="off">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <!-- <div class="groupe">
                        <label for="email">Votre téléphone</label>
                        <input name='tel' type="tel" autocomplete="off">
                        <i class="fas fa-mobile"></i>
                    </div> -->
                </div>
                <div class="droite">
                    <div class="groupe">
                        <label for="message">Message</label>
                        <textarea name="comment" id="message" placeholder="Saisissez ici..."></textarea>
                    </div>
                </div>
                <div class="droite">
                    <div class="groupe">
                        <label for="image">Image</label>
                        <input name="image" type='file' id="image"></input>
                    </div>
                </div>
            </div>
            <div class="pied-formulaire">
                <input name='envoyer' type="submit" value="Envoyer le message">
            </div>
        </form>
    </section>
    
    <div class="big">
        <h3>Témoignages</h3>
        <p class="p">Quelques avis de nos clients</p>
        <div class="container">
            <?php foreach($listeImage as $ligne): ?>
                <div class="commentaire">
                    <div class="nomPhoto">
                        <h2><?= $ligne['nomClient'];?></h2>
                        <img src="photo_commentaire/<?= $ligne['photo'];?>" alt="photo">
                    </div>
                    <div>
                        <p class="comment"><?= $ligne['commentaire'];?></p>
                        <div class="em">
                            <div class=""></div>
                            <div class=""><p class="email"><?= $ligne['email'];?></p></div>
                        </div>
                    </div>
                </div>   
            <?php endforeach;?>  
    </div>

    <footer>
        <p>ZEN POST-PARTUM est ouvert sur réservation de lundi à dimanche de 9h00 à 18h00.</p>
        <div class="footer_conteneur">
            <div class="fCenter">
                <i class="fa-solid fa-location-dot zen-map"></i>
                <p>
                    10B RUE DE LA SOMME EPINAY SUR-SEINE
                </p>
            </div>
            <a class="fCenter f2" href="./reservation.html">
                <p>Réservation</p>
            </a>
            <a class="fCenter f2" href="./avis.html">
                <p>Avis</p>
            </a>
            <div class="fCenter fLast">
                <a class="fCenter" href="tel:+07 50 38 98 34">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <a class="fCenter" href="mailto:lngompay@yahoo.fr">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a class="fCenter" href="tel:+07 50 38 98 34">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
<script src="../JS/btn-menu.js"></script>
</html>


