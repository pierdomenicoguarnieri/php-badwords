<?php 

  $paragraph = $_POST['message'];
  $word = $_POST['word'];

  $paragraphCensored = str_replace(strtolower($word), '***', strtolower($paragraph));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <link rel="shortcut icon" href="../img/favicon.png" type="png">
  <title>Form Results</title>
</head>
<body>
<main>
      <div class="pg-content-wrapper d-flex align-items-center">
        <div class="container py-5 rounded-3 d-flex flex-column align-items-center text-white">
          <h1>Bad Words!</h1>

          <h4>Ecco il tuo testo censurato:</h4>

          <p><?php echo ucfirst($paragraphCensored) ?></p>

          <p>Lunghezza del testo censurato: <span class="text-warning"><?php echo strlen($paragraphCensored) ?></span></p>

          <p>La parola censurata è: <span class="text-danger"><?php echo $word ?></span></p>
        </div>
      </div>
    </main>
</body>
</html>