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

p,li{
  text-align: justify;
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






    .tree .EthicalPolicy
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
              <!-- home section -->   
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
  <li class="active">Ethical policy</li>
</ol>
              
                           
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
              <P>The ethical policy of BJMR is based on the Committee on Publication Ethics (COPE) guidelines and complies with BJMR’s Editorial Board codes of conduct. Readers, authors, reviewers and editors associated with BJMR should follow these ethical policy guidelines. The ethical policy of BJMR is liable to determine which of the research papers or articles submitted to the journal should be published in the concerned issue.</P>
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Duties and Responsibilities of Publishers</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <Ol><li>BJMR is promising to ensure that the decision on manuscript submissions is only made based on professional judgment and will not be affected by any commercial interests.</li>
                              <li>  BJMR is committed to maintain the integrity of academic and research records.</li>
                              <li>  BJMR is monitoring the ethics by Editor­in­Chief, Executive Editor, Co-Editors, Editorial Board Members, Reviewers, Authors, and Readers.</li>
                              <li>  BJMR is always checking the plagiarism (using Turnitin software)and fraudulent data issues involving in the submitted manuscript.</li>
                              <li>  BJMR is always willing to publish corrections, clarifications and retractions involving its publications as and when needed..</li></Ol>


                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                 <!-- panel 2 -->
                 
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            <h4 class="panel-title collapsed">Duties and Responsibilities of Editors</h4>
                        </div>
                    </span>
                    
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <OL><li> The Editors of the journal should have the full authority to reject/accept a manuscript.</li>
                             <li>   The Editors of the journal should maintain the confidentiality of submitted manuscripts under review or until they are published.</li>
                             <li>   The Editor­in­Chief should take a decision on submitted manuscripts, whether to be published or not with other editors and reviewers</li>
                             <li>   The Editors of the journal should preserve the anonymity of reviewers.</li>
                             <li>   The Editors of the journal should disclose and try to avoid any conflict of interest.</li>
                             <li>   The Editors of the journal should maintain academic integrity and strive to meet the needs of readers and authors.</li>
                             <li>   The Editors of the journal should be willing to investigate plagiarism and fraudulent data issues and willing to publish corrections, clarifications, retractions, and apologies when needed.</li>
                             <li>   The Editors of the journal should have to limit themselves only to the intellectual content.</li>
                             <li>   Unpublished materials disclosed in a submitted paper will not be used by the editor or the members of the editorial board for their own research purposes without the author's explicit written consent.</li></OL>
                                                        
                        </div>
                    </div>
                </div> 
                <!-- / panel 2 -->
                


                
                 <!-- panel 3 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Duties and Responsibilities of Reviewers</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <ol>
                            <li>The Reviewers should provide comments in time that will help editors to make decision on the submitted manuscript to be published or not.</li>
                              <li>  The Reviewers are bound to treat the manuscript received for peer reviewing as confidential, and must not use the information obtained through peer review for personal advantage.</li>
                             <li>   The Reviewers comments against each invited manuscript should be technical, professional and objective.</li>
                             <li>   The Reviewers should not review the manuscripts in which they have found conflicts of interest with any of the authors, companies, or institutions.</li>
                             <li>   The Reviewers should disclose and try to avoid any conflict of interest.</li>
                        </ol>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->
                

                <!-- panel 4 -->
                
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading4" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <h4 class="panel-title collapsed">Duties and Responsibilities of Authors</h4>
                        </div>
                    </span>
                    
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <ol>
                            <li>Manuscripts must be submitted only in English and should be written according to sound grammar and proper terminology.</li>
                              <li>  Manuscripts must be submitted with the understanding that they have not been published elsewhere (except in the form of an abstract or as part of a published lecture, review, or thesis) and are not currently under consideration by another journal published by or any other publisher.</li>
                             <li>   The submitting corresponding author is responsible for ensuring that the manuscript article's publication has been approved by all the other co-authors.</li>
                            <li>    It is a condition for submission of a manuscript that the authors permit editing of the paper for readability.</li>
                             <li>   Authors are requested to clearly identify who provided financial support for the conduct of research and/or preparation of the manuscript and briefly describe the role of the founder/ sponsor in any part of the work.</li>
                             <li>   A copy-right release form must be signed by the corresponding author in case of multiple authorship, prior to the acceptation of the manuscript, by all authors, for publication to be legally responsible towards the Journal ethics and privacy policy.</li>
                             <li>   Under open access license, authors retain ownership of the copyright for their content, but allow anyone to download, reuse, re-print, distribute, and/or copy the content as long as the original authors and source are cited properly.</li>
                             <li>   When author(s) discovers a significant error or inaccuracy in his/her own published work, it is the author’s obligation to promptly notify the journal editor or publisher to retract or correct the manuscript.</li>
                             <li>   All authors must know that that the submitted manuscripts under review or published with BJMR are subject to screening using Plagiarism Prevention Software. Plagiarism is a serious violation of publication ethics.</li>
                        </ol>
                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->
                <small>All authors must ensure that all authors have read the submission final checklist before being submitted to the BJMR. For more details kindly see the link: http://www.bvimsr.com/bjmr.html/.</small>
                <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading5" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <h4 class="panel-title collapsed">Principles of Transparency</h4>
                        </div>
                    </span>
                    
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        
                        <ol>
                            <li>
                                Peer review process: BJMR is a double blind peer reviewed electronic and print bi-annual publication concerned with all aspects of management and social sciences. This process, as well as any policies related to the journal’s peer review procedures, is clearly described on the journal’s Web site. </li>
                               <li> Governing Body: BJMR has very strong editorial board, whose members are recognized experts in the subject areas included within the journal’s scope. The full names and affiliations of the journal’s editors is provided on the journal’s Web site. </li>
                                <li>Contact information: Journal is provided the contact information for the editorial office of BJMR. </li>
                               <li> Author fees / Access: The Journal database is fully open access and full text of published articles are available for everyone who can get access to the Journal website free of cost. Besides, the authors never pay any charges for submission, article processing and publication. </li>
                               <li> Copyright: Journal has made clear the type of copyright under which authors work will be published. Upon acceptance of manuscript, authors will be asked to complete a 'Journal Publishing Agreement'. </li>
                               <li> Identification of and dealing with allegations of research misconduct: Editor­in­Chief takes reasonable steps to identify and prevent the publication of papers where research misconduct has occurred, including plagiarism, citation manipulation, and data falsification/fabrication, among others. </li>
                               <li> Web site: Journal’s Web site: http://www.bvimsr.com/bjmr.html/ contains that care has been taken to ensure high ethical and professional standards. </li>
                               <li> Name of journal: The Journal name BVIMSR’s Journal of Management Research (BJMR) is unique and is not one that is easily confused with another journal. </li>
                                <li>Conflicts of interest: Authors are requested to specify whether impending conflicts do or do not exist while submitting their articles to BJMR through Conflict of Interest Disclosure. </li>
                               <li> Publishing schedule: The periodicity at which the journal is published is clearly indicated as bi-annual (twice a year).
                            </li>
                        </ol>
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

<div class="row" style="background-color: #17A589;height: 5px;">
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














