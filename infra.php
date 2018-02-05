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
p{
    text-align: justify;
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
    .tree .infra
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
  <li class="active">INFRASTRUCTURE</li>
</ol>
            
                          
                            <h4 class="panel-header collapsed">INFRASTRUCTURE</h4>
                                          
                         <p class="panel-subheader">Nestled amongst beautiful hills and spread over four acres - one would not imagine that this serene campus is in such proximity to the industrial belt that employs millions and contributes so much to the state and even the country.

Nestled amongst beautiful hills and spread over four acres - one would not imagine that this serene campus is in such proximity to the industrial belt that employs millions and contributes so much to the state and even the country.</p>
                
                <!-- panel 2 -->       
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">CLASSROOMS</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                         <p>&nbsp;&nbsp;Just like the campus, the classrooms at BVIMSR are also designed to make learning and exploration conducive. A Wi-Fi enabled campus ensures that all students stay connected to the world, their studies, their Faculty and to each other. Air-conditioning in all the classrooms ensures maximum productivity throughout the long day.</p>

<p>&nbsp;&nbsp;Audio visual aids such as LCD projectors, Audio Systems and Acoustically designed classrooms all add to making the environment even more conducive and to facilitate better absorption as well as dissemination of information.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">SEMINAR AND CONFERENCE HALL</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>While the foundation of any good Management Programme is built around the core faculty, Guest and Visiting Faculty play a very important role in bringing in fresh perspective, a view from the inside (of an organisation) and diverse viewpoints that challenge and then stimulate further thinking. Similarly, presentations, audio-visuals, seminars and conferences add perspective to what the student has learnt and expose them to new developments and perspectives. To aid them in all this and to help them transition from the classroom to corporate meeting rooms, BVIMSR has invested in the best of conferencing and meeting facilities that boast of the best equipment..</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 --> 
                 <!-- panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">LIBRARY</h4>
                        </div>
                    </span>

                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>&nbsp;&nbsp;SThe role of any Faculty is not just to deliver Lectures but to develop in their students, a thirst for more knowledge. BVIMSRs Faculty excels on this front – and to satisfy this thirst, BVIMSR has created a Library whose variety of books add to both, width and depth of knowledge.</p>

<p>&nbsp;&nbsp;The BVIMSR library stocks nearly 8400 books including books in the areas of Management, Psychology, Computers, as well as Novels, Annual reports and more than 45 Foreign and Indian Business Journals & Magazines.</p>

<p>&nbsp;&nbsp;Excellent systems ensure that information pertaining to these books can be quickly tracked / retrieved.</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 3 -->        
                <!-- panel 4 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <h4 class="panel-title collapsed">INFORMATION TECHNOLOGY AND Wi-Fi FACILITIES</h4>
                        </div>
                    </span>

                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>&nbsp;&nbsp;Education is all about the gathering, dissemination and sharing of information.</p>

<p>&nbsp;&nbsp;While Faculty can be the catalysts, technology is the enabler.</p>

<p>&nbsp;&nbsp;BVIMSR has recognised this all along and has some of the best IT infrastructure, including state of the art servers, and a Wi-Fi enabled campus to facilitate the smooth and seamless flow of information. Each student is provided with a laptop that lets him stay informed, stay connected and carry her knowledgebase around with</p>


                        </div>
                    </div>
                </div>
                <!-- / panel 4 -->
                <!-- panel 5 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">CANTEEN</h4>
                        </div>
                    </span>

                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>Besides providing food for thought, BVISR also provides its students good food to nourish the body, mind and soul.</p>

                        </div>
                    </div>
                </div>
                <!-- / panel 5 -->   
                <!-- panel 6 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsix" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <h4 class="panel-title collapsed">HOSTELS / APARTMENTS</h4>
                        </div>
                    </span>

                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>BVIMSR recognises the fact that its students have embarked on a mission to add to their knowledge – many of them have done so at the cost of giving up the comforts of home and hearth to embark on this journey of knowledge. BVIMSR understands this and has created a hostel facility that offers its students the comforts of home. The hostel and the campus provide students to spend more time and interact with each other and with their Faculty.</p>

                        </div>
                    </div>
                </div>
                <!-- / panel 6 -->                           
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














