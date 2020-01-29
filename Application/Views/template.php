<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>minimo | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link rel="stylesheet" href="minimo/public/css/css.scss">
<style>
    
</style>


</head>
<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
        <li class="menu-text"><a href="<?php echo BASE_URL; ?> ?action=accueil">MINIM0</a></li>
        <li><a href="<?php echo BASE_URL; ?>?action=articles&category=lifestile">LIFESTYLE</a></li>
        <li><a href="<?php echo BASE_URL; ?>?action=articles&category=photodiary">PHOTODIARY</a></li>
        <li><a href="<?php echo BASE_URL; ?>?action=articles&category=music">MUSIC</a></li>
        <li><a href="<?php echo BASE_URL; ?>?action=articles&category=travel">TRAVEL</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
        <li><a href="<?php echo BASE_URL; ?>dbadmin">DB Admin</a></li>
        </ul>
    </div>
</div>

<!--<div class="callout large primary">-->
<div>

    <div class="row column text-center">
    <h1>Un Blog</h1>
    <!--<img src="01.png">-->
    <img src="public/images/01_image_principale.png">
    <h2 class="subheader">Simple MVC, simple mise en page</h2>
    </div>
</div>


<br/>

<?php

// on cherche la view demandée
if(file_exists('Application/Views/'.$this->data['view'] . '.php')) include $this->data['view'] . '.php';
else include 'frontend/not-found.php';

?>

<br/>
<br/>
<br/>

<div class="callout primary">
    <div class="row column text-center">
    <h2 class="subheader">Ici un formulaire pour s'enregistrer à la newsletter ce serait sympa</h2>
    </div>
</div>

<div class="callout ">
    <div class="row column text-center">
    <h3>Et puis ici un footer par exemple</h3>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>

