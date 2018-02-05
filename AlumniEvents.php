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
    
p,li{
  text-align: justify;
}




    .tree .AlumniEvents
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
<div class="col-sm-8 col-md-10" >
          

<div class="col-sm-12" style="font-size: 20px;">

                    <div class="home">
                        <div class="container">
                            <div class="row" >
                            <div class="col-sm-3 col-xs-12" style="margin-top:20px; margin-bottom: 20px">
                                <?php
                                require("Alumnitree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>Alumni</li>
  <li class="active">Alumni Events</li>
</ol>
              
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
              <P>Alumni Team</P><small>Our Vision is to nurture an alumni community where each and every member feels connected with the alma mater and with each member of the BVIMSR family.</small>
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Objectives include:</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <ul><li>Ensuring that the alumni community is well connected</li>

                         <li>  Ensuring that our alumni feel a sense of belonging to the alma mater</li>

                         <li>  Establishing and sustaining a link between the alumni and the current students</li>

                          <li> Creating a culture of participation so that students outside the team can also contribute to its objectives</li></ul>


                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->

      <div class="row" style="margin-top: 20px;">   
      <div class="col-sm-6"> 
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
<div class="col-sm-6" style="font-size: 14px;margin-top: 0;">
    <h3 style="color: #000;text-shadow: 1px 2px 2px #000;">Events @ BVIMSR</h3>
                <p>Events held at BVIMSR are a true testimony to its student-driven character. Be it an intra college event like Shikhar ’ or a mega event like ‘Alumni Meet’ – every aspect is handled by students of BVIMSR. Students are rigorously involved in planning, organizing and executing of events. This goes a long way in showing the level of commitment of BVIMSR students. Events organized round the year are multitude in nature varying from management contests to cultural activities. These events attract large participation from different management institutes across India.</p>

</div>

</div>






                
    </div> <!--/ .row -->
    </div> <!--/ .row -->
</div> <!-- end sidetab container -->
                            </div>
                                    </div>
                            </div>
                        </div>        
</div>
<div class="col-sm-12 col-md-2" >
                  <?php

                    require("sidebarright.php");
                    ?>
</div>



</div>
    <!-- home section -->   

<div class="row" style="background-color:  #17A589;height: 5px;">
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














