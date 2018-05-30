<!DOCTYPE html>
<html>
  <head>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="http://i.imgur.com/aZJug6h.png">

  </head>
  <body>

    <h1 class="text-center">Poudre River Fishing Report</h1>

    <div class="container">
      <div class="row">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                Collapsible Group 1</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Collapsible Group 2</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                Collapsible Group 3</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="report-container col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php include 'scraper.php'; include 'class_lib.php';
                //st_petes = new fly_shop("St. Peter's Fly Shop");
                //$st_petes->set_name();
                //echo $Yampa->get_name();
                //print_r(get_declared_classes());

                //print_r($cache_la_poudre);

                //echo '<a target="_blank" href="' . $cache_la_poudre->st_petes_url . '">' . $cache_la_poudre->st_petes_url . '</a><br>';
                //echo '<a target="_blank" href="' . $cache_la_poudre->rocky_mtn_url . '">' . $cache_la_poudre->rocky_mtn_url . '</a>';


                echo $big_thompson->name;
                echo $yampa->name;
                echo $st_vrain->get_name();
                echo $boulder_creek->get_name();
                //echo $Yampa->get_name();

                echo $river_title . '<br>';
                //echo "<p class='shout-out'>Courtesy of " . $st_petes->get_name() . "</p>";

              ?>
            </div>
            <div class="panel-body">
              <?php
                echo '<p>' .  $report_first . '</p>';
                echo '<p>' . $report_second . '</p>';
                echo '<p>' . $disclaimer . '</p>';
                echo '<p class="streamflow">' . $streamflow . '</p>';
              ?>
            </div>
            <div class="panel-footer">
              <?php //Eventually turn this into a var
                  echo '<p><a href="https://stpetes.com/" target="_blank">St. Peter\'s Fly Shop</a>&nbsp;&copy;' . $current_year . '</p>';
                ?>
            </div>
          </div>
        </div>

        <div class="recommendations col-md-3 ">
          <ul>
            <h4>Fly Recommendations</h4>
            <?php
              //echo $report[8] . '<br>';
              echo '<h5>Dry Flies</h5>';
              echo '<li class="rec">' . $dries . '</li>';
              echo '<h5>Nymphs</h5>';
              echo '<li class="rec">' . $nymphs . '</li>';
              echo '<h5>Streamers</h5>';
              echo '<li class="rec">' . $streamers . '</li>';

                //echo count($report);

            ?>
          </ul>
        </div>
      </div>

      <div class='row'>
        <div class="report-container col-md-9">

          <?php include 'rocky.php';

            echo '<div class="rocky-report"><p>' . $st_petes . '</p></div>';

          ?>
        </div>
      </div>
    </div>


    <script src="js/app.js"></script>

  </body>
</html>
