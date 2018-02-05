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




    .tree .board_members
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
                                require("publicationtree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>Research & publication</li>
  <li class="active">Board Members</li>
</ol>
              
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
              <h4>BVIMSR’s JOURNAL OF MANAGEMENT RESEARCH</h4>
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Patron :</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>Hon’ble Dr. Patangraoji Kadam
                        Founder Bharati Vidyapeeth
                        Chancellor, Bharati Vidyapeeth University</li>


                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                 <!-- panel 2 -->
                 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Advisory Board :</h4>
                        </div>
                    </span>
                    
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li> Dr. Shivajirao Kadam : Vice – Chancellor, Bharati Vidyapeeth University, Pune</li>

                         <li>   Mr. Vishwajit Kadam : Secretary, Bharati Vidyapeeth , Pune</li>

                         <li>   Dr. Uttamrao Bhoite : Executive Director, Bharati Vidyapeeth , Pune</li>

                         <li>   Dr. S.F.Patil : Former Vice Chancellor, Bharati Vidyapeeth University , Pune</li>

                        <li>    PadmaShri Dr. Pritam Singh : Director General, International Management Institute, New Delhi</li>

                         <li>   Prof.G.M.Chowdhury :Director, Institute of Business Administration, University of Dhaka, Bangladesh</li>

                         <li>   Dr.Y.K.Bhushan : Sr. Advisor, ICFAI Business School, Mumbai</li>

                         <li>   Dr. B.R.Singh : Former Director- HR, Ispat Industries Ltd.</li>

                         <li>   Dr. A.B.Rao :Former Director, BVIMSR, Navi Mumbai</li>

                         <li>   Dr.D.Y.Patil : Director, BVIMSR,Navi Mumbai</li>
                        
                        </div>
                    </div>
                </div> 
                <!-- / panel 2 -->
                


                
                 <!-- panel 3 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Editorial Board :</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Dr. D.Y.Patil: Editor –in – Chief</li>
                         <li>   Dr. R.K.Hebsur : Former Deputy Director, TATA Institute of Social Sciences, Mumbai</li>

                         <li>   Dr. Upinder Dhar : Vice Chancellor, Shri Vaishnav Vishwavidyalaya, Indore</li>

                        <li>    Dr.Satish C.Sharma : Professor and CMD, Maharaja group of Colleges, Udaipur</li>

                         <li>   Dr.S.Prakash : Professor, Department of Management Studies, SNS College of Technology, Coimbatore, Tamil Naidu</li>

                         <li>   Dr.V.Mahalakshmi :Dean Panimalar Engineering College,Chennai</li>

                         <li>   Dr. Vaishali Patil : Professor - Quality Systems and New Business Initiatives, Welingkar Institute of Management Development & Research, Mumbai</li>

                         <li>   Dr. Dick Oluku Mukoro : Senior Lecturer Department of Accounting, Covenant University, Ota Nigeria</li>

                         <li>   Dr. Emmanuel Amoo : Lecturer-1 School of Social Sciences, Covenant University, Ota, Nigeria</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->

                <!-- panel 4 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <h4 class="panel-title collapsed">Editorial Committee :</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Prof. J.C.Sharma : Executive editor</li>

                        <li>    Dr. Manisha Dubey Shukla: Co-editor</li>

                         <li>   Prof. Pooja Kadam : Member</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->

                <!-- panel 5 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">Editorial Support Committee</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Prof. Pratibha Deshmukh</li>

                          <li>  Prof. Kuldeep Bhalerao</li>

                         <li>   Prof. Ritu Goswami</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 5 -->

                <!-- panel 6 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsix" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <h4 class="panel-title collapsed">Review Committee (Internal)</h4>
                        </div>
                    </span>
                    
                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Dr. Anjali Kalse</li>

                        <li>    Dr. G. P.Shinde</li>

                        <li>    Dr. Kamini Khanna</li>

                         <li>   Prof. Deepak Jakate</li>

                         <li>   Dr. Sharukh Tara</li>

                         <li>   Prof. J. C. Sharma</li>

                         <li>   Dr. Amol Gore</li>

                         <li>   Dr. Manisha Dubey Shukla</li>

                         <li>   Dr. Vishal Chavan</li>

                         <li>   Dr. Prachi Murkute</li>

                         <li>   Dr. Suhasini Vijaykumar</li>

                         <li>   Dr. Jyoti Kharade</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 6 -->

                 <!-- panel 7 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab7" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingseven" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            <h4 class="panel-title collapsed">External Reviewers</h4>
                        </div>
                    </span>
                    
                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <li>Experts from Teaching and Research Institutes and Industry.</li>

                         <li>   The views expressed in the journal by the authors are of their own and not of the editors nor of the publisher</li>

                         <li>   It is the sole responsibility of the authors that the article submitted by them is their original work and that the article has not been published anywhere else.</li>

                         <li>   The legal jurisdiction for any dispute arising from this publication will be Navi Mumbai</li>

                         <li>   Copyright © BVIMSR’s Journal of Management Research. All rights reserved.</li>

                         <li>   Contents should not be copied, emailed or reproduced without the written permission of the copyright holder.</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 7 -->

               
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














