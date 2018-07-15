<?php
$a = "%23FFFFFF";
$b = "%23000000";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>
    <style>
      .background p{
      background: <?php echo $a;?>;
      background: -webkit-linear-gradient(to right, "<?php echo $a;?>","<?php echo $b;?>" );
      background: linear-gradient(to right, <?php echo $a;?>, <?php echo $b;?>);
      width: 85%;
      margin-left: 0px;
      padding: 245px 100px;
      }
    </style>
    <div class="grid">
      <div class="title">
        CSS COLOUR GRADIENT
      </div>
      <div class="background">
        <p></p>
      </div>
      <div class="hexagon">
        <img src="https://www.w3schools.com/colors/img_colormap.gif"
        alt="Color Hexagon">
        Color Hexagon Feature Coming Soon
      </div>
      <div class="panel">
        CUSTOMIZATION PANEL
        <br>
        <span>Choose the colors for the gradient you require</span>
        <br>
        <form class="" action="" method="get">
          Color 1:<input type='color' name="color1"/><br><br>
          Color 2:<input type='color' name="color2"/><br><br>
        <input type="submit" name="btnsubmit" value="Generate"/>
        </form>
      </div>
      <div class="code">
        <button type="submit" name="btncode">Show CSS Code</button>
      </div>
    </div>
  </body>
</html>

<?php
if(isset($_REQUEST['btnsubmit']))
  {
    $col1=$_REQUEST['color1'];
    $col2=$_REQUEST['color2'];
    $a = $col1 ;
    echo $a;
    $b = $col2 ;
    echo $b;
  }
?>
