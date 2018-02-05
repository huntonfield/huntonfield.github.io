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
    
.profilebox
{
    border-style: solid;
    border-width: 1px;
}
.profilebox .img
{
    border-style: solid;
    border-width: 1px;
    
}
.profilebox .info
{
    border-style: solid;
    border-width: 1px;
    
}

p,li{
    text-align: justify;
}




    .tree .bjmr
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


/*--------------------------bjmr logo designs-------------------------*/

.item img{
    height: auto;
    width: 100%;
}
.carousel-hensa .logo-1,
.carousel-hensa .logo-2,
.carousel-hensa .logo-3,
.carousel-hensa .logo-4,
.carousel-hensa .logo-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-hensa .carousel-inner > .active.left,
  .carousel-hensa .carousel-inner > .prev {
    left: -33.333%;
  }
  .carousel-hensa .carousel-inner > .active.right,
  .carousel-hensa .carousel-inner > .next {
    left: 33.333%;
  }
  .carousel-hensa .carousel-inner > .left,
  .carousel-hensa .carousel-inner > .prev.right,
  .carousel-hensa .carousel-inner > .active {
    left: 0;
  }
  .carousel-hensa .carousel-inner .logo-1,
  .carousel-hensa .carousel-inner .logo-2 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-hensa .carousel-inner > .item.active.right,
  .carousel-hensa .carousel-inner > .item.next {
    -webkit-transform: translate3d(33.333%, 0, 0);
            transform: translate3d(33.333%, 0, 0);
    left: 0;
  }
  .carousel-hensa .carousel-inner > .item.active.left,
  .carousel-hensa .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-33.333%, 0, 0);
            transform: translate3d(-33.333%, 0, 0);
    left: 0;
  }
  .carousel-hensa .carousel-inner > .item.left,
  .carousel-hensa .carousel-inner > .item.prev.right,
  .carousel-hensa .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-hensa .carousel-inner > .active.left,
  .carousel-hensa .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-hensa .carousel-inner > .active.right,
  .carousel-hensa .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-hensa .carousel-inner > .left,
  .carousel-hensa .carousel-inner > .prev.right,
  .carousel-hensa .carousel-inner > .active {
    left: 0;
  }
  .carousel-hensa .carousel-inner .logo-3,
  .carousel-hensa .carousel-inner .logo-4,
  .carousel-hensa .carousel-inner .logo-5 {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-hensa .carousel-inner > .item.active.right,
  .carousel-hensa .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
            transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-hensa .carousel-inner > .item.active.left,
  .carousel-hensa .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
            transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-hensa .carousel-inner > .item.left,
  .carousel-hensa .carousel-inner > .item.prev.right,
  .carousel-hensa .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.container {
  margin-bottom: 50px;
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


                        <!-- bjmr logos -->    
                            <div class="row">
                                <div class="container">
                                  <div class="row header-row">
                                    
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="carousel carousel-hensa slide" id="carousel123">
                                        <div class="carousel-inner">
                                          <div class="item active">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (1).jpg" class="img-responsive"></div>
                                          </div>
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (2).jpg" class="img-responsive"></div>
                                          </div>
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (1).png" class="img-responsive"></div>
                                          </div>          
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (2).png" class="img-responsive"></div>
                                          </div>
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (3).png" class="img-responsive"></div>
                                          </div>
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (4).png" class="img-responsive"></div>
                                          </div>
                                          <div class="item">
                                            <div class="col-xs-12 col-sm-4 col-md-2"> <img src="images\pub\a (5).png" class="img-responsive"></div>
                                          </div>
                                        
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <script type="text/javascript">
                                     (function(){
                                          $('#carousel123').carousel({ interval: 2000 });
                                          $('#carouselABC').carousel({ interval: 3600 });
                                        }());

                                        (function(){
                                          $('.carousel-hensa .item').each(function(){
                                            var itemToClone = $(this);

                                            for (var i=1;i<6;i++) {
                                              itemToClone = itemToClone.next();

                                              if (!itemToClone.length) {
                                                itemToClone = $(this).siblings(':first');
                                              }

                                              itemToClone.children(':first-child').clone()
                                                .addClass("logo-"+(i))
                                                .appendTo($(this));
                                            }
                                          });
                                        }());
                                </script>




                            </div>
                            <div class="row" >
                            <div class="col-sm-3 col-xs-12" style="margin-top:20px; margin-bottom: 20px">
                                <?php
                                require("publicationtree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>Research & publication</li>
  <li class="active">BjMR</li>
</ol>
              
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
              
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">BVIMSR’s Journal of Management Research (BJMR)</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <p>BVIMSR’s Journal of Management Research (BJMR) is an International journal, which aims at publishing high quality research findings in various disciplines of business management. There is a constant need for innovation in Management thinking to come up with appropriate solutions to the current business problems. BJMR invites research papers, articles, case studies, book reviews & comments from the world of management. We invite both academicians & practitioners to come forward with their thoughts in the form of research papers or articles. BJMR welcomes and honours devoted understanding of issues in the management of global enterprises, management theory & practice and providing theoretical and management implications useful for further development of the research.</p>
                       <p>BJMR is a Bi-annual publication of accepted papers and articles. It will be available in the printed form. Electronic submissions (MS-Word) of research paper including articles, case studies, and book review in all areas of business management are invited. Authors of accepted papers will be notified by email.</p>
                       <p>All papers will be subjected to a blind review process constituted by experts from institutions in and outside India.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                 <!-- panel 2 -->
                 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Contents: The journal will contain</h4>
                        </div>
                    </span>
                    
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li> Research Papers</li>

                        <li>Articles</li>

                        <li>Case Studies</li>

                        <li>Book Reviews</li>

                        <li>Summary of reports on various management concepts and practic</li>
                        <p>In addition the journal invites manuscripts covering application of theory to real life management activities where the findings would be of interest to researchers, executives, academicians and management students.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 2 -->
                


                
                 <!-- panel 3 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Subjects: The journal will include articles and papers with in the areas of</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Finance</li>

                         <li>Marketing</li>

                         <li>Human Resource Management</li>

                        <li> Operations Management</li>

                        <li> International Business</li>

                        <li> Information Technology</li>

                        <li> Quantitative Techniques</li>

                         <li>General Management</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->

               
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














