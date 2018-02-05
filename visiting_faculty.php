<!DOCTYPE HTML>
<?php
    session_start();
    require("header.php");
?>
<html>
<header>
    <link rel="stylesheet" id="styles-minified-css" href="css/style-minifield.css" type="text/css" media="all" />
    <style>
        .divshadow
        {
            padding: 5px;
            border: 3px solid #EBEBE0;
            font-size: 14px;
        }
        
        .divshadow:hover
        {

            border: 3px solid #9eaad2;
        }
        p,li{
            text-align: justify;
        }
         .tree .visiting_faculty
    {
        background-color: #2dac8f;
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
<body class="enable-transitions" data-spy="scroll" data-target="nav">
   
<div class="row" >
<div class="col-sm-8 col-md-10" >
                 
<div class="col-sm-12" style="font-size: 20px;">

                    <div class="home">
                        <div class="container">
                            <div class="row" >
                            <div class="col-sm-3 col-xs-12" style="margin-top:20px; margin-bottom: 20px">
                                <?php
                                require("facultytree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>faculty</li>
  <li class="active">Visiting faculty</li>
</ol>

   <div class="container-fluid">
                    <div class="page-content row">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Allan Collaco</b>
                                    <br />
                                    &nbsp;35 years of experience<br />
                                    &nbsp;M.A. {PM&IR)
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Vasudevan</b>
                                    <br />
                                    &nbsp;39 years of experience<br />
                                    &nbsp;B.A., B.Com., B.G.L., CAllB, GDCA
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-user-md"></i>&nbsp;Dr. Nadeem Merchant</b>
                                    <br />
                                    &nbsp;20 years of experience<br />
                                    &nbsp;B.Sc., M.B.A., Ph.D.
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Alok Govil</b>
                                    <br />
                                    &nbsp;37 years of experience<br />
                                    &nbsp;B.Tech., PGDBM, PGDFC
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Nitin Tike</b>
                                    <br />
                                    &nbsp;22 years of experience<br />
                                    &nbsp;B.Sc., M.B.A. {Finance)
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Gaurav Derasari</b>
                                    <br />
                                    &nbsp;10 years of experience<br />
                                    &nbsp;B.E {Computers)
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Ashok Thapar</b>
                                    <br />
                                    &nbsp;33 years of experience<br />
                                    &nbsp;B.Sc., B.M.M., M.B.A.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Kapil Tandon</b>
                                    <br />
                                    &nbsp;40 years of experience<br />
                                    &nbsp;M.Tech. (Chemical), PGDBM
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i> &nbsp;Ms. Geeta Mahadevan</b>
                                    <br />
                                    &nbsp;29 years of experience<br />
                                    &nbsp;M.A. {French)
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. B.S. Pai</b>
                                    <br />
                                    &nbsp;49 years of experience<br />
                                    &nbsp;B.E. (Electrical)
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-user-md"></i>&nbsp;Dr. Vandana Patil</b><br />
                                    &nbsp;1O years of experience<br />
                                    &nbsp;M.Sc., B.Ed., Ph.D.<br />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp; <b><i class="fa fa-male"></i>&nbsp;Mr. Sugam Chaubal</b>
                                    <br />
                                    &nbsp; 25 years of experience<br />
                                    &nbsp; B.Com., M.B.A.
                                </div>
                            </div>
                          
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Farrok Mistry</b>
                                    <br />
                                    &nbsp;48 years of experience<br />
                                    &nbsp;M.Com., M.M.S., CAllB
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i>&nbsp;Ms. Vaibhavi Garge</b>
                                    <br />
                                    <br />
                                    &nbsp;M.Pharm
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. S.G. Vaidya</b>
                                    <br />
                                    &nbsp;33 years of experience<br />
                                    &nbsp;M.Sc. (Maths)
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Jitendra Singh</b>
                                    <br />
                                    &nbsp;26 years of experience<br />
                                    &nbsp;M.B.A.,CFA
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i>&nbsp;Ms. Padmavati Krishnan</b>
                                    <br />
                                    &nbsp;26 years of experience<br />
                                    &nbsp;M.B.A.,CFA
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i>&nbsp;Ms. Trupti Gandhi</b>
                                    <br />
                                    &nbsp;12 years of experience<br />
                                    &nbsp;B.E.(Computers)
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp; <b><i class="fa fa-male"></i>&nbsp;Mr. K.K. Gupta</b>
                                    <br />
                                    &nbsp; 40 years of experience<br />
                                    &nbsp; M.A. {Economics)
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i>&nbsp;Ms. Asha Phadke</b>
                                    <br />
                                    &nbsp;22 years of experience<br />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-female"></i>&nbsp;Ms. Seema Shah</b>
                                    <br />
                                    &nbsp; 21 years of experience<br />
                                    &nbsp;B.E.(Computers)
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Madan Mohan</b>
                                    <br />
                                    &nbsp;43 years of experience<br />
                                    &nbsp;B.Sc., B.E., M.B.A.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. P.V. Ranganathan</b><br />
                                    &nbsp;23 years of experience<br />
                                    &nbsp;B.Com., F.S.C., AICWA<br />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-user-md"></i>&nbsp;Dr. Baldev Raj</b>
                                    <br />
                                    &nbsp;32 years of experience<br />
                                    &nbsp;PGDBM, MMM, DTM, Ph.D.
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="divshadow">
                                    &nbsp;<b><i class="fa fa-male"></i>&nbsp;Mr. Sanjay Sinha</b>
                                    <br />
                                    &nbsp;20 years of experience<br />
                                    M.Sc. (Statistics}, M.B.A.(Finance), M.Phil. Perusing Ph.D in Micro Finance
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
       </div>
   </div>
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
<?php
require("footer.php");
?>
</body>
</html>
