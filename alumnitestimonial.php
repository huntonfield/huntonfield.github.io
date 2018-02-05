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







.view-fifth img {
   -webkit-transition: all 0.3s ease-in-out;
   -moz-transition: all 0.3s ease-in-out;
   -o-transition: all 0.3s ease-in-out;
   -ms-transition: all 0.3s ease-in-out;
   transition: all 0.3s ease-in-out;
   width: auto;
   height: 100%;
}
.view-fifth h2 {
  margin-bottom: 0px;
  font-size: 17px;
   background: rgba(255, 255, 255, 0.5);
   color: #000;
   -webkit-box-shadow: 0px 1px 3px rgba(159, 141, 140, 0.5);
   -moz-box-shadow: 0px 1px 3px rgba(159, 141, 140, 0.5);
   box-shadow: 0px 1px 3px rgba(159, 141, 140, 0.5);
}
.view-fifth p {
  font-size: 12px;
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   color: #333;
   -webkit-transition: all 0.2s linear;
   -moz-transition: all 0.2s linear;
   -o-transition: all 0.2s linear;
   -ms-transition: all 0.2s linear;
   transition: all 0.2s linear;
}
.view-fifth:hover .mask {
   -webkit-transform: translateX(0px);
   -moz-transform: translateX(0px);
   -o-transform: translateX(0px);
   -ms-transform: translateX(0px);
   transform: translateX(0px);
}
.view-fifth:hover img {
   -webkit-transform: translateX(300px);
   -moz-transform: translateX(300px);
   -o-transform: translateX(300px);
   -ms-transform: translateX(300px);
   transform: translateX(300px);
}
.view-fifth:hover p {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=100);
   opacity: 1;
}


.view {
   width: 220px;
   height: 250px;
   margin: 10px;
   float: left;
   border: 10px solid #fff;
   overflow: hidden;
   position: relative;
   text-align: center;
   -webkit-box-shadow: 1px 1px 2px #e6e6e6;
   -moz-box-shadow: 1px 1px 2px #e6e6e6;
   box-shadow: 1px 1px 2px #e6e6e6;
   cursor: default;
}
.view .mask,.view .content {
   width: 200px;
   height: 150px;
   position: absolute;
   overflow: hidden;
   top: 100px;
   left: 0;
}
.view img {
   display: block;
   position: relative;
}



    .tree .alumnitestimonial
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
                                require("Alumnitree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>Alumni</li>
  <li class="active">Alumni testimonial</li>
</ol>
  <div class="container">
           
           <div class="row">
            <div class="main">


              <div class="col-sm-8">
                <div class="view view-fifth">
                    <img src="images/alumni/PRamaswamy.jpg" />
                    <div class="mask">
                    <p>I would like to highlight the thoughts, values and ideas that inspired me to win hearts, due to the grooming that I received from BVIMSR.</p>
                        <h2>P.Ramaswamy <small>Head -Insurance Business NSEIT</small></h2>
                        
                       
                    </div>
                </div>
                
                <div class="view view-fifth">
                    <img src="images/alumni/user.png" />
                    <div class="mask">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        
                        <h2>Shashikant Pawar <small>Senior Manager Glenmark Pharma</small></h2>
                        
                    </div>
                </div>
              
                 <div class="view view-fifth">
                    <img src="images/alumni/user.png" />
                    <div class="mask">
                    <p style="font-size: 10px;">"BVIMSR is a magnificent mosaic of various culture abundant knowledge, great friendship and unforgettable memories. BVIMSR provided me with lessons in management as well as in corporate excellence. "</p>
                        
                        <h2>Umang Parmar <small>Vice President HSBC Ltd</small></h2>
                        
                    </div>
                </div>
              </div>


              <div class="col-sm-8">
                <div class="view view-fifth">
                    <img src="images/alumni/user.png" />
                    <div class="mask">
                    <p style="font-size: 11px;">"The MMS programme of BVIMSR has helped me in expanding my career possibilities by giving me specialized knowledge and skills to apply it to my career goals."</p>
                        
                        <h2>Vishal V Gorad <small>Asst. Manager (Sales) Lnaxess India Pvt.Ltd</small></h2>
                        
                    </div>
                </div>
                <div class="view view-fifth">
                    <img src="images/alumni/divyaAgrawal.jpg" />
                    <div class="mask">
                    <p style="font-size: 11px;">"At BVIMSR I got an opportunity to build my personal and professional skills. It has helped me to develop a positive attitude towards discovering more about myself.</p>
                        
                        <h2>Divya Agrawal <small>Assistant Manager Human Tree</small></h2>
                        
                    </div>
                </div>
                <div class="view view-fifth">
                    <img src="images/alumni/Arya K.jpg" />
                    <div class="mask">
                    <p>"Investing 2 years in BVIMSR for doing my masters has been one of my major life changing decisions.</p>
                        
                        <h2>Arya K <small>Business Development Manager IFB Shipping India Pvt.Ltd</small></h2>
                        
                    </div>
                </div>
              </div>

              <div class="col-sm-8">
                <div class="view view-fifth">
                    <img src="images/alumni/Anand Thakkar.jpg" />
                    <div class="mask">
                    <p>BVIMSR offers a blend of learning, amusement and integration of enduring principles which enhanced my overall personality and fuelled confidence in me.</p>
                        
                        <h2>Anand Thakkar <small>Executive (Operations) ICICI Securities</small></h2>
                        
                    </div>
                </div>
                
               <div class="view view-fifth">
                    <img src="images/alumni/Gaurav Chauhan.jpg" />
                    <div class="mask">
                    <p>I feel privileged to be a student of BVIMSR for taking the extra mile and in being coaches and mentors to all the students.</p>
                        
                        <h2>Gaurav Chauhan <small>Management Trainee ITC Ltd</small></h2>
                        
                    </div>
                </div>
              
                <div class="view view-fifth">
                    <img src="images/alumni/Shalini Prasad.jpg" />
                    <div class="mask">
                    <p>I am proud to be alumnus of BVIMSR and realized how vital my education from BVIMSR is in today�s business world.</p>
                        
                        <h2>Shalini Prasad <small>Business Development Manager Zaro Education</small></h2>
                        
                    </div>
                </div>
              </div>

               <div class="col-sm-8">
                <div class="view view-fifth">
                    <img src="images/alumni/user.png" />
                    <div class="mask">
                    <p>"I appreciate the efforts and opportunities provided by BVIMSR which helped me in every sphere of my career and life."</p>
                        
                        <h2>Rahul Babar <small>Management Trainee Future Group</small></h2>
                        
                    </div>
                </div>
                
               
                
              </div>
                
            </div>
        </div>
    </div> <!--/ .row -->
   </div> 
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














