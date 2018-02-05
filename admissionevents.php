<!DOCTYPE HTML>
<?php
    session_start();
    require("header.php");
?>
<html>
<header>
    <link rel="stylesheet" id="styles-minified-css" href="css/style-minifield.css" type="text/css" media="all" />
        <style type="text/css">
            body
            {
                font-family: "roboto";
            }
             body {
    margin-top:60px;
    font-family: 'Montserrat',sans-serif;
}
/* this is just for the demo */
.panel-subheader
{
    font-family: "roboto sans-serif";
}
.panel-body
{
    font-family: "roboto sans-serif";
}

.panel-body:hover
{

}


.panel-heading:hover {
    cursor:pointer;
}
.panel-heading {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;    
}

.side-tab:hover {
        cursor: pointer;
    }
    .panel.panel-default {
        border:none;
        box-shadow: none !important;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        width: 88%;
        
    }
    .panel-heading {
        border: none;
        border-top-right-radius: 20px;
        border-bottom-left-radius:20px;
        background-color: #4f4b49;
        background-image: -webkit-gradient(linear, right top, left bottom, from(rgba(255, 255, 255, 1)), to(rgba(0, 0, 0, 0)));
        font-family: 'Courgette', cursive;
        color: #fff;
        font-size: 24px;
        
    }
    .panel-heading:active{
        background-color: #4f4b49;
    }
    .panel-body {
        background-color: transparent;
        -webkit-transition:height 0.9ms;
    }
    .panel-title {
        font-weight: 400;
        color: $white;
    }




.side-tab:hover {
        cursor: pointer;
    }
    
    
    
    .panel-header {
        border: none;
        font-family: 'Courgette', cursive;
        color: #2dac8f;
        font-size: 24px;
    }
    .tree .admissionevents
    {
        background-color: #2dac8f;
    }



  @media (max-width:1199px){
    font-size: 11px;
  }
  @media (max-width:1024px){
    font-size: 10px;
  }

  @media (max-width:767px){
    font-size: 7px;
  }

  @media (max-width:320px){
    font-size: 5px;
  }

}
        </style>
        <script type="text/javascript">
                $( document ).ready(function() {
                $(window).resize(function() {
                    $('.homeclass').css("margin-top", $(".navbar-fixed-top").height());
                }).resize();
                });
        </script>
</header>
<body>

    

<div class="row" >

<div class="col-sm-12 col-md-2" >
                  <?php

                    require("sidebarright.php");
                    ?>
</div>
<div class="col-sm-12 col-md-10" >
 <img src="images/events.png">                 
</div>
<div class="col-sm-8 col-md-8" >
                  
</div>

</div>
    <!-- home section -->   


<div class="row" >
<hr style=" border: 0; 
  height: 1px; width: 80%;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);  ">
<div class="col-sm-12" style="font-size: 20px;">

                    <div class="home">
                        <div class="container">
                            <div class="row" >
                            <div class="col-sm-3 col-xs-12">
                                <?php
                                require("eventtree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>Events</li>
  <li class="active">Admission Events</li>
</ol>
            
                  
                <!-- panel 1 -->
               
      <div class="row" style="margin-top: 30px;">   
      <div class="col-sm-12 col-md-4"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="images/event/event1.jpg">
           
        </div><!-- End Item -->
 
         <div class="item">
          <img src="images/event/event2.jpg">
           
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/event/event3.jpg">
           
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/event/event4.jpg">
           
        </div><!-- End Item -->
 
        
                
      </div><!-- End Carousel Inner -->
 
 
    <ul class="list-group col-sm-4">
     
    </ul>
 
      <!-- Controls -->
      
 
    </div><!-- End Carousel -->
  </div>
    <div class="col-sm-8 col-md-4"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="images/event/event1.jpg">
           
        </div><!-- End Item -->
 
         <div class="item">
          <img src="images/event/event2.jpg">
           
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/event/event3.jpg">
           
        </div><!-- End Item -->
        
        <div class="item">
          <img src="images/event/event4.jpg">
           
        </div><!-- End Item -->
 
        
                
      </div><!-- End Carousel Inner -->
 
 
    
      <!-- Controls -->
      
 
    </div><!-- End Carousel -->
  </div>
      
</div> <!-- end sidetab container -->
                            </div>
                                    </div>
                            </div>
                        </div>
                    
<div class="row" style="background-color:  #fba919;height: 5px;">
<div class="col-sm-12" >
                
</div>

</div>
<div class="row">

</div>
<?php
require("footer.php");
?>

</div>

</body>

</html>














