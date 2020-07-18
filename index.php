<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Walktrough</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="assets/js/myscripts.js"></script>
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="https://kit.fontawesome.com/851445eead.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  <?php include 'header.php'; ?>

<?php include 'adv.php';?>

  <div class="container">
<a href="https://www.playstation.com/nl-nl/games/the-last-of-us-part-ii-ps4/">test</a>
    <div class="card">
    <?php
      $product = "SELECT * FROM `content` WHERE `category` in ('preview', 'review') ORDER BY id LIMIT 4";
      $result = $conn->query($product);if($result->num_rows > 0){while($row = $result->fetch_assoc()){
    ?>
      <a href='reviewPage.php?id=<?php echo $row['id']?>'>
        <section>
          <img src="<?php echo $row['banner'];?>">
          <figcaption>
            <h2><?php echo $row['tittle'];?></h2>
          </figcaption>
        </section>
      </a>
      <?php }} else { echo "Er zijn geen artikelen gevonden";} ?>
    </div>
</div>

<div class="news">
  <h2>News</h2>
  <div class="container">
    <a href='reviewPage.php?id=<?php echo $row['id']?>'>
      <section>
        <img src="https://sm.ign.com/t/ign_nl/screenshot/default/unnamed-1_uc5e.280.jpg">
        <b>Nieuwe details over de mysterieuse Harry Potter RPG</b>
      </section>
    </a>

    <a href='reviewPage.php?id=<?php echo $row['id']?>'>
      <section>
        <img src="https://www.invader.be/wp-content/uploads/2020/06/Square-Enix.jpg">
        <b>Square Enix zal in juli en augustus een aantal nieuwe games onthullen</b>
      </section>
    </a>

    <a href='reviewPage.php?id=<?php echo $row['id']?>'>
      <section>
        <img src="https://sm.ign.com/t/ign_nl/news/t/the-last-o/the-last-of-us-part-2-is-the-fastest-selling-ps4-exclusive-e_bzuh.280.jpg">
        <b>The Last of Us Part 2 is snelst verkopende PS4 exclusive ooit</b>
      </section>
    </a>

    <a href='reviewPage.php?id=<?php echo $row['id']?>'>
      <section>
        <img src="https://sm.ign.com/t/ign_nl/news/c/cyberpunk-/cyberpunk-2077-night-city-wire-episode-2-coming-in-a-few-wee_hxty.280.jpg">
        <b>Cyberpunk 2077 Night City Wire Episode 2 komt 'over een paar weken'</b>
      </section>
    </a>
  </div>
</div>

<div class="container"></div>

<?php include 'footer.php'; ?>

</body>

</html>
