<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/default.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/header.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/graphique.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/article.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/footer.css"></link>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="../js/graphique.js"></script>
  </head>
  <body>
    <div id="main">
      <?php include('includes/header.php') ?>
      <div id="resultat"><?php echo implode("/",$resultat); ?></div>
      <div id="columnchart_values"></div>
      <?php include('includes/commande.php') ?>
      <?php include('includes/article.php') ?>
      <?php include('includes/footer.php') ?>
    </div>
  </body>
</html>
