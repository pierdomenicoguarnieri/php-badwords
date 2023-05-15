<?php 

  $paragraph = $_POST['message'];
  $word = $_POST['word'];

  $paragraphCensored = str_replace(strtolower($word), '***', strtolower($paragraph));

?>
