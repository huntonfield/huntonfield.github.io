<!DOCTYPE HTML>
<?php
    session_start();
    require("header.php");
?>
<html>
<header>
  <style type="text/css">
body { padding-top: 60px; }
.nav.nav-justified > li > a { position: relative; }
.nav.nav-justified > li > a:hover,
.nav.nav-justified > li > a:focus { background-color: transparent; }
.nav.nav-justified > li > a > .quote {
   

    position: absolute;
    left: 0px;
    top: 0;
    opacity: 0;
    width: 30px;
    height: 30px;
    padding: 5px;
    background-color: #2dac8f;
    border-radius: 15px;
    color: #fff;  
}
.nav.nav-justified > li.active > a > .quote { opacity: 1; }
.nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #2dac8f; }
.nav.nav-justified > li > a > img { 
    max-width: 100%; 
    opacity: .3; 
    -webkit-transform: scale(.8,.8);
            transform: scale(.8,.8);
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.nav.nav-justified > li.active > a > img,
.nav.nav-justified > li:hover > a > img,
.nav.nav-justified > li:focus > a > img { 
    opacity: 1; 
    -webkit-transform: none;
            transform: none;
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            /*transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);*/
}
.tab-pane .tab-inner { 
  padding: 30px 0 20px; 
  width: 100%;
}
p{
    text-align: justify;
}
@media (min-width: 768px) {
    .nav.nav-justified > li > a > .quote {
        left: auto;
        top: auto;
        right: 20px;
        bottom: 0px;
    }  
    .tree .guidhand
    {
        background-color: #2dac8f;
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
                                require("aboutree.php");
                                ?>
                            </div>
                            <div class="col-sm-8 col-xs-12">
                                
    <div class="row" style="margin-left: 30px;">
            <!-- begin panel group -->
            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
  <li><a href="index.php">Home</a></li>
  <li>About us</li>
  <li class="active">Guiding hands</li>
</ol>
       


<div class=" container">
  <div class=" row ">
    <div class=" col-xs-12 col-sm-12 col-md-12  " role="tabpanel">
            <div class=" col-xs-4 col-sm-12 col-md-7 ">
                <!-- Nav tabs -->
                <ul class=" nav nav-justified " id="nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#pkadam" aria-controls="pkadam" role="tab" data-toggle="tab">
                            <img class="img-thumbnail" src="images/content/CEO_1.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#skadam" aria-controls="skadam" role="tab" data-toggle="tab">
                            <img class="img-thumbnail" src="images/content/SVP-Copy.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#vkadam" aria-controls="vkadam" role="tab" data-toggle="tab">
                            <img class="img-thumbnail" src="images/content/CFO.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=" col-xs-8 col-sm-12 col-md-8 ">
                <!-- Tab panes -->
                <div class="tab-content" id="tabs-collapse">            
                    <div role="tabpanel" class="tab-pane fade in active" id="pkadam">
                        <div class="tab-inner">                    
                           
                            <p><strong class="text-uppercase">Dr. Patangrao Kadam</strong></p>
                            <p><em class="text-capitalize"> Founder,  Bharati Vidyapeeth Chancellor</em> </p>
                            <hr>  
                             <p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bharati Vidyapeeth was established in May 1964, with the objective of contributing to the intellectual awakening and social transformation taking place in the educational, economic, social and cultural spheres across India, and particularly in Maharashtra. Its activities are designed to bring about the progress and welfare of different sections of the population, especially women, and tribal and rural peoples.</p>

<p class="lead" style="font-size: 16px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Under the imaginative, dynamic and socially committed leadership of its founder, Dr. Patangarao Kadam, Bharati Vidyapeeth has already made astonishing strides in the field of education during short span of 47 years.</p>

<p class="lead" style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Government of India, (Ministry of Human Resource Development) on the recommendation of University Grants Commission, New Delhi, accorded the status of a Deemed University to Bharati Vidyapeeth on April 26, 1996 vide notification no. 7-9-15/95-U.3. Accordingly, Bharati Vidyapeeth became a Deemed University on May 10, 1996</p>

<p class="lead" style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To date Bharti Vidyapeeth has established a total of 160 institutes across Maharashtra and Delhi, covering the complete gamut of education from primary to specialized career programs. Bharati Vidyapeeth has seven B-schools of which six are in Maharashtra and one in Delhi.</p>
                                           
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="skadam">
                        <div class="tab-inner">
                            <p><strong class="text-uppercase">Dr.Shivajirao Kadam</strong></p>
                            <p><em class="text-capitalize"> Pro-Vice-Chancellor, Bharati Vidyapeeth University, Pune</em></p>
                            <hr>  
                             <p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I extend a warm welcome to all of you as you join the Bharati Vidyapeeth family. The University is part of the larger Bharati family, which is built on the core ideals of global transformation. You will find a wealth of opportunities as you begin your journey of higher education, which is about academics, of course, but also a lot more. It is our goal that we succeed in shaping our students to be responsible members of the global citizenry.</p>

<p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bharati Vidyapeeth is appreciative of the enormous responsibility that befalls from KG to PG education. I encourage you to avail of all the wonderful teaching-learning and research possibilities that are offered. We, at Bharati Vidyapeeth, believe that be a good leader, it is important to be a good human being first therefore, we offer a whole range of first-rate choices that contribute to personal capacity building, such as those in career enhancement, extracurricular activities and recreational facilities. You will find wonderful prospects to share this journey with students from over eighty-five countries and from all over India. We also pride on having with us an amazing pool of talent in our teaching staff, many of whom are noted academics, with substantial international experience.</p>

<p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BVIMSR stands proud to provide quality education from last 32 years of its existence it has already created a place for itself. Through many years of its existence, BVIMSR has been able to remain academically closely aligned to dynamic needs of fast globalizing Indian economy. The open economy provides many opportunities but, on the flip side of these opportunities are the challenges it poses.</p>

<p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There is an attempt to maintain close partnership with the industry through visiting faculty, seminars, felicitation programs etc. BVIMSR gives utmost importance to ethics and corporate social responsibility, as we believe to. These subjects are taught as a foundation for becoming business leaders. Also, at BVIMSR enough focus is placed on co-curricular activities where students are encouraged to participate, so as to have a well-developed personality. BVIMSR prepare every student to become an achiever in his or her right.</p>

<p style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our faculty members gladly shoulder the responsibility to bring out the leader in each and every student. After passing out from the institute each one of our student is ready to face the world and ‘take the bull by its horns’ .I hope you will enjoy discovering each one of these leaders of tomorrow one by one.</p>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade" id="vkadam">
                        <div class="tab-inner">
                            <p><strong class="text-uppercase">Dr. Vishwajeet Kadam</strong></p>
                            <p><em class="text-capitalize"> Secretary,Bharati Vidyapeeth ,Pune</em></p>
                            <hr>  
                             <p style="font-family: ''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only education empowers the society to grow in real sense by overcoming poverty, ignorance and lack of esteem. This thought led us to pursue Bharati Vidyapeeth's mission to bring social transformation through dynamic education. Barring all barriers, education should be spread to every stream of society and individual.</p>

<p style="font-family: ''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We at Bharati Vidyapeeth Institute of Management Studies and Research believe in the development of students which ensures admirable future for them. Bharati Vidyapeeth Institute of Management Studies and Research is a blend of academic experts, caring faculty, dynamic curriculum, research facilities and industry-academia interaction makes it the best choice to launch your career or enhance your professional skills. Bharati Vidyapeeth Institute of Management Studies and Research challenges students to reach their highest level of achievement and gives every student opportunities to apply their learning. Faculty regularly collaborate with students on research, internships, and community outreach projects that provide practical applied learning experiences .Our students graduate with the confidence to continue their higher education or enter the workforce.</p>

<p style="font-family: ''">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bharati Vidyapeeth institute of management studies and research has established itself as a reputed management college of thirty two years standing it takes pride in its state-of-the-art infrastructure, extensive teaching and learning facilities, library and research facilities.</p>
                        </div> 
                    </div>
                </div>
            </div>        
        </div>
  </div>
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














