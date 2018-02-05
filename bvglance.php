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
li
{
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
    .tree .bvglance
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
           
            
                          
                            <h4 class="panel-header collapsed">BVIMSR AT GLANCE</h4>
                                          
                         <p class="panel-subheader">Bharati Vidyapeeth's Institute of Management Studies & Research ,Navi Mumbai is a premier B-School of India in Navi Mumbai, recognized for its excellence in academics, high quality management programme and its valuable contributions to industry, society and students. BVIMSR,Navi Mumbai was established in 1984.</p>
                
                <!-- panel 2 -->
                
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="true">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">BVIMSR,NAVI MUMBAI CURRENTLY OFFERS THE FOLLOWING PROGRAMS :</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                         <li>A two years full time MMS programme of Mumbai University giving the options to specialize in Marketing, Finance, Operations,System and Human Resources (Admission through MHCET, CAT,XAT,ATMA,MAT)

        <li>A two year full time PGDBM programme (autonomous ) , approved by AICTE.Options to specialize in Marketing, Finance, Operations,System and Human Resources (Admission through MHCET, CAT,XAT,ATMA,MAT, followed by internal exam.)</li>
        <li>Mumbai University Part Time Programmes ( MMM,MFM, MHRDM) for the working professional offered during the week ends.</li>

        <li>Management Devlopment Programmes for corporates, as per the requirements of the corporate houses.</li><br>

        <p>&nbsp;The essential strong pillars of BVIMSR Navi Mumbai are its illustrious alumni, exemplary students, outstanding full time faculty and numerous visiting faculty members from the corporate and industry. BVIMSR Navi Mumbai is a student driven institute.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">THE STUDENT’S COUNCIL CONSISTS OF SIX TEAMS ARE LISTED BELOW</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        
                        <li>Alumni Team</li>

                <li>Corporate Interface Team</li>

                <li>Co-Curricular Team</li>

                <li>Placement Advisory Team</li>

                <li>Entrepreneurship and Consulting Cell</li>

                <li>Sports Management Team</li>
                <br>

                <p> &nbsp;&nbsp;    The student’s council organizes a number of events, management competitions as well as cultural and sports activities. BVIMSR Navi Mumbai ensures that its alumni community stays well connected with the college. Several events are organized wherein the alumni interact with the students and share their corporate experiences.</p>


                <p>  &nbsp;&nbsp;   The companies that come to the campus offers diverse profiles across verticals and functional domains including Investment Banking, , Corporate Treasury, , Industrial Relations, Organization & Talent, Sales, Marketing, Logistics, . The students of BVIMSR Navi Mumbai continue to prove their mettle thereby strengthening the brand of the college in the corporate world. BVIMSR Navi Mumbai, with its picturesque campus, state of art infrastructure and meritorious students continues to be one of the leaders in management education.</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->       
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














