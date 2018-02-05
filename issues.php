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

/*----------------------------
  notes
-----------------------------*/

.noteul{
  font-family:lobster,sans-serif;
  font-size:100%;
  background:;
  color:#fff;
}
.noteul li{
  list-style:none;
  margin:0.5em;
  float:left;
}
h2{
  font-size: 12px;
  background-color: #666;
  color: #fff;
  border-radius: 10%;
  text-align: center;
  text-shadow: 1px 1px 1px #000;
}


.noteul li a{
  -webkit-transform:rotate(-6deg);
}
.noteul li a:hover,ul li a:focus{
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  position:relative;
  z-index:5;
  display: inline-block;
}
.noteul li a{
  color:#000;
  background:#ffc;
  display:inline-block;
  padding:0.5em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}


    .tree .issues
    
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
  <li class="active">Issues</li>
</ol>
            <div id="main">
          
<ul class="noteul">

                                
                
<!-- 2017 -->
  <li>
    <h2>2017</h2>
    <a href="documents\NCIT2018_Proceedings.pdf "><h5 >NC IT Special Issue</h5> </a>
    <a href=" 2017V9N1.php "><h5 >Vol.9 - No.1</h5> </a>
  </li>

<!-- 2016 -->
  <li>
    <h2>2016</h2>
    <a href=" 2016V8N2.php ">  <h5>Vol.8 - No.2  </h5></a>
          <a href=" 2016V8S1.php ">  <h5>Vol.8 Special Issue </h5></a>
          <a href=" 2016V8N1.php ">  <h5>Vol.8 - No.1 </h5></a>
  </li>  

  <!-- 2015 -->
  <li>
    <h2>2015</h2>
    <a href=" 2015V7N2.php ">  <h5>Vol.7 - No.2  </h5></a>
          <a href=" 2015V7N1.php ">  <h5>Vol.7 - No.1 </h5></a>
  </li>  
<!-- 2014 -->
  <li>
    <h2>2014</h2>
    <a href=" 2014V6N2.php ">  <h5>Vol.6 - No.2   </h5></a>
          <a href=" 2014V6N1.php ">  <h5>Vol.6 - No.1  </h5></a>
  </li>  

  <!-- 2013 -->
  <li>
    <h2>2013</h2>
    <a href=" NCIT2013.php ">  <h5>NC IT Special Issue    </h5></a>
          <a href=" 2013V5N2.php ">  <h5>Vol.5 - No.2  </h5></a>
          <a href=" 2013V5N1.php ">  <h5>Vol.5 - No.1  </h5></a>
  </li>  
<!-- 2012 -->
  <li>
    <h2>2012</h2>
          <a href=" 2012V4N2.php ">  <h5>Vol.4 - No.2  </h5></a>
          <a href=" 2012V4N1.php ">  <h5>Vol.4 - No.1  </h5></a>
  </li>  

  <!-- 2011 -->
  <li>
    <h2>2011</h2>
          <a href=" 2011V3N2.php ">  <h5>Vol.3 - No.2  </h5></a>
          <a href=" 2011V3N1.php ">  <h5>Vol.3 - No.1  </h5></a>
  </li>  
  
  <!-- 2010 -->
  <li>
    <h2>2010</h2>
          <a href=" 2010V2N2.php ">  <h5>Vol.2 - No.2   </h5></a>
          <a href=" 2010V2N1.php ">  <h5>Vol.2 - No.1   </h5></a>
  </li> 
  <!-- 2009 -->
  <li>
    <h2>2009</h2>
          <a href=" 2009VN3.php ">  <h5>Vol.1 - No.3   </h5></a>
          <a href=" 2009V1N2.php ">  <h5>Vol.1 - No.2  </h5></a>
          <a href=" 2009V1N1.php ">  <h5>Vol.1 - No.1  </h5></a>
  </li>  
  
</ul> 
        </div>   
                           
            
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














