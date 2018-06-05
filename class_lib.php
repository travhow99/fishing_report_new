<?php

$rivers = [];//, "Big Thompson", "yampa", "Boulder Creek", "St. Vrain"];


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

      function __construct($river_name, $river_url_rocky, $river_url_petes) {
        $this->set_name($river_name);

          if ($this->name == 'Rocky Mountain National Park') {
            $this->st_petes_url = 'https://stpetes.com/blog/' . $river_url_petes;
          }
          elseif (empty($river_url_petes)) {
            $this->st_petes_url = null;
          } else {
            $this->st_petes_url = 'https://stpetes.com/blog/river-reports/' . $river_url_petes;
          }

        $this->rocky_mtn_url = 'http://rockymtanglers.com/' . $river_url_rocky . '.riv';

        // Add each to array ?
        /*$rivers[] = $this;

        print_r($rivers);
        echo ('<br>');*/
        // To-do
          // Create getter methods for each var


          //echo $this->name;
      }

      // function to add href etc.

      function make_url($riverName, $url) {
        if ($url != null) {
          return '<a target="blank" href="' . $url . '">' . $riverName . '</a><br>';
        } //else {die;}
      }


      /*
      function make_st_petes($river_url) {
        $this->$st_petes_url = /*'https://stpetes.com/blog/river-reports/' . *///$river_url;
    /*  }

      function make_rocky($river_url_u) {
        $this->$rocky_mtn_url = 'http://rockymtanglers.com/' . $river_url_u;// . '.riv';
      }
      */
  }

//$rivers = [$cache_la_poudre(), $big_thompson, $yampa, $boulder_creek, $st_vrain, $rmnp];

// Construct Rivers (Name, Rocky Mtn Anglers URL suffix, St Petes URL siffix);
$cache_la_poudre = new river("Cache la Poudre", "Cache_La_Poudre_River", "cache-la-poudre");
$big_thompson = new river("Big Thompson", "Big_Thompson_River", "big-thompson");
$yampa = new river("Yampa", "Yampa_River", "");
$boulder_creek = new river("Boulder Creek", "Boulder_Creek", "");
$st_vrain = new river("St. Vrain", "Saint_Vrain_River", "");
$rmnp = new river("Rocky Mountain National Park", "Rocky_Mtn_Nat_Park", "rmnp-fishing-report");

$rivers = array($cache_la_poudre, $big_thompson, $yampa, $boulder_creek, $st_vrain, $rmnp);


// echo $rmnp->get_Name();
?>
