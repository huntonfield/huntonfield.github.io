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




    .tree .guidlineforsubmission
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
  <li class="active">guidline for submission</li>
</ol>
              
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
              <ol>
              <li><h4>Guidelines for Submission:</h4></li>
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Covering Letter</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <ul><li>Title of the paper, Author’s Name, Designation, Organization, Official Address, Personal Address, Contact Numbers (Official & Personal) and e-mail address.</li></ul>


                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                 <!-- panel 2 -->
                 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Abstract</h4>
                        </div>
                    </span>
                    
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <ul><li> Should contain in brief - Objectives, Research Questions / Hypothesis, Methodology, Main Findings and 5-6 Keywords, Word Limit: 250-300 words</li></ul>
                        
                        </div>
                    </div>
                </div> 
                <!-- / panel 2 -->
                


                
                 <!-- panel 3 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Typing of Paper</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <ul><li>Copies: Two hardcopies of the complete paper and One Softcopy</li>

                         <li>    Format: A-4 Size, MS-Word</li>

                         <li>    Word Limit: Not to exceed 5000 words</li>

                         <li>    Font: Times New Roman</li>

                         <li>    Font Size: Heading – 14, Text – 12</li>

                        <li>     Margin: 1.5-inch on all four sides</li>

                         <li>    Line Spacing: 2</li>

                         <li>    Tables and Graphs should be of printable quality</li>

                         <li>    Downloaded: Tables, Charts and Graphs from Net not permitted in the paper</li></ul>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->
                <li>Format of the Main Paper:</li>
                <ul>
                    <li>Title: Title should not be more than 6-8 words.</li>

                     <li>    Definitions: Paper should be clear and concise with proper definitions for specialized terms.</li>

                     <li>    Sections: Introduction, Objectives, Research Questions / Hypothesis, Methodology, Findings / Results, Conclusions / Recommendations and Limitations, 5-6 Key Words.</li>

                     <li>    Annexure: Tables, Charts, Graphs, Quotations, Equations, Articles should be numbered, cited and referenced properly.</li>

                     <li>    Abbreviations: Any Abbreviations used should be written in full at first followed by the abbreviations in the parenthesis.</li>

                     <li>    Referencing: The Harvard System (see illustration below) should be used in referencing.</li>

                     <li>    Foot Notes Should be numbered consecutively in the text and should be typed on same page they are denoted</li>
                </ul>

                 <li>  Declaration: Author must declare originality of work. The article should not have been published or be submitted for publication elsewhere.</li>

                 <li>     The Journal neither charges any processing fee nor pays any honorarium to the authors.</li>

                 <li>     Editorial decisions will be communicated as soon as the reviewers report is received.</li>

                 <li>       Authors will receive one complementary copy of the journal.</li>

                 <li>     Editorial Board’s decision will be final.</li>

                 <li>     The copyright of all accepted papers will vest with BJMR.</li>

                <li>      Email ID for Submission: editor_bjmr@bvimsr.com</li>



               </ol>

                <!-- panel 4 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading4" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h4 class="panel-title collapsed">Address for correspondence:</h4>
                        </div>
                    </span>
                    
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <ul><li>The Editor, BJMR
                                Bharati Vidyapeeth’s Institute of Management Studies & Research
                                Sector 8, CBD-Belapur, Navi Mumbai-400614
                                022-27572433/ 27562582,
                                email: editor_bjmr@bvimsr.com
                                Website: www.bvimsr.com</li></ul>
                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->

                <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading5" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h4 class="panel-title collapsed">Illustration of Harvard System of Referencing:</h4>
                        </div>
                    </span>
                    
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <p>The reference list should be in alphabetical order of authors’ names (Last Name) with year of publication in bracket without numbering. The name of the Journal or name of the Publisher, in case of book, should be in italics. In case of more than two authors only the first author’s name will appear followed by the words ‘et al’. In case of more than one article by same author the list will appear in order of year of publication. In case of two articles in same year by one author the years will be marked as 1999a and 1999b. In the main text of the article, where the article has been referred, the name of the author and year will appear in bracket.</p>
                        <p>Berger, L. A. (1994), Mutual Understanding, The State of Attention, and the Ground for Interaction in Economic Systems, Business and Ethics Quarterly.</p>
                        <p>Featherstone, M. (1990). Global Culture: Nationalism, Globalization and Modernity. London: Sage Publications.</p>
                        <p>Hannerz, U. (1990), Cosmopolitans and Locals in World Culture, Theory, Culture and Society, Vol. 7, 237–51.</p>
                        <p>Thaler, R.H. et al (1993). Advances in Behavioral Finance; FAMA, E.F. and K.R. FRENCH, 1998. Market efficiency, long-term returns, and behavioral finance. Journal of Financial Economic, Vol.8, 338-347.</p>
                        <small>Note: The above references are not real.</small>
                        </div>
                    </div>
                </div> 
                <!-- / panel 5 -->
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














