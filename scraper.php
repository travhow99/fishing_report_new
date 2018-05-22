<?php

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

  if ($last_update_row->length > 0) {
    foreach ($last_update_row as $row) { // div 1 - 2
    //  echo $row->nodeValue . "<br/>";

    }
  }

  /* Print array results
  foreach ($report as $result) {
    echo '<p>' . $result . '</p>';
  }
*/

}





/*
//require('tools/simple_html_dom.php');

// Either use commposer, either include this file:
include_once 'tools/hQuery.php-master/hquery.php';

// Optionally use namespaces (PHP >= 5.3.0 only)
use duzun\hQuery;

// Set the cache path - must be a writable folder
// If not set, hQuery::fromURL() whould make a new request on each call
hQuery::$cache_path = "/path/to/cache";

// Time to keed request data in cache, seconds
// A value of 0 disables cahce
hQuery::$cache_expires = 3600; // default one hour

// GET the document
$doc = hQuery::fromUrl('https://stpetes.com/blog/river-reports/cache-la-poudre', ['Accept' => 'text/html,application/xhtml+xml;q=0.9,*;q=0.8']);
/*
var_dump($doc->headers); // See response headers
var_dump(hQuery::$last_http_result); // See response details of last request

// with POST
$doc = hQuery::fromUrl(
    'https://stpetes.com/blog/river-reports/cache-la-poudre', // url
    ['Accept' => 'text/html,application/xhtml+xml;q=0.9,*;q=0.8'], // headers
    ['username' => 'Me', 'fullname' => 'Just Me'], // request body - could be a string as well
    ['method' => 'POST', 'timeout' => 7, 'redirect' => 7, 'decode' => 'gzip'] // options
);



echo $doc;
*/

// Create DOM from URL or file
//$html = file_get_html('/Applications/MAMP/htdocs/fishing report/Cache La Poudre River Report _ Blog _ Happenings.htm');
//echo $html;
// Find all images
/*foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
       */
/*
// Create DOM from URL or file
$html = file_get_html('https://stpetes.com/blog/river-reports/cache-la-poudre/');

$part = substr($html, 849, 32);
*/

/*
// creating an array of elements
$reports = [];

// Find top ten videos
$i = 1;
foreach ($html->find('div.post-content>p') as $report) {

  $reports[] += $report;

  $i++;

        /*if ($i > 10) {
                break;
        }

        // Find item link element
        $videoDetails = $video->find('a.yt-uix-tile-link', 0);

        // get title attribute
        $videoTitle = $videoDetails->title;

        // get href attribute
        $videoUrl = 'https://youtube.com' . $videoDetails->href;

        // push to a list of videos
        $videos[] = [
                'title' => $videoTitle,
                'url' => $videoUrl
        ];

        $i++;*/
//}

//var_dump($reports);

?>
