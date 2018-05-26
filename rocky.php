<?php


$html = file_get_contents('http://rockymtanglers.com/Cache_La_Poudre_River.riv');

// echo $html;

$rocky = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors


if(!empty($html)){ //if any html is actually returned

  //echo $html;

  $rocky->loadHTML($html);
  libxml_clear_errors(); //remove errors for yucky html

  $rocky_xpath = new DOMXPath($rocky);

  $rocky_row = $rocky_xpath->query('//span["@class=report"]');

  //print_r($rocky_row);

  $report = [];

  $st_petes;

  if ($rocky_row->length > 0) {
    foreach ($rocky_row as $row) { // p 4 - 6
      array_push($report,$row->nodeValue);

    }
    //print_r($report[147]);
    $st_petes = $report[147];
    echo $st_petes;
  }

}



?>
