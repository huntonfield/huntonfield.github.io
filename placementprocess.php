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
    .tree .placementprocess
    {
        background-color: #2dac8f;
        color: #fff;
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
  <li>placements</li>
  <li class="active">Placement Process</li>
</ol>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width: 100%;align-content: center;">
                <h2 style="color:  #2dac8f ">Placement Process</h2>
                <p>The placement cell constantly stays in touch with companies from different industries. It builds and maintains synergetic link with corporate by personally visiting placement officials of different organizations, sending brochures, students’ excel database in filtered form along with photographs and bio-data and giving brief presentation of the activities carried by the institute. The interested companies are invited for the campus selection of the students. The placement cell shortlists the students on the basis of requirement of the companies and interest shown by the students.</p>
                <!-- panel 1 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h4 class="panel-title collapsed">Employability Skills Program</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <p>It is an extensive program where students are introduced to the corporate world from their first year in forms of Guest lectures and in second year they have a full-fledged subject namely-Employability Skills. Under this they are taught soft skills, Communication and other concepts crucial to their survival and growth in the corporate world. At BVIMSR, programs like Sessions of Employability Skills, Group Discussions and Mock Interviews are taken every week to enhance the employability of the students</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->

                 <!-- panel 3 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                            <h4 class="panel-title collapsed">Pre-Placement Talks</h4>
                        </div>
                    </span>
                    
                    <div id="collapsethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <p>A critical part of the placement process is the opportunity for the students and the industry to interact. The pre-placement talks are power point presentations given by the company officials at the institute. These presentations broadly cover details of their organization, profile of job offered, career prospects in the organization and compensation offered. The students get a chance to explore about the career opportunities, growth possibilities and expectations of the corporate. They also get a clear picture about the job profile, average CTC and skill expectations of the companies. All of this gives the student a clear understanding of the company and the kind of work he/she would be employed in. Usually Pre-placement talks are one of the primary modes of interaction of the students with the companies. It gives students a chance to know more about the company, the work culture and a brief about the kind of people they would be working with. Students also get a chance to pose questions to the presenters. </p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 3 -->

                 <!-- panel 4 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab4" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <h4 class="panel-title collapsed">Guest lectures </h4>
                        </div>
                    </span>
                    
                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <p>Eminent speakers from the corporate world across all domains with specialized knowledge and sectors are invited to deliver lecture to MMS students from both years. : Guest lectures are delivered by illustrious alumni, senior practitioners on a regular basis. Lectures are followed by question answer session.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 4 -->

                 <!-- panel 5 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab5" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            <h4 class="panel-title collapsed">Mentoring and Coaching</h4>
                        </div>
                    </span>
                    
                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <p>The placement cell takes care of grooming personality of the young graduates. They are trained according to requirement of the corporate by modern techniques of stress management, public speaking, corporate communication, business etiquettes, negotiation skills and effective communication. They are encouraged to become an efficient team member and an effective leader. Hence, case studies, industry projects, presentations, research work and role play form an integral part of a student’s tenure at BVIMSR. Placement cell also helps students to prepare resume according to requirement of the organizations. It also enables them to prepare for the interview and group discussion.</p>
                        
                        </div>
                    </div>
                </div> 
                <!-- / panel 5 -->

                 <!-- panel 6 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab6" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingsix" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            <h4 class="panel-title collapsed">Career Counseling</h4>
                        </div>
                    </span>
                    
                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <p>Career Counseling plays a vital role in building career of the aspiring graduates in right direction. The Process starts with the assessment of aptitude and inclination of students. Students’ overall performance including academic and non-academic activities plays a major role in deciding the career path of students. After evaluating the above factors, students are guided for possible career. It also helps students to decide the specialization in 2nd year of their studies.</p>
                       <ul>
                          <li>    Multiple Avenues of counseling are provided during students stay at the institute</li>
                                   <li>   Outcomes of counseling are 
                                    <ul>
                                    <li>Better self awareness</li>
                                    <li>Change in attitude, behavior, improvement in communication, general employability.</li>
                                    <li>Awareness about industry trends, companies.</li>
                                    <li>Awareness about appropriate career choices.</li></ul></li>
                                   <li>   Counseling by mentors: Every student is attached to a faculty mentor. Specific slots are provided in the timetable to facilitate interaction between mentors and their mentees</li>
                                   <li>   Counseling by other faculty members: Students also approach faculty of their choice to discuss issues relating to subjects.</li>
                                   <li>   Counseling by external faculty from the corporate: Industry persons provide feedback during term – end viva voce examinations. Viva is conducted at the end of every term and industry internship; thus students get the opportunity to receive feedback from more than one industry person.</li>
                                   <li>   Counseling by corporate mentors: During industry internship, students are assigned corporate mentors under whose guidance students complete the internship. Students interact with their corporate mentors almost on a daily basis during internship and receive valuable guidance and counseling on various aspects related to the world of work.</li>
                                   <li>   Counseling by alumni: During the year alumni are invited for guest lecture, seminar etc and interact and counsel the students.</li>
                                   <li>   Other counseling opportunities: During other interactions with the industry – experiential training, industry visits etc.</li>
                            
                       </ul>
                        </div>
                    </div>
                </div> 
                <!-- / panel 6 -->

                   <!-- panel 7 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab7" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading7" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <h4 class="panel-title collapsed">Industrial Visit</h4>
                        </div>
                    </span>
                    
                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <p>         Industrial Visits are planned every year for both first and second year students of MMS and PGDBM students in order to give them a practical exposure as well as learning and enriching experience in their respective specializations. It is usually organized in the month of January every year. During I.V. each student come to know about the working style, process design, hierarchy and Machine setup, input output process, quality Control, Inventory Management, Supply Chain.</p>

                       
                        </div>
                    </div>
                </div> 
                <!-- / panel 7 -->


                   <!-- panel 8 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab8" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading8" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            <h4 class="panel-title collapsed">Summer Internship Programmes</h4>
                        </div>
                    </span>
                    
                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <p>      As a compulsory part of curriculum, BVIMSR students are required to undergo Summer Internship with an organization for a period of 2 Months. The selection process for Summer Placements starts after the first term for the first year students. The period of Summer Internship is in the month of May and June. Students’ performance is monitored and feedback is given on a weekly basis.</p>

                       
                        </div>
                    </div>
                </div> 
                <!-- / panel 8 -->

                   <!-- panel 9 -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab9" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading9" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            <h4 class="panel-title collapsed">Recruitment Process</h4>
                        </div>
                    </span>
                    
                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                        <p>  The recruiters select suitable candidates, draw up a short list and inform Placement Cell who in turn informs the students for further proceedings. The recruiters can hold interview on the campus or off the campus according to their requirement. The entire process of selection may take 10 days to one month of time. The selected students are made offers and appointment letters are sent to the placement cell.</p>

                       
                        </div>
                    </div>
                </div> 
                <!-- / panel 9 -->
                <h3 style="color:  #2dac8f ">    Nature of key employers for institution placement</h3>
                <p> Companies are drawn from banking, financial services, consulting, It and telecom, Pharma and health care, Media, Insurance, Textiles, FMCG, Reality, Education and other sector.</p>
                     <!-- panel A -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabA" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingA" data-toggle="collapse" data-parent="#accordion" href="#collapseA" aria-expanded="false" aria-controls="collapseA">
                            <h4 class="panel-title collapsed">Nature of Employers by ownership (2016-17)</h4>
                        </div>
                    </span>
                    
                    <div id="collapseA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingA" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>Types of employer</th>
                           <th>No. of companies</th>
                           <th>Percentage</th>
                           <th>No of students placed</th>
                           <th>Percentage</th>
                           <tr>
                               <td>Multinational companies</td>
                               <td>48</td>
                               <td>33</td>
                               <td>37</td>
                               <td>46%</td>
                           </tr>
                             <tr>
                               <td>Public limited companies</td>
                               <td>Nil</td>
                               <td>0</td>
                               <td>Nil</td>
                               <td>0</td>
                           </tr>
                             <tr>
                               <td>Private companies</td>
                               <td>97</td>
                               <td>67</td>
                               <td>44</td>
                               <td>54%</td>
                           </tr>
                             <tr>
                               <td>Limited liability Partnership</td>
                               <td>Nil</td>
                               <td>0</td>
                               <td>Nil</td>
                               <td>0</td>
                           </tr>
                             <tr>
                               <td>Total</td>
                               <td>145  </td>
                               <td>100%    </td>
                               <td>81  </td>
                               <td>100%</td>
                           </tr>
                            
                       </table>
                       <img src="images\Nature of Employers by ownership.png">
                       
                        </div>
                    </div>
                </div> 
                <!-- / panel A -->


                 <!-- panel B -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabB" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingB" data-toggle="collapse" data-parent="#accordion" href="#collapseB" aria-expanded="false" aria-controls="collapseB">
                            <h4 class="panel-title collapsed">Nature of Employers by Industry/ Sector (2016-17)</h4>
                        </div>
                    </span>
                    
                    <div id="collapseB" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingB" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>Types of employer</th>
                           <th>No. of companies</th>
                           <th>Percentage</th>
                           <th>No of students placed</th>
                           <th>Percentage</th>
                           <tr>
                               <td>Banking </td>
                               <td> 11  </td>
                               <td>8%  </td>
                               <td>24  </td>
                               <td>29%</td>
                           </tr>
                             <tr>
                               <td>Financial Services other than banking    </td>
                               <td>16  </td>
                               <td>011% </td>
                               <td>09  </td>
                               <td>11%</td>
                           </tr>
                             <tr>
                               <td>Consulting   </td>
                               <td>22  </td>
                               <td>15% </td>
                               <td>10 </td>
                               <td> 12%</td>
                           </tr>
                             <tr>
                               <td>Pharma& health care </td>
                               <td> 6  </td>
                               <td> 4%  </td>
                               <td>2   </td>
                               <td>4%</td>
                           </tr>
                             <tr>
                               <td>It & Telecom </td>
                               <td>8    </td>
                               <td>6%      </td>
                               <td>4      </td>
                               <td>5%</td>
                           </tr>

                           <tr>
                               <td>Media     </td>
                               <td>11      </td>
                               <td>8%        </td>
                               <td>Nil       </td>
                               <td>Nil</td>
                           </tr>
                           <tr>
                               <td>Insurance     </td>
                               <td>9      </td>
                               <td>6         </td>
                               <td>6          </td>
                               <td>7%</td>
                           </tr>
                           <tr>
                               <td>FMCG  </td>
                               <td>13     </td>
                               <td>9        </td>
                               <td> Nil       </td>
                               <td>Nil </td>
                           </tr>
                           <tr>
                               <td>Others (Real Estate, Retail, Education, Manufacturing etc.)  </td>
                               <td> 49      </td>
                               <td>33%     </td>
                               <td>26          </td>
                               <td>32%</td>
                           </tr>
                           <tr>
                               <td>Total     </td>
                               <td>145    </td>
                               <td>100%         </td>
                               <td> 81        </td>
                               <td>100%</td>
                           </tr>
                            
                       </table>
                       <img src="images\Nature of Employers by Industry Sector.png">
                       
                        </div>
                    </div>
                </div> 
                <!-- / panel B -->

                      <!-- panel C -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabC" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingC" data-toggle="collapse" data-parent="#accordion" href="#collapseC" aria-expanded="false" aria-controls="collapseC">
                            <h4 class="panel-title collapsed">Functional area of Job offered (2016-17)</h4>
                        </div>
                    </span>
                    
                    <div id="collapseC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingC" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>Functional area of Job   </th>
                           <th>No of students placed   </th>
                           <th>Percentage</th>
                           <tr>
                               <td>Marketing    </td>
                               <td>16  </td>
                               <td>62%</td>
                               
                           </tr>
                             <tr>
                               <td>Finance  </td>
                               <td>45  </td>
                               <td>93%</td>
                               
                           </tr>
                             <tr>
                               <td>Human Resource   </td>
                               <td>15 </td>
                               <td> 93%</td>
                              
                           </tr>
                             <tr>
                               <td>Operations   </td>
                               <td>19  </td>
                               <td>58%</td>
                             
                           </tr>
                             <tr>
                               <td>Systems  </td>
                               <td>5   </td>
                               <td> 20%     </td>
                            
                           </tr>
                            
                       </table>
                        </div>
                    </div>
                </div> 
                <!-- / panel C -->

                      <!-- panel D -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabD" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingC" data-toggle="collapse" data-parent="#accordion" href="#collapseD" aria-expanded="false" aria-controls="collapseD">
                            <h4 class="panel-title collapsed">Salary range of students placed </h4>
                        </div>
                    </span>
                    
                    <div id="collapseD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingD" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>CTC     </th>
                           <th>No. of Students  </th>
                           <tr>
                               <td>Rs. 4.0 -6.0 Lakhs       </td>
                               <td>33  </td>
                               
                           </tr>
                             <tr>
                               <td>Rs. 3.0 – 4.0 Lakhs    </td>
                               <td>40  </td>
                               
                           </tr>
                             <tr>
                               <td>Below 3.0 Lakhs   </td>
                               <td> 8 </td>
                              
                           </tr>
                             <tr>
                               <td>Total       </td>
                               <td>81  </td>
                             
                           </tr>
                            
                       </table>
                       <img src="images\Salary range of students placed.png">
                        </div>
                    </div>
                </div> 
                <!-- / panel D -->

                    <!-- panel E -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabE" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingE" data-toggle="collapse" data-parent="#accordion" href="#collapseE" aria-expanded="false" aria-controls="collapseE">
                            <h4 class="panel-title collapsed">MMS No. of Placements by Nature of Organizations (2016-17) </h4>
                        </div>
                    </span>
                    
                    <div id="collapseE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingE" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>Nature of the Organization        </th>
                           <th>No. of Students Placed  </th>
                           <tr>
                               <td>Multi-National Companies    </td>
                               <td> 37  </td>
                               
                           </tr>
                             <tr>
                               <td>Public Limited Companies    </td>
                               <td>NIL  </td>
                               
                           </tr>
                             <tr>
                               <td>Private Companies     </td>
                               <td> 44  </td>
                              
                           </tr>
                             <tr>
                               <td>Limited Liability Partnership        </td>
                               <td>NIL   </td>
                             
                           </tr>
                             <tr>
                               <td>Total no. of Students Placed        </td>
                               <td>81   </td>
                             
                           </tr>
                            
                       </table>
                       <img src="images\MMS No. of Placements by Nature of Organizations.png">
                        </div>
                    </div>
                </div> 
                <!-- / panel E -->

                    <!-- panel F -->
                <div class="panel panel-default" >
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tabF" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingF" data-toggle="collapse" data-parent="#accordion" href="#collapseF" aria-expanded="false" aria-controls="collapseF">
                            <h4 class="panel-title collapsed">MMS % of Students Placed by Industrial Sectors (2016-17) </h4>
                        </div>
                    </span>
                    
                    <div id="collapseF" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingF" >
                        <div class="panel-body" >
                        <!-- Tab content goes here -->
                       <table border="solid" style="text-align: center;">
                           <th>Industry Sector      </th>
                           <th> % of students placed  </th>
                           <tr>
                               <td>Financial Services (other than Banking)     </td>
                               <td> 09  </td>
                               
                           </tr>
                             <tr>
                               <td>Banking      </td>
                               <td>24  </td>
                               
                           </tr>
                             <tr>
                               <td>Consulting       </td>
                               <td> 10  </td>
                              
                           </tr>
                             <tr>
                               <td>Pharma and Healthcare          </td>
                               <td> 2   </td>
                             
                           </tr>
                             <tr>
                               <td>IT an Telecom           </td>
                               <td>4   </td>
                             
                           </tr>
                            <tr>
                               <td>Textiles          </td>
                               <td>0   </td>
                             
                           </tr>
                            <tr>
                               <td>Media          </td>
                               <td>0   </td>
                             
                           </tr>
                            <tr>
                               <td>Insurance           </td>
                               <td>6   </td>
                             
                           </tr>
                            <tr>
                               <td>FMCG          </td>
                               <td>0  </td>
                             
                           </tr>
                            <tr>
                               <td>Others(Education, Manufacturing, Reality, retail etc.)         </td>
                               <td>26   </td>
                             
                           </tr>
                            
                       </table>
                        </div>
                    </div>
                </div> 
                <!-- / panel F -->



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














