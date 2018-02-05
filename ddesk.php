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

p{
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
    .tree .ddesk
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
                            <div class="col-sm-3 col-xs-12" style="margin-top:20px;">
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
  <li class="active">DIRECTOR'S DESK</li>
</ol>
            
                          
                                          
                         <p class="panel-body">Director, BVIMSR.</p>
                
                <!-- panel 2 -->
                        <p class="panel-body">BVIMSR (Bharati Vidyapeeth's Institute of Management Studies and Research) was established in 1984 to cater the needs of the corporate India by providing quality education in Management and IT. The panorama of Industrial liberalization asserts that the management of Industrial operations / functions and technology will play a pivotal role in delivering competitive products and services. BVIMSR foresees this opportunity where economy has been globalised, corporate management has been decentralized and empowerment has become a reality. To avail of this opportunity, BVIMSR cultivated a new breed of professionals in Management and IT who take holistic and integrated approach of the operations thereby providing effective solutions.</p>

<p class="panel-body">Our programs are aimed at grooming these professionals equipped with the latest management tools and techniques.</p>

<p class="panel-body">I am sure that our education will provide Indian corporate with Managers of tomorrow and transform the corporate world. I am proud to state that our alumni have been placed with leading organizations in India and abroad. Needless to say our vision was further fortified by the continuous support from corporate India. I am confident that our campus will add to both corporate India as well as individual excellence.
                       
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

</div>
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














