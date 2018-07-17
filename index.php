<?php
//$a = "%23FFFFFF";
$a = '#FFFFFF';
//$b = "%23000000";
$b = '#000000';
if(isset($_REQUEST['btnsubmit']))
  {
    $col1=$_REQUEST['color1'];
    $col2=$_REQUEST['color2'];
    $a = $col1 ;
    //echo $a;
    $b = $col2 ;
    //echo $b;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <style>
  * {
    padding: 0 0;
  }
  :root{
    --color1:<?php echo $a; ?>;
    --color2:<?php echo $b; ?>;
  }
  body{
   background-color: #DDFFCC;
  }
  .grid{
    display: grid;
    grid-template-columns: 1fr 1fr;
    /*grid-template-rows: 1fr 1fr 1fr 1fr;*/
    /*grid-area:
    "header header"
    "background background"
    "hexagon panel"
    "code code";*/
  }
  .title{
    /*This function uses the lines as parameters
    Thus 2 columns will have 3 lines*/
    grid-column-start: 1;
    grid-column-end: 3;

    background-color: #AAAAAA;
    width: 97.75%;

    text-align: center;
    color: #FFFFFF;
    font-family: monospace;
    font-size: 16px;

    transition: 0.5s;

    /*display: block;*/
    padding: 30px 15px;
  }
  .title:hover{
    background-color: #1F5A55;
  }
  .background{
    grid-column: 1 / 3;
    /*background-color: #5f1a44;*/
    height: 520px;
  }
   .background p{
    background-color: var(--color2);
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, var(--color1), var(--color2));
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, var(--color1), var(--color2));
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    width: 85%;
    margin-left: 0px;
    padding: 245px 100px;
  }
  .hexagon{
    /*background-color: #1f3aff;*/

    padding: 10px;
    padding-left: 60px;
  }
  .panel{
    /*background-color: #1b7a44;*/

    text-align: center;
    color: #101010;
    font-family: monospace;
    font-size: 16px;
  }
  .panel span{
    display: block;
    padding-top: 10px;
  }
  .panel form{
    text-align: center;
  }
  .code{
    padding: 20px;
    text-align: center;
    grid-column-end: span 2;
    /*background-color: #ff3a14;*/
  }
  .code button{
    padding: 5px 10px;
  }
  </style>
   <body>
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
        <form class="" action="" method="post">
          Color 1:<input type='color' name="color1" placeholder=<?php echo $a;?>/><br><br>
          Color 2:<input type='color' name="color2" placeholder=<?php echo $b;?>/><br><br>
        <input type="submit" name="btnsubmit" value="Generate"/>
        </form>
      </div>
      <div class="code">
        <button type="submit" name="btncode">Show CSS Code</button>
      </div>
    </div>
  </body>
</html>
