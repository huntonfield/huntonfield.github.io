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
        width: 100%;
        
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
    .tree .Committee
    {
        background-color: #2dac8f;
        color: #fff;
    }

p
{
  text-align: justify;
}
    
    .panel-title1 {
        border: none;
        font-family: 'Courgette', cursive;
        color: #2dac8f;
        font-size: 24px;
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
  <li><a href="aboutus.php">placements</a></li>
  <li class="active">placement Committee</li>
</ol>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                
                   <h4 class="panel-title1 collapsed">Placement Team</h4>
                                          
                         <p class="panel-body">The Placement Cell is headed by a competent individual having 35 years of combined industry and academic experience and supported by four faculty members and one supporting staff member and core team of volunteer students. Members of Placement Team are as follows:</p>
                

                         <!--------------------------------------------------------Mr. Suresh Patil--------------------------------------------------- -->          
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 4 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading4" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h4 class="panel-title collapsed">Mr. Suresh Patil</h4>
                        </div>
                    </span>
                     
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                
  
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img alt="User Pic" src="images/content/comm-03.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Suresh Patil</h2>
                            <p>an   <b> Professor ( Organisational | Behavior & HR )</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i> M.Com, PGDPM, PGDTD.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div >Professional Experience : 34 years of Industry and 20 years of Academic Experience<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 

                        </div>
                    </div>
                     
                </div> </div>
                <!-- / panel 4 -->
    </div> <!--/ .row -->


<!----------------------------------------------------Ms. Priyeta Priyadarshani------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 13 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab13" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading13" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                            <h4 class="panel-title collapsed">Ms. Priyeta Priyadarshani</h4>
                        </div>
                    </span>
                     
                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   

 
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img alt="User Pic" src="images/content/faculty-14.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms. Priyeta Priyadarshani</h2>
                            <p>an   <b> Assistant Professor (Human Resources & Industrial Relation)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B. Sc., PGDIM (XISS-Ranchi),M.Phil, Pursuing Ph. D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div >Professional Experience : 5 years of Academic..<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 

                        </div>
                    </div>
                     
                </div> </div>
                <!-- / panel 13 -->
    </div> <!--/ .row -->

<!--------------------------------------------------3.  Prof. Rajni Mathur--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 20 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab201" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading201" data-toggle="collapse" data-parent="#accordion" href="#collapse201" aria-expanded="false" aria-controls="collapse201">
                            <h4 class="panel-title collapsed"> Prof. Rajni Mathur</h4>
                        </div>
                    </span>
                     
                    <div id="collapse201" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading201" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                  

                    
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <h2>Prof. Rajni Mathur</h2>
                     
                </div>
            </div>
            </div> 

                        </div>
                    </div>
                     
                </div> </div></div>
                <!-- / panel 20 -->







<!--------------------------------------------------Dr. Purvi Pujari--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 20 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab20" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading20" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                            <h4 class="panel-title collapsed">Dr. Purvi Pujari</h4>
                        </div>
                    </span>
                     
                    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                  

   
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img alt="User Pic" src="images/content/Purvipujari.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Purvi Pujari</h2>
                            <p>an   <b> Assistant Professor ( General Management)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>BA (Management), <br>
                            MA (Economics)-University Topper and Gold Medalist, <br>
                          UGC (NET)-JRF, Ph.D. in Economics.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div >Professional Experience : 9 years of Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 

                        </div>
                    </div>
                     
                </div> </div></div>
                <!-- / panel 20 -->

<!-------------------------------------------------- Mrs. Varsha Gavali--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 20 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab202" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading202" data-toggle="collapse" data-parent="#accordion" href="#collapse202" aria-expanded="false" aria-controls="collapse202">
                            <h4 class="panel-title collapsed"> Mrs. Varsha Gavali</h4>
                        </div>
                    </span>
                     
                    <div id="collapse202" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading202" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                  

                    <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <h2> Mrs. Varsha Gavali</h2>
                     
                </div>
            </div>
            </div> </div>

                        </div>
                    </div>
                     
                </div> </div></div>
                <!-- / panel 20 -->













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














