<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<div>

  <!-- Paragrafo -->
  <p>
  
    <?php
      $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dicta laudantium error facere laboriosam nemo voluptate libero omnis, blanditiis incidunt quis officia rerum voluptates, temporibus numquam non vero. Voluptatem, impedit?';
      echo $paragraph;
      
    ?>
  
  </p>
  <!-- Lunghezza del paragrafo -->
  <span>
    Lunghezza Paragrafo:
    <?php
      echo strlen($paragraph) . ' caratteri';
    ?>
  </span>
  
</div>

<!-- Risultato v1.0 -->
<div>
  <!-- Paragrafo -->
  <p>
    <?php

      // $replaceMyText = '';
      echo $risultato = str_replace($_GET['replaceMyText'], "***", $paragraph);
      
    ?>
  
  </p>
</div>

<!-- Risultato v2.0 -->
<div>
  <!-- Paragrafo -->
  <p>
    <?php

      $replaceMyText = 'ipsum';
      echo $risultato=str_replace($_GET = $replaceMyText, '***', $paragraph);
      
    ?>
  
  </p>
</div>

<!-- Risultato v3.0 -->
<div>
  <form method="post">
    Bad Word<br>
    <input type="text" name="badword" placeholder="search BadWord"><br>
    <input type="submit" value="Invia Modulo">
  </form>
  <!-- Paragrafo -->
  <p>
    <?php

      $badword = $_POST['badword'];
      echo $risultato = str_replace($badword, '***', $paragraph);

    ?>
  
  </p>
</div>

</body>
</html>