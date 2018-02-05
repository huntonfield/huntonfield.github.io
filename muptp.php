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
    .tree .MUPTP
    {
        background-color: #2dac8f;
        color: #fff;
    }


p,li{
    text-align: justify;
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
                                require("programtree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>programmes</li>
  <li class="active">MUPTP</li>
</ol>
            
                          
                          
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Programme Offered</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>  36 months Weekend Programme : 06.00 p.m to 9.00 p.m (Thursday to Sunday)</li>

                        <li>Masters in Marketing Management (MMM).</li>
                        <li>Masters in Financial Management (MFM).</li>
                        <li>Masters in Human Resource Devlopment Management (MHRDM)</li>

                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->

                <!-- panel 2 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Eligibility:</h4>
                        </div>
                    </span>
                    
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>  Bachelor's degree with minimum of 50% marks from any statutory /recognized University.</li>

<li>Selection Procedure: The selection of the students shall be done on the basis of Personal Interview at BVIMSR ,Navi Mumbai Campus.</li>

<li>Programme Duration: The duration of the Programme is three year with two semesters in each year.</li>

<li>Intake: 60 students.</li>


                        </div>
                    </div>
                </div> 
                <!-- / panel 2 -->

               

                 <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">MUPTP :Fee Structure</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <table border="1" style="width: 120%" >
                            <tr>
                                <td>Programmes</td><td>  Fees for the entire programme (Yearly)</td><td>  Total Fees (Rs.) </td><td>   I st Installment payable by 30th July</td><td>   II nd Installment payable by 31st Dec</td>
                            </tr>
                            <tr><td>MMM MFMMHRDM </td><td>   Academic Fee + Prospectus</td><td>   Rs. 67,000 </td><td> Rs. 37,000</td><td>    Rs. 30,000</td></tr>
                        </table>
                        <hr>
                        <h5>You may contact the following coordinator for any query</h5>
                        <table border="1" style="width: 120%">
                            <tr>
                                <td>Name  </td><td>  Designation </td><td>Email id </td><td>   Direct No</td><td>   Mobile No</td>

                            </tr>
                            <tr>
                                <td>Prof.S.S.Ranjan</td><td> Professor</td><td>   ssranjan@bvimsr.com</td><td> 022- 27572433 </td><td>  9967172487</td>
                            </tr>
                        </table>
                        <h4><a href="#">Admission form</a></h4>
                        </div>
                    </div>
                </div> 
                <!-- / panel 5 -->

                 <!-- panel 6 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsix" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <h4 class="panel-title collapsed">CONTACT DETAILS</h4>
                        </div>
                    </span>
                    
                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" >
                         <div class="panel-body" >
                        <!-- Tab content goes here -->
        Bharati Vidyapeeth's Institute of Management Studies & Research, <br> Sector 8 ,C.B.D. Belapur,Navi Mumbai 400614. <br>Contact Person: Prof. Anilkumar Deshmukh    <br>Phone No: 09823065887
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

                    
<div class="row" style="background-color:   #17A589;height: 5px;">
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














