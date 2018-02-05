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
p,li{
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
    .tree .ACTIVITY
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
                                require("placementtree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>placements</li>
  <li class="active">Activity</li>
</ol>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                


               <h2> BVIMSR Placement Cell</h2>
                        <p>Meeting the challenging need of the Corporates and Industry is the prime responsibility of Managers. BVIMSR spares no effort in ensuing its students are ready for the dynamic corporate world. Bharati Vidyapeeth’s Institute of Management and Research has a well-established Placement Cell. It gives the necessary guidelines to the students to decide the career paths by counseling, guiding, motivating and mentoring them. </p>

                        <p>Placement Cell takes special care in equipping young aspirants with knowledge and skills that are expected out of them. The students at BVIMSR are well equipped and well groomed to take up any challenge in the corporate sector and also, to put their acquired skills to mutual benefit of the organization and their own self development.</p>
                        <p>Each year, the campus hosts organizations from a plethora of different industries and sectors offering diverse profiles across verticals and functional domains. The mark of success for an institution is to assist its students in achieving their dreams of kick-starting successful career in a challenging and ever-diversifying industry.  </p>
                       



                        <b>Infrastructure for Placement Cell: </b>
                        <p>The Placement Cell is equipped with the necessary infrastructure like a Seminar Hall (seating capacity 200), Two computer labs (seating capacity 60 in each), one conference room for smoothly conduct of group discussion and interviews.</p>
                        


                        <b>Activities of Placement Cell :</b>
                        <ul>
                            <li> Relationship Building with Reputed Companies and signing MOU.</li>
                            <li> Summer and Winter Projects</li>
                            <li> Final Placements</li>
                            <li> Arranging live Projects</li>
                            <li> National and International Industrial Visits</li>
                            <li> Expert Talks (Guest Lectures)</li>
                            <li> Arranging Employability Skills classes</li>
                            <li> Alumni interaction</li>
                            <li> Mentoring and Counselling</li>

                        </ul>
                       





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














