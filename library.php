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

p,li,h4{
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
    .tree .ACTIVITY
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
table, th, td {
    border: 1px solid black;
    text-align: center;
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
    <div class="col-sm-12 col-md-10" >
        <div class="home">
            <div class="container">
                <div class="row" >
                    <div class="col-sm-3 col-xs-12" style="margin-top:20px; margin-bottom: 20px">
                        <?php
                            require("Librarytree.php");
                        ?>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <div class="row" style="margin-left: 30px;">
                            <!-- begin panel group -->
                            <ol class="breadcrumb" style="background-color: transparent;font-family: 'quicksand';font-size: 15px;">
                                <li><a href="index.php">Home</a></li>
                                <li>Library</li>
                            </ol>      
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                               

                                <!-- panel 1 -->
                                <div class="panel panel-default" >
                                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                                    <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <h4 class="panel-title collapsed">Overview</h4>
                                    </div>
                                    </span>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                                        <div class="panel-body" >
                                            <!-- Tab content goes here -->
                                            <li> It is said that Library is a heart of the institutes. Library plays vital role in the development of the students as well as the faculty members. Library is trinity of students, Staff Members & Resources.</li>
                                            <li>Library builds collection and create tools to support teaching and learning process. The library aims to provide better service to its users. Our college has established its own library in the Year 1984-85</li>
                                        </div>
                                    </div>
                                </div> 
                                <!-- / panel 1 -->

                                <!-- panel 2 -->
                                <div class="panel panel-default" >
                                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                            <h4 class="panel-title collapsed">Library Staff Profile</h4>
                                        </div>
                                    </span>
                    
                                <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                                    <div class="panel-body" >
                                        <!-- Tab content goes here -->
                                        <table border="1" style="width: 120%; text-align: center;">
                                            <tbody>
                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Name</th>
                                                    <th>Post</th>
                                                    <th>Qualification</th>
                                                    <th>Prof. Experience</th>                                   
                                                </tr>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Mr.S.J.Suryawanshi</td>
                                                    <td>Librarian</td>
                                                    <td>M.Com. <br>M.Lib.I.Sc.</td>
                                                    <td>25 years</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Mr.Pravin Sapkal</td>
                                                    <td>Lib.Asst.</td>
                                                    <td>M.A.M.Lib.I.Sc.</td>
                                                    <td>3 years &amp;8 months</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Mr. S.T. More</td>
                                                    <td>Lib.Peon.</td>
                                                    <td>XII th pass</td>
                                                    <td>9 years</td>
                                                </tr>                      
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div> 
                                <!-- / panel 2 -->

                                <!-- panel 3 -->
                                <div class="panel panel-default" >
                                        <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            <h4 class="panel-title collapsed">Library Area and Journals</h4>
                                        </div>
                                    </span>
                    
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" >
                                    <div class="panel-body" >
                                        <!-- Tab content goes here -->
                                        <h4>  LIBRARY  AREA </h4>
                                        <li>Library Stack Area 1536  Sq.Ft.  (142.55 Sq.mt.)</li>

                                        <li>Reading Hall Area                                 1056   Sq.Ft.  ( 98.00 Sq.mt.)</li>

                                        <li>Reading Hall Seating Capacity             100    Students</li>

                                        <li>Library  Staff                                          Total – 3</li>

                                        <li>Librarian  -        1</li>
                                        <li>Library Clerk – 1</li>
                                        <li>Library Peon  -  1</li>

                                        <li>LIBRARY TIMINING :                       09.00 a.m. to  8.00 p.m. (Monday to Sat.)                                                                                                 
                                                                                                        10.00   a.m.   to    6.00  p.m.  ( Sunday)  </li>             
                                                                                                         

                                        <h4>Online Journals/ Electronic Journals Databases  </h4>

                                        <li>PROQUEST MANAGEMENT- ABI INFORM GLOBAL WITH DVD PACK</li>

                                        <li>Indian Journals                       :  Availability </li>
                                        <li>International Journals            :  4407</li>
                                        <li>E-books                                     :  07</li>

                                        <li>J GATE SOCIAL & MANAGEMENT SERVICES (JSMS)</li>

                                        <li>All  Subjects                              : 4578</li>
                                        <li>Indian Journals                        :   384</li>
                                        <li>International Journals             : 4194</li>

                                        <li>E-books                                      : available </li>



                                        <h4>Arrangement of Stack Room   :</h4>

                                        <h4>Separate for Racks text books, Fiction, Novels, and Literature also Reference Books Sections. Also separate arrangement for Audio-Visual Materials.

                                        Printed Journals/ Magazines display stands are inside the Library nearest Librarian Cabin.</h4>

                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->

                 <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">Library Services</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <li>1.  Journals/Magazines are issued to Students for Reference only (Not for Home is Issue)</li>

                            <li>2.  Staff Members also getting journals for Reference and home issue.</li>

                            <li>3.  Issue and Return Counters are Seperated.</li>

                            <li>4. Two books issued for Every Student in daily.</li>

                            <li>5. New Arrival of Books rack Stand maintain it.</li>

                            <li>6. Internet & Wi-Fi Services are provided to Students & Staff.</li>

                            <li>7. Partially Computerised systems are followed.</li>

                            <li>8. 15 PC’s With Internet access.</li>

                            <li>9. Reference & Information Services.</li>

                            <li>10. Inter Library Loan facility available in Campus.</li>

                            <li>11. Database Search Service.</li>

                            <li>12. Photocopying facility available in Campus.</li>

                            <li>13. Book Bank Facility [SC Students Only]
                            </li>
                        
                        </div>
                    </div>
                </div> 
                <!-- / panel 5 -->

                 <!-- panel 6 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsix" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <h4 class="panel-title collapsed">Library Rules & Regulations</h4>
                        </div>
                    </span>
                    
                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                             <li> Students are allowed to borrow only two books at a time and retain it for 7 days.</li>

                                <li> If the students do not return the books by the due date, a sum of Rs. 5/- will be Charged as fine per day.</li>

                                <li> If the due date falls on a Holiday, the book can be returned on the very next working day.</li>

                                <li>  Students must handle the books with care.</li>

                                <li>  In the event of a book being lost or damaged, the student should pay the full cost of the book along with 50% replacement cost.</li>

                                <li> Student should wear their Identity card before entering in the library.</li>

                                <li>  Reference books, Journals, Periodicals & Project Reports will be issued strictly against the Identity cards only. These Periodicals are only meant for Reference and should be returned before the library closes.</li>

                                <li>  Students are not allowed to issue books through other students Identity card / Library card. </li>

                                <li> Students should maintain absolute silence in the library. Group discussions are not allowed.</li>

                                <li> Students should not carry any food stuff in to the library. Eating in the library is Prohibited.</li>
                                <br>
                                <br>
 
                                <h4>Circulation Issue System:</h4> 
                                    Books will be issued on presentation of the library card along with the ID card. Students are instructed to check the books while borrowing and they will be responsible for any type of damage or mutilation noticed at the time of return.
                                     
                                    <h4>Overdue Charges:</h4> 
                                    Books will be issued to the students for 07 days only. In the front page slip is pasted and stamped mentioning the due date and the fine will be charged @ Re.5/- per day per book from the due date till the book is returned to library.

 
                                    <h4>Book Lost:</h4> 
                                    If the books are lost, then the borrower shall replace the books of the same edition or latest edition or pay double cost of the book after getting permission from the librarian.
                                     
                                    <h4>Care of library borrower cards:</h4>
                                    Take special care to maintain the library borrower cards.
                                    Do not fold, alter entries made on the cards, Members are responsible for the entire set of library borrower card issued to them.
                                     
                                    <h4>Loss of cards: </h4>
                                    Loss of borrower card should be reported to the librarian in writing. After checking the borrowing register they will be issued a fresh replacement card on a payment of Rs.100/- per card.
                                     
                                    <h4>Validity of cards:</h4> 
                                    Library borrower cards are valid for the respective academic year only and fresh cards will be issued. At the end of the academic year borrower cards shall be returned to the library.

                                     <h4>No due Certificate: </h4>
                                    Each student shall obtain No dues certificate from the library after returning all the books issued, surrendering the borrower’s cards and after paying outstanding dues, if any.

                                     <h4>Care of Library Books: </h4>
                                    Students are required to handle the books/ Journal very carefully; marking with pencil, writing or highlighting, tearing the pages or mutilating the same in any other way will be viewed very seriously. In such case reader shall be held responsible unless these are brought to the notice of the library staff at the time of issue.
                                     
                                    <h4>Book bank: </h4>
                                    <li>SC students of college can become a member of the book bank giving application along with caste certificate, for the full duration of course. Members of the book bank will be issued 5 textbooks for each semester. Books shall be returned within two days after the theory examination, otherwise a fine of Rs.5/- per day will be charged.

                                    </li>   
                        </div>
                    </div>
                </div> 
                <!-- / panel 6 -->
                <!--  panel 7 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab7" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsev" data-toggle="collapse" data-parent="#accordion" href="#collapsesev" aria-expanded="false" aria-controls="collapsesev">
                            <h4 class="panel-title collapsed">Library Sections</h4>
                        </div>
                    </span>
                    
                    <div id="collapsesev" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsev" >
                        <div class="panel-body" >
                            <h4> Reference section: </h4>This section has Encyclopaedias, dictionaries, Text books reference books etc. which are only available for reference. User can make use of these resources.
                            <h4>Journal Section: </h4>In this section journals, general magazines and news letter are available. They are arranged alphabetically. The latest issues are displayed on display rack and other previous issues are arranged in the drawer. Bound volumes of periodicals are arranged in rack alphabetically and are meant only for reference with in the library.
                            <h4>Digital Library Section: </h4>Digital Library is current open e-books on different subjects, links to the scholarly journal publications, theses and dissertations and other e-resources. Efforts are being made to subscribe subject specific e-books, e-journal databases.   
                        </div>
                    </div>
                </div>
            <!--/ panel 7 -->
            <!-- panel 8 -->
             <!--  panel 7 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab8" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading8" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h4 class="panel-title collapsed">Library Layout & Resources</h4>
                        </div>
                    </span>
                    
                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8" >
                        <div class="panel-body" >
                            <h4>Library Layout</h4>
                            In order to facilitate self-learning among the students, the library is kept open on college working days as per timings mentioned below. However, during examination Library Reading Room is kept open 9.00 AM TO 8.00 PM
                            <h4>Library Resources</h4>
                            The library has an extensive collection of books 30000+ in volumes covering all aspects of Management and also related areas like social sciences, humanities, etc. Reference collection of library consists of reference books, handbooks, encyclopaedias, dictionaries, directories, autobiographies, syllabus, question papers, CDs etc. The periodical section is a vital source for academic research and up-to-date information. Journals & Magazines both national and international, Bound volumes, newspapers are made available for reference.
                            <table border="1" style="width: 100%""><tr><th>E-Resources</th><th> Link</th></tr>
                                <tr><td>Proquest Management: ABI INFORM E-Journals</td><td> http://search.proquest.com</td></tr>
                                <tr><td>J-Gate Social & Management Services(JSMS)</td>  <td>http://jgateplus.com</td></tr>
                                <tr><td>British Council Library Membership{ E-books & Journals}</td><td>    http://www.britishcouncillibrary</td></tr>
                                <tr><td>American Library Institutional Membership</td><td>  http://mumbai.usconsulate.gov/airc.html</td></tr>
                            </table>

                        </div>
                    </div>
            <!-- /panel 8 -->
    </div> <!--/ .row -->
    </div> <!--/ .row -->
</div> <!-- end sidetab container -->

                            </div>
                                    </div>

                            </div>
         




</div>
    <!-- home section -->   
</div>
<div class="col-sm-12 col-md-2" >
                  <?php

                    require("sidebarright.php");
                    ?>
</div>
</div>
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














