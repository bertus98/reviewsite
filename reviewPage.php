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



  <?php
    require_once('connect.php');
    $video_id = $_GET['id'];
    $product = 'SELECT * FROM `content` WHERE id = ' . $video_id;
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

    <?php
    }} else { echo "Er zijn geen artikelen gevonden";}
?>

//$query = 'SELECT * FROM videoInformationTable WHERE video_id = ' . $video_id;

<br><br><br><br><br><br>
<?php include 'footer.php'; ?>

</body>

</html>
