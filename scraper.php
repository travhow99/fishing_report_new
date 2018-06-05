<?php


function gather_petes() {
  // Loop through to create all URLs


function create_url(){

  include 'class_lib.php';
  //print_r($rivers);
  //echo $cache_la_poudre->st_petes_url;
  //print_r($rivers);

  //print_r($rivers);
  foreach ($rivers as $riv) {
  //  echo $riv->st_petes_url . ', ' . $riv->rocky_mtn_url . '<br>';
    echo $riv->make_url($riv->name, $riv->rocky_mtn_url);

  }



}


  $html = file_get_contents('https://stpetes.com/blog/river-reports/cache-la-poudre/');

  // echo $html;

  $stpetes = new DOMDocument();

  libxml_use_internal_errors(TRUE); //disable libxml errors


    if(!empty($html)){ //if any html is actually returned

      $stpetes->loadHTML($html);
      libxml_clear_errors(); //remove errors for yucky html

      $stpetes_xpath = new DOMXPath($stpetes);

      $stpetes_row = $stpetes_xpath->query('//div[@class="post-content"] //p');

      $report = [];

      if ($stpetes_row->length > 0) {
        foreach ($stpetes_row as $row) { // p 4 - 6
          array_push($report,$row->nodeValue);

          //print_r($report);
        }
      }

      // Assign report labels
      $streamflow = $report[0];
      $river_title = $report[1];
      $report_first = $report[3];
      $report_second = $report[4];
      $disclaimer = $report[5];
      $dries = $report[9];
      $nymphs = $report[10];
      $streamers = $report[11];

      $current_year = date("Y");

      $last_update_row = $stpetes_xpath->query('//div[@class="riv-report-updated"]');


    }
}


gather_petes();
create_url();



?>
