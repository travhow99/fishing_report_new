<!DOCTYPE html>
<html>
  <body>

    <div class="menu">
    <?php include 'scraper.php';
      // Print array results
      foreach ($report as $result) {
        echo '<p>' . $result . '</p>';
      }
    ?>
    </div>



  </body>
</html>
