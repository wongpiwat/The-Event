<?php //ใส่ทุกอัน
    include 'header.php';
    // echo  date("Y-m-d");
    // echo date("h:i:s");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>

<div class="container">
<h2>Carousel Example</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <a href="www.google.com">
      <img src="https://p-u.popcdn.net/hero_images/desktop_images/000/000/122/medium/e1228a197abf1b71d33afdf758f606380a1a25b8.jpg?1520001031" alt="Los Angeles" style="width:100%;">
   </a>
    </div>

    <div class="item">
      <img src="https://picsum.photos/1800/850/?random" alt="Chicago" style="width:100%;">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
  
    <div class="item">
      <img src="https://picsum.photos/1800/850/?random" alt="New York" style="width:100%;">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</body>
</html>