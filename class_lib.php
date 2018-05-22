<?php

  $rivers = ["cache_la_poudre"];//, "Big Thompson", "yampa", "Boulder Creek", "St. Vrain"];


  class fly_shop {
    var $name;
    function __construct($fly_shop_name) {
      $this->name = $fly_shop_name;
    }

    function set_name($new_name) {
      $this->name = $new_name;
    }

    function get_name() {
    	return $this->name;
    }

    var $st_petes_url;
    var $rocky_mtn_url;
    var $front_range_url;

    var $contributor;





  }

  class river extends fly_shop
  {
      function __construct($river_name) {
        $this->set_name($river_name);
      }
      function make_st_petes($river_url) {
        $this->$st_petes_url = /*'https://stpetes.com/blog/river-reports/' . */$river_url;
      }

      function make_rocky($river_url_u) {
        $this->$rocky_mtn_url = /*'http://rockymtanglers.com/' . */$river_url_u;// . '.riv';
      }
  }

$cache_la_poudre = new river("Cache la Poudre");
//$cache_la_poudre->$st_petes_url = "https://stpetes.com/blog/river-reports/cache-la-poudre";
$cache_la_poudre->make_rocky("Cache_La_Poudre_River");
$cache_la_poudre->make_st_petes("cache-la-poudre");

$big_thompson = new river("Big Thompson");
$yampa = new river("Yampa");
$boulder_creek = new river("Boulder Creek");
$st_vrain = new river("St. Vrain");


  $river_names = [];
  foreach ($rivers as $river_name) {
    $river_name = new river($river_name);
    array_push($river_names, $river_name);
  }




?>
