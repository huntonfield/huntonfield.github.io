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
.panel-subheader
{
    font-family: "roboto sans-serif";
}
.panel-body
{
    font-family: "roboto sans-serif";
   
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
        text-align: justify;
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
    .tree .core_faculty
    {
        background-color: #2dac8f;
    }
 p,li{
            text-align: justify;
        }
        .pe
        {
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
  <li class="active">core faculty</li>
</ol>
       <!-----------------------------------------------------Dr. D.Y. Patil------------------------------------------------------ -->       
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" >

               <!-- panel 1 -->
               <div class="col-sm-12"> 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Dr. D.Y. Patil</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                       
                                            <div class="row" >
                                                <div class="panel panel-default">
                                                 <div class="panel-body">
                                                <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                                                 <img style=" border-radius: 5%;" alt="User Pic" src="images/content/CFO_1.jpg" id="profile-image1" class=" img-responsive" >
                                                </div>
                                                <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                                                    
                                                      <h2>Dr. D.Y. Patil</h2>
                                                      <p>an   <b> Director In-charge</b></p>
                                                    
                                                     <hr>
                                                    <ul class="container details" >
                                                      <li><p><i class="fa fa-university"></i>B.Sc. MBA, Ph.D.</p></li>
                                                      <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                                                    </ul>
                                                    <hr>
                                                    <div >Professional Experience : 35 years of Academic administration & Industry.<br><a href="Profile.html">View Profile»</a></div>
                                                </div>
                                          </div>
                                      </div>
                                      </div> 
                </div> </div>
                <!-- / panel 1 -->
    </div> <!--/ .row --></div>
  </div>

<!----------------------------------------------------------Dr. Anjali Kalse------------------------------------------------- -->       
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">

               <!-- panel 2 -->
               <div class="col-sm-12"> 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Dr. Anjali Kalse</h4>
                        </div>
                    </span>                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-4.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Anjali Kalse</h2>
                            <p>an   <b> Professor (Human Resources & Organization Development)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Sc., MIRPM, Ph.D. NFNLP [USA]</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 16 years of Industry and Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
</div>
                        </div>
                     
                </div> </div>
                <!-- / panel 2 -->
    </div> <!--/ .row -->      

 <!--------------------------------------------------------Dr. Amol Gore--------------------------------------------------- -->       
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 3 -->
               <div class="col-sm-12"> 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading3" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <h4 class="panel-title collapsed">Dr. Amol Gore</h4>
                        </div>
                    </span>
                    
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   

                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-1.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Amol Gore</h2>
                            <p>an   <b> Professor (Operations)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>M.S. (Sweden), Dr.Sc.(Tech),Post-Doctorate(France)</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 13 years of Academics and Industry<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                        </div>
                    
                </div> </div></div></div>
                <!-- / panel 3 -->

 <!--------------------------------------------------------Mr. Suresh Patil--------------------------------------------------- -->          
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

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
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/comm-03.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
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
                          <div class="pe" >Professional Experience : 34 years of Industry and 20 years of Academic Experience<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
</div>

                        </div>
                     
                </div> </div>
                <!-- / panel 4 -->
    </div> <!--/ .row -->

<!-------------------------------------------------------Dr. Govind P. Shinde---------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 5 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading5" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h4 class="panel-title collapsed"> Dr. Govind P. Shinde</h4>
                        </div>
                    </span>
                     
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-9.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Govind P. Shinde</h2>
                            <p>an   <b> Associate Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>M.Com. GDC&A, MBA, Ph.D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 16 years of Industry & Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 

                                    </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 5 -->
    </div> <!--/ .row -->

<!-------------------------------------------------------Mr. Deepak Jakate---------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 6 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading6" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <h4 class="panel-title collapsed"> Mr. Deepak Jakate

</h4>
                        </div>
                    </span>
                     
                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  


   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-8.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Deepak Jakate</h2>
                            <p>an   <b> Associate Professor (Operations)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Tech. PGDM (IIM-B)</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 26 years of Industry & Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                  </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 6 -->
    </div> <!--/ .row -->

<!------------------------------------------------------Dr. Manisha Dubey----------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 7 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab7" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading7" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <h4 class="panel-title collapsed"> Dr. Manisha Dubey</h4>
                        </div>
                    </span>
                     
                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   



   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/manish.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Manisha Dubey</h2>
                            <p>an   <b> Associate Professor (Organizational Behaviour & Human Resources)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>PhD, NET, MHRM & IR</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 12 years of Academic<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
</div>

                        </div>
                     
                </div> </div>
                <!-- / panel 7 -->
    </div> <!--/ .row -->

<!--------------------------------------------------------Dr. Vishal Dilip Chavan--------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 8 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab8" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading8" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h4 class="panel-title collapsed"> Dr. Vishal Dilip Chavan</h4>
                        </div>
                    </span>
                     
                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/vishalchavan.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Vishal Dilip Chavan</h2>
                            <p>an   <b> Associate Professor</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Com, MBA, PhD, UGC-NET</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 7 years of Corporate and 8 years of Teaching Experience<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 

                                    </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 8 -->
    </div> <!--/ .row -->

<!-------------------------------------------------------Mr. Kuldeep Bhalerao---------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;">

               <!-- panel 9 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab9" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading9" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <h4 class="panel-title collapsed">Mr. Kuldeep Bhalerao</h4>
                        </div>
                    </span>
                     
                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  
   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-12.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Kuldeep Bhalerao</h2>
                            <p>an   <b> Assistant Professor (Human Resources & Reward Mgt.)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i> B.Tech. (Textile), MBA ,UGC -NET</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 9 years of Industry & Academic<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                    </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 9 -->
    </div> <!--/ .row -->

<!----------------------------------------------------Ms. Sonali Athawale------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 10 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab10" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading10" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            <h4 class="panel-title collapsed">Ms. Sonali Athawale

</h4>
                        </div>
                    </span>
                     
                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-15.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms. Sonali Athawale</h2>
                            <p>an   <b> Assistant Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>M.Com, MBA, Ph.D. (P).</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 3 years of Industry & 7 years of Academic<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                  </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 10 -->
    </div> <!--/ .row -->

<!----------------------------------------------------Ms.Veena Chavan------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 11 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab11" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading11" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                            <h4 class="panel-title collapsed">Ms.Veena Chavan</h4>
                        </div>
                    </span>
                     
                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  


   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-16.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms.Veena Chavan</h2>
                            <p>an   <b> Assistant Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>BCA, MBA (Finance and Marketing).</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 9 years of Industry & Academics.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 11 -->
    </div> <!--/ .row -->

<!--------------------------------------------------------Ms. Asmatara Shaikh--------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 12 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab12" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading12" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                            <h4 class="panel-title collapsed"> Ms. Asmatara Shaikh</h4>
                        </div>
                    </span>
                     
                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-11.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms. Asmatara Shaikh</h2>
                            <p>an   <b> Assistant Professor (Marketing)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.A., MBA, Pursuing Ph. D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 5 years of Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                    </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 12 -->
    </div> <!--/ .row -->

<!----------------------------------------------------Ms. Priyeta Priyadarshani------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

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
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-14.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
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
                          <div class="pe" >Professional Experience : 5 years of Academic..<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 13 -->
    </div> <!--/ .row -->

<!----------------------------------------------------------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 14 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab14" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading14" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                            <h4 class="panel-title collapsed"> Ms. Sushma Patil</h4>
                        </div>
                    </span>
                     
                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/faculty-18.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms. Sushma Patil</h2>
                            <p>an   <b> Assistant Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Pharm. MBA</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 5 years of Academic & 6years of industry.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 14 -->
    </div> <!--/ .row -->

<!-----------------------------------------------------Dr. Prachi Murkute------------------------------------------------------ --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 15 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab15" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading15" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                            <h4 class="panel-title collapsed">Dr. Prachi Murkute</h4>
                        </div>
                    </span>
                     
                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  


   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Dr.PrachiMurkute.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Prachi Murkute</h2>
                            <p>an   <b> Assistant Professor (Human Resource)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Com., PGDBM, MMS & Ph.D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 11 years Industry & Academics.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 15 -->
    </div> <!--/ .row -->

<!----------------------------------------------------------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 16 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab16" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading16" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                            <h4 class="panel-title collapsed">Dr. Mrinal Phalle</h4>
                        </div>
                    </span>
                     
                    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  


   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/MrinalPhalle.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Mrinal Phalle</h2>
                            <p>an   <b> Assistant Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B.Sc., MMS (Finance), Ph.D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 7 years of Academics.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                  </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 16 -->
    </div> <!--/ .row -->

<!--------------------------------------------------Mr. Vikrant D. Gharat--------------------------------------------------------- --> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 17 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab17" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading17" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                            <h4 class="panel-title collapsed">Mr. Vikrant D. Gharat</h4>
                        </div>
                    </span>
                     
                    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  


   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/vikran.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Vikrant D. Gharat</h2>
                            <p>an   <b> Assistant Professor (Marketing)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>Bsc(Chemistry) First Rank, MMS, LLB, DIT NIIT, CFS.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 5  years of Entrepreneurial experience and Corporate consulting, Worked with Robo silicion pvt.ltd, Lafarge, RMC India, Ultra tech cement, CIDCO for rehabilitation package for project affected people.Legal consultant on the  criminal side, arbitration, matrimonial, non litigation and 3 years of academic experience. Associated with various NGO's for social transformation. <br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                  </div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 17 -->
        
<!--------------------------------------------------Mr. Sanjay Salunkhe--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 18 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab18" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading18" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            <h4 class="panel-title collapsed">Mr. Sanjay Salunkhe</h4>
                        </div>
                    </span>
                     
                    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Sanjay.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Sanjay Salunkhe</h2>
                            <p>an   <b> Assistant Professor(Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>M. Com, MFM, LLB.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 20 years of Industry and 4 years of Academics.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 18 -->
        
<!--------------------------------------------------Dr. Uma Durgude--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 19 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab19" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading19" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                            <h4 class="panel-title collapsed">Dr. Uma Durgude</h4>
                        </div>
                    </span>
                     
                    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Uma.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Dr. Uma Durgude</h2>
                            <p>an   <b> Assistant Professor (Marketing)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>M.Sc, MMS, Ph. D.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 5 years of Industry & 7 years of Academics.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                    </div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 19 -->
        
<!--------------------------------------------------Dr. Purvi Pujari--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

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
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Purvipujari.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
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
                          <div class="pe" >Professional Experience : 9 years of Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                  </div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 20 -->
        
<!--------------------------------------------------Mr. Sekhar Velagaleti--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 21 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab21" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading21" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            <h4 class="panel-title collapsed">Mr. Sekhar Velagaleti </h4>
                        </div>
                    </span>
                     
                    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                  
   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Sekhar.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Sekhar Velagaleti</h2>
                            <p>an   <b> Assistant Professor ( General Management)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>Masters in Management (Technology) from IIT Bombay,<br> 
                            Masters in Electrical Power Systems from Andhra University.</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 32 years of experience in IT and Manufacturing industries. 11 years in  IT industry in the areas of Service Management, Business Processes, Delivery Management,  Quality Systems, Audits, Value propositions,  Customer Relationship management. 21 years in Electrical Manufacturing industry in the areas of Technology development, R&D, Product commercialisation, Automated Systems, Renewable energy & Energy efficient products.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
</div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 21 -->
        
<!--------------------------------------------------Mr. Sameer Sonawane--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 22 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab22" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading22" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
                            <h4 class="panel-title collapsed">Mr. Sameer Sonawane </h4>
                        </div>
                    </span>
                     
                    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/SameerSonawane.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Mr. Sameer Sonawane</h2>
                            <p>an   <b> Assistant Professor (Marketing)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i>B. Pharm (UDCT), MMM, UGC – NET, DBM, PGDRAF</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 6 years of Industry and 5 years of Teaching.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div></div>
                <!-- / panel 22 -->
        
<!--------------------------------------------------Ms. V. Padmavathi--------------------------------------------------------- --> 
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;" style="width: 100%;align-content: center;">

               <!-- panel 23 -->
               <div class="col-sm-12"> 
                 <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab23" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading23" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            <h4 class="panel-title collapsed">Ms. V. Padmavathi</h4>
                        </div>
                    </span>
                     
                    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23" >
                        
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       
                                   
                                   

   <div class="row">          
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3">
                       <img style=" boRder-radius: 5%;" alt="User Pic" src="images/content/Padmavathi.jpg" id="profile-image1" class=" img-responsive" > 
                     
                 
                      </div>
                      <div class="col-md-6 col-xs-12 col-sm-6 col-lg-6" >
                          
                            <h2>Ms. V. Padmavathi</h2>
                            <p>an   <b> Assistant Professor (Finance)</b></p>
                          
                           <hr>
                          <ul class="container details" >
                            <li><p><i class="fa fa-university"></i> M.Com, MBA, M.Phil, UGC (NET).</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p></li>
                          </ul>
                          <hr>
                          <div class="pe" >Professional Experience : 12 years of Academic.<br><a href="Profile.html">View Profile»</a></div>
                      </div>
                </div>
            </div>
            </div> 
                                   </div>

                        </div>
                     
                </div> </div>
                <!-- / panel 23 -->
    </div> <!--/ .row -->
<!----------------------------------------------------------------------------------------------------------- --> 
   
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














