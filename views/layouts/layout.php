<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/default.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/header.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/content.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/footer.css"></link>
    <script type="text/javascript" src="../js/button_navbar.js"></script>
  </head>
  <body>
    <div id="main">
      <?php include('includes/header.php') ?>
      <?php include('includes/content.php') ?>
      <?php include('includes/footer.php') ?>
    </div>
    <script language="javascript">
      var error = '<?php echo $errMsg ?>'
      if(error != "") {
        alert(error);
      }
    </script>
  </body>
</html>
