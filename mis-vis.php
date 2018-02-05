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
.panel-body
{
    font-family: "roboto sans-serif";
}

p
{
  text-align: justify;
}




.side-tab:hover {
        cursor: pointer;
    }
    
    
    
    .panel-title {
        border: none;
        font-family: 'Courgette', cursive;
        color: #2dac8f;
        font-size: 24px;
    }
    .tree .mis-vis
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
                                require("aboutree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>About us</li>
  <li class="active">Mission-Vision</li>
</ol>
            
                          
                            <h4 class="panel-title collapsed">VISION</h4>
                                          
                         <p class="panel-body">To be at the pinnacle of management education by equipping students with the necessary skill sets to excel in the industry and by groomingthem to adapt to the chaIlenges of corporate India.</p>
                
                <!-- panel 2 -->
                
                            <h4 class="panel-title collapsed">MISSION</h4>
                       
                        <!-- Tab content goes here -->
                        <p class="panel-body">To ensure achievement of the overall education goals through effective,fair and efficient administration of recruitment,career enhancement and benefit programs.

To foster excellence in our teaching,research, scholarship and services;to develop a cadre of students withthe attitude,leadership skills and habit of lifelong learning enabling them to be effective members of corporate India.

To create an academic environment where the highest standards of scholarship and professional practices are observed and where responsibilities of students are conscientiously met.

To deliver quality management programs which are consistent withthe demands of corporate India and to enhance thecore competencies ofan increasing number of budding professionals.
                       
             </p>  
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














