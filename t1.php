<?php
$color = $_GET['color'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Background Color</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
  <h2>Background color changed to: <?php echo $color; ?></h2>
</body>
</html>
