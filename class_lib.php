<?php

  $rivers = ["Cache la Poudre", "Big Thompson", "Yampa", "Boulder Creek", "St. Vrain"];


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




    var $url;
    var $contributor;

  }

  class river extends fly_shop
  {
      function __construct($river_name) {
        $this->set_name($river_name);
      }



  }


  foreach ($rivers as $river_name) {
    $river_name = new river($river_name);
  }



?>
