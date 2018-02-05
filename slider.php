<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
   .carousel-indicators
   {
    margin-bottom: -15px;
    margin-left: 0px;
   }
    

    .carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
    }
    .carousel .carousel-indicators > li.active {
      width: 10px;
      height: 10px;
      opacity: 1;
    }
  </style>
</head>
<body >

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/slider/s1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/slider/s2.png" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/slider/slider3.png" alt="" style="width:100%;">
      </div>
    </div>

  </div>
</body>
</html>
