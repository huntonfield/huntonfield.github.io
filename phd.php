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
    .tree .PHD
    {
        background-color: #2dac8f;
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
  <li class="active">PHD</li>
</ol>
            
                          
                            <h4 class="panel-header collapsed">PHD Programme in Management Studies</h4>
                           <address>Where the response to Truth is swift and sure, and spirit is not hampered by its fame."</address>               
                         <p class="panel-subheader">BVIMSR, Navi Mumbai, since its inception in 1984 has been following a tradition: the tradition of producing world class leaders. This tradition has been made possible by adopting various programmes which suit the existing business conditions.</p>
                         <p class="panel-subheader">One of the first few Management Institutes in Mumbai, BVIMSR started in 1984 on a moderate scale, and has gradually grown into a major management education hub, with infrastructure that matches international standards.</p>
                         <p>At BVIMSR, learning becomes a wonderful experience, using a mix of Exploration, Exchange, Interaction, Sharing and Caring.</p>
                
                
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Eligibility Criteria</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>  Master's Degree with min. 55% marks OR M. Phil..</li>
                        <li>PET/NET/SET score is compulsory.</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->

                 <!-- panel 3 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Fees:</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>  Rs. 75000/- Year</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->

                 <!-- panel 4 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <h4 class="panel-title collapsed">Course Work: </h4>
                        </div>
                    </span>
                    
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>  At Bharati Vidyapeeth's centre 6 month elaborate course is also conducted.</li>
                        <li>  At Bharati Vidyapeeth's centre has got 8 seats.</li>
                        <li> Centre has got 4 approved guides.</li>
                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->

                 <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">Selection Criteria</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <h5>The dully filled form is to be submitted to the institute’s office personally by the candidate.</h5>
                         <ol>Copy of Bachelor Degree Mark sheet and Certificate.</ol>
                         <ol>Copy of Masters Degree Mark sheet and Certificate.</ol>
                         <ol>Copy of the certificate showing eligibility / qualified for PET (Management Studies) conducted by University of Mumbai</ol>
                         <ol>Copy of the certificate showing exemption from PET, if any. (Like M. Phil, NET / JRF qualification).</ol>
                         <ol>Research proposal in brief on the tentative research topic.</ol>
                         <ol>Certificate showing work experience, if any.</ol>
                         <ol>Name change certificate, if any.</ol>
                         <ol>Personal Interview</ol>
                        
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














