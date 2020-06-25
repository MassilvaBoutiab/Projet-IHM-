
<!DOCTYPE html>
<html lang="fr">
<head>
<!--les metas necessaire-->
    <meta charset="UTF-8">
    <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya de tizi ouzou ">
    <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--le titre-->
    <title>Platform Client</title>
<!--icon du site-->
    <link rel="icon" href="../images/icon/favicon.ico">
<!--feuilles de style-->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        
</head>
<body>
<?php
  $titre_page="Profiless";
  $db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
  include_once('../includes/header.php');
?>
<div class="container-fluid" id="profile"></div>

<?php
  include_once("../includes/footer.php");
?>
</body>
</html>
