<?php
 
 

if(isset($_GET['nom'])){

   $nom=$_GET['nom'];
   $prenom=$_GET['prenom'];
   $adresse=$_GET['adresse'];
   $email=$_GET['email'];
   $telephone=$_GET['telephone'];
   $envoyer=$_GET["envoyer"];
   $erreur="";

}

if(isset($envoyer))
{
    if(empty($nom)) $erreur= "<li> Champ manquant! Entrez votre nom !</li>";
    if(empty($prenom)) $erreur.= "<li> Saisir votre prenom svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez remplir votre email svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Champ obligatoire saisir votre adresse!</li>";
    if(empty($telephone)) $erreur.= "<li>Entrez votre numéro de telephone svp !</li>";

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 <section>
  <form  name="fo" method="GET" action="">
      <fieldset>
        <legend >Inscription</legend>

        <div class="label">Nom</div>
        <div class="champ">
           <input type="text" name="nom" value="" />
        </div>
        <div class="label">Prénom</div>
        <div class="champ">
           <input type="text" name="prenom" value="" />
        </div>
        <div class="label">Email</div>
        <div class="champ">
           <input type="text" name="email" value="" />
        </div>
        <div class="label">Adresse</div>
        <div class="champ">
           <input type="adresse" name="adresse" value="" />
        </div>
        <div class="label">Telephone</div>
        <div class="champ">
           <input type="telephone" name="telephone" value="" />
        </div>
        <div class="champ">
           <input type="submit" name="envoyer" value="envoyer" />
        </div>
     </fieldset>
</form>
<?php if(!empty($erreur)){ ?>

<div id="erreur"> <?php echo $erreur ?> </div>

<?php }  ?>
</section>

<style>
body{
    padding:20px;
    margin: 33px;
    margin-bottom:5px;


 }

 fieldset{
    border:solid 2px #d170cc;
    border-radius:10px;
    box-shadow: #dab2d1;
    padding:20px;
    width: 100%;


 }
 legend{
    font:bold 16pt Times New Roman ;
    color:#1f0518;
 }
 
 input[type="submit"]{
    border-radius: 5px;
    background-color:#30a3b3;
    color:#FFFFFF;
    width:100px;
    height: 30px;
    cursor:pointer;
 }
 .label{
    margin-bottom:4px;
    font:10pt arial;
    color:#070505;
 }
 .champ{
    margin-bottom:20px;
 }
 #erreur{
    font:10pt arial;
    color:#DD0000;
    padding:10px;
    border-radius:10px;
    margin-bottom:10px;
 }
 </style>
 