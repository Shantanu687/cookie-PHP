<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if(isset($_POST['theme'])){
    $theme=$_POST['theme'];
    setcookie("theme",$theme,time()+(86400*30),"/");
    header("Location:theme.php");
    exit;
  }
  if(isset($_COOKIE['theme'])){
    $theme=$_COOKIE['theme'];
    echo "<h2>welcome back ! Your selected theme is:".$_theme."</h2>";
  }
  else
  {
    echo"<h2>No theam is selected</h2>";
  }
  ?>  
</body>
</html>
