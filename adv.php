<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Walktrough</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="assets/js/myscripts.js"></script>
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/851445eead.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<a href="https://www.playstation.com/nl-nl/games/the-last-of-us-part-ii-ps4/"><div class="advSm">
  <figcaption><button class="removeAdd">x</button></figcaption>
  <iframe src="https://www.youtube.com/embed/TXl9GI1p_Os?autoplay=1&mute=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; " allowfullscreen></iframe>
</div></a>

  <script>
  $(document).ready(function(){
    $(".removeAdd").click(function(){
      $(".advSm").remove();
    });
  });
  </script>

</body>

</html>
