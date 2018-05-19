<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>

    <h1 class="text-center">Poudre River Fishing Report</h1>

    <div class="container">

    </div>

    <div class="report-container container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php include 'scraper.php';
            echo $river_title . '<br>';
          ?>
        </div>
        <div class="panel-body">
          <?php
            echo '<p>' .  $report_first . '</p>';
            echo '<p>' . $report_second . '</p>';
            echo '<p>' . $disclaimer . '</p>';
          ?>
      </div>
      <div class="panel-footer">
        <?php
          echo '<p>' . $streamflow . '</p>';
          ?>
      </div>
    </div>
    </div>

    <div class="recommendations">
      <?php
        //echo $report[8] . '<br>';
        echo $dries . '<br>';
        echo $nymphs . '<br>';
        echo $streamers . '<br>';

          //echo count($report);

      ?>
    </div>



  </body>
</html>
