$(document).ready(function(){

  function cleanRocky() {
    var $cleanedReport = $('.rocky-report p').text();

    var $reportFinal = '';
    $cleanedReport = $cleanedReport.split('ft');

    // loop for all occurrences
    for (var x = 1; x < $cleanedReport.length; x++){
      $reportFinal += $cleanedReport[x];
    }

    console.log($reportFinal);
    $('.rocky-report').html($reportFinal);
  }

  cleanRocky();
});
