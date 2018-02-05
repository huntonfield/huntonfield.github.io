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
p{
    text-align: justify;
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
    .tree .whybv
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
                            <div class="col-sm-3 col-xs-12" style="margin-top: 20px; margin-bottom: 20px;">
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
  <li class="active">WHY BVIMSR, NAVI MUMBAI</li>
</ol>
            
                          
                            <h4 class="panel-header collapsed">What makes BVIMSR special?</h4>
                                          
                         <p class="panel-subheader"> &nbsp;&nbsp;BVIMSR has been consistently ranked amongst the top B Schools in Navi Mumbai & Western India. With a world class infrastructure at a serene location BVIMSR provides a holistic environment for all around learning and development.</p>

<p>&nbsp;&nbsp;BVIMSR prides itself on being a student-centric institute. Students here are entrusted with resources and responsibilities early on. They are encouraged to take important administrative and policy decisions that sculpt their future and that of the Institute. This facilitates their all-round development, over and above academic performance. The Students' Council at BVIMSR is the student body responsible and accountable for all activities on the Campus throughout the year.</p>

<p>&nbsp;&nbsp;BVIMSR has developed unique learning initiatives which have come to be the hallmark of the institute. These initiatives are the outcome of three decades of experience in the field of management education. They have been developed with the help of faculty, who are in touch with the industry's current needs and the active participation of the students themselves.</p>
                
                <!-- panel 2 -->
                
              <h4>Some of the initiatives that merit a mention are:</h4>             
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Mentorship programme</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                         <p>BVIMSR has developed a unique system wherein the faculty of the institute ,institute alumni act as mentors to the future business leaders. Groups of students are attached to select faculty & alumni and they acts as a mentor to his group. He/she offers assistance, support and guidance to them, facilitating the realization of their career objectives.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">Orientation and Teaching Methodology</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>BVIMSR curriculum lays emphasis on participatory learning - combining lectures, case studies, projects, games and outdoor sessions for overall development of students. All new students go through a week-long orientation programme which includes indoor as well as outdoor sessions, to help them settle down, get to know each other and form strong working teams.</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 --> 
                 <!-- panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Industry Interaction</h4>
                        </div>
                    </span>

                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>Throughout the year the students organize and participate in various face-to face interactions with leading industry professionals through seminars and guest lectures that prove to be regular 'reality checks' for the students.</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 3 -->        
                <!-- panel 4 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <h4 class="panel-title collapsed">Career Impact</h4>
                        </div>
                    </span>

                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>&nbsp;&nbsp;BVIMSR goes beyond giving you a management degree. It prepares you for a high-flying career as a top corporate leader equipped with the wherewithal to occupy the very top echelons of the corporate world. Scores of BVIMSR alumni already hold leadership positions the world over.</p>

<p>&nbsp;&nbsp;An BVIMSR manager is equipped to lead, no matter where he goes. At BVIMSR we create cognizant, competent and confident business leaders; individuals who will make a difference in their chosen field of work and the society they live in; professionals who will cherish and uphold the values of integrity, efficiency, simplicity and hard work.</p>

<p>&nbsp;&nbsp;For over three decades, BVIMSR has been the chosen management destination for students aspiring for excellence in the corporate world. Excellent course content, highly qualified faculty and contemporary facilities combined with a unique education model, balancing unwavering career focus with holistic self development, are reasons why there is a BVIMSR business leader in every corner of the country.</p>

<p>&nbsp;&nbsp;BVIMSR has been accreted 'A' Grade by Crisil Recruiters vie for the opportunity to pick from the perfect mix of business acumen and academic intellect that our students bring to the table.</p>


                        </div>
                    </div>
                </div>
                <!-- / panel 4 -->            
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














