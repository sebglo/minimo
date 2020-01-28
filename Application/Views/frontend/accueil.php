

<div class="row medium-8 large-7 columns">

    <h2>Titre: <?php echo $this->data['page']->title(); ?></h2>

    <h4>Contenu: </h4>

    <?php echo $this->data['page']->content(); ?>

    <hr>

    <h3>On est sur la view "accueil".php</h3>

</div>
    
    
<div class="row medium-8 large-7 columns">

    <h3>La liste d'articles devraient apparaitre en dessous sous cette forme : </h3>

    <hr>

    <?php
    
    //ici, on inclut deux fois un fichier contenant du HTML brut pour l'exemple!
    //mais il faudra ici réaliser une boucle sur les informations récupérées depuis la base de données (à chaque tour de boucle on inclut une fois le fichier article-accueil.php)

    //Pour récupérer les variables passées dans le contrôleur, et donc les données recupérées depuis la BDD, on utilisera $this->data['posts']
    // print_r($this->data['posts']);

    //il faudra modifier le fichier article-acceuil.php pour qu'il utilise les données de la BDD et pas du HTML brut

    foreach($this->data['articles'] as $article)
    {
      // echo $article->title()."<br/>";
      include 'article-accueil.php'; 
    }


    ?>

</div>
