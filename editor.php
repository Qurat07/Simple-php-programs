<?php
$code = $_GET['code'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Preview</title>
</head>
<body>
  <h2>Your Output</h2>
  <div style="border:1px solid #000; padding:10px; margin-bottom:20px;">
    <?php echo $code; ?>
  </div>

  <h3>Your HTML Code</h3>
  <pre><?php echo htmlspecialchars($code); ?></pre>
</body>
</html>
