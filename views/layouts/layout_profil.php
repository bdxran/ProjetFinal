<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/profil.css">
    <link rel="stylesheet" type="text/css" href="../../css/footer.css">
    <script type="text/javascript" src="../js/preview.js"></script>
  </head>
  <body>
    <?php include('includes/header.php')?>
    <?php include('includes/profil.php') ?>
    <?php include('includes/footer.php')?>
    <script language="javascript">
      var error = '<?php echo $errMsg ?>'
      if(error != "") {
        alert(error);
      }
   </script>
  </body>
</html>