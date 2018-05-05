<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/default.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/header.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/graphique.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/panneau_administratif.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/article.css"></link>
    <link rel="stylesheet" type="text/css" href="../../css/footer.css"></link>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="../js/button_navbar.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ["Element", "Density", { role: "style" } ],
            [a, 8.94, "#b87333"],
            ["Silver", 10.49, "silver"],
            ["Gold", 19.30, "gold"],
            ["Platinum", 21.45, "color: #e5e4e2"]
          ]);

          var view = new google.visualization.DataView(data);
          view.setColumns([0, 1,
                           { calc: "stringify",
                             sourceColumn: 1,
                             type: "string",
                             role: "annotation" },
                           2]);

          var options = {
            title: "Top Game",
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
          };

          var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
          chart.draw(view, options);
      }

    </script>
  </head>
  <body>
    <div id="main">
      <?php include('includes/header.php') ?>
      <div id="columnchart_values"></div>
      <?php include('includes/panneau_administration.php') ?>
      <?php include('includes/article.php') ?>
      <?php include('includes/footer.php') ?>
    </div>
  </body>
</html>
