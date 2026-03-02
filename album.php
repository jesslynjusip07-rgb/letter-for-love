<!DOCTYPE html>
<html>
<head>
    <title>Bidadari Syurga 💗</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="album-title">Bidadari Syurga 💕</h1>

<div class="gallery">

<?php
for($i = 1; $i <= 30; $i++) {
    echo "<div class='photo'>
            <img src='images/images$i.jpeg'>
          </div>";
}
?>

</div>

<div class="center">
    <a href="letter.php" class="btn">Back to Letter 💌</a>
</div>

</body>
</html>