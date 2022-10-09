<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="page.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
    <!--script start .......
    //image slide....  -->
     <script type="text/javascript">
    $(document).ready(function(){
        $('.pics').cycle('fade');
    })   
    </script>
    
     <script type="text/javascript">
         //on click nav bar
    $(function(){
  
  $('li.dropdown > a').on('click',function(event){
    
    event.preventDefault()
    
    $(this).parent().find('ul').first().toggle(300);
    
    $(this).parent().siblings().find('ul').hide(200);
    
    //Hide menu when clicked outside
    $(this).parent().find('ul').mouseleave(function(){  
      var thisUI = $(this);
      $('html').click(function(){
        thisUI.hide();
        $('html').unbind('click');
      });
    });
    
  });
  
});
    
    </script>
   
    <script type="text/javascript">
        //sound
        var bleep = new Audio();
        bleep.src = "sound/beep-07.mp3";
    </script>
        
</head>
<body>
    <!--college logo and college name-->
    <div id="toplogo">
	   <div class="logo">
           <a href="home.php"><img src="image/img2448/logo.png" alt="LOGO" height="150px"></a>
        </div>
        <div class="College_name">
            <h1>Dr. SHYAMA PRASAD MUKHERJEE UNIVERSITY</h1>
            <h2>RANCHI JHARKHAND, 834008</h2>
        </div>
    </div>
    <div id="clear"></div>
    <!--nav or menu bar -->
    <div id="nav">
        <ul>
            <li><a href="home.php" onmousedown="bleep.play()">HOME</a></li>
            
           <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">ABOUT US &#9662;</a>
                <ul class="dropdown-menu">
                    <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="staffs.php" onmousedown="bleep.play()">STAFFS</a></li>
                    <li><a href="teacher.php" onmousedown="bleep.play()">TEACHER</a></li>
                </ul>
            </li>
            
        <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">LIBRARY &#9662;</a>
                <ul class="dropdown-menu">
                     <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="book_details.php" onmousedown="bleep.play()">BOOK DETAILS</a></li>
                    <li><a href="registration.php" onmousedown="bleep.play()">BOOK ISSUE FORM</a></li>
                </ul>
            </li>
        <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">ACADEMIC &#9662;</a>
            
                <ul class="dropdown-menu">
                     <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="registration.php" onmousedown="bleep.play()">ADDMISSION FORM</a></li>
                    <li><a href="registration.php" onmousedown="bleep.play()">EXAMNATION FORM</a></li>
                    
            <li class="dropdown"><a href="courses.php" onmousedown="bleep.play()">COURSES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        
                    <li><a href="intermediate.php" onmousedown="bleep.play()">INTERMEDIATE COURSES</a></li>
                    <li><a href="undergarduate.php" onmousedown="bleep.play()">UNDERGRADUATE COURSES</a></li>
                    <li><a href="postgraduate.php" onmousedown="bleep.play()">POSTGRADUATE COURSES</a></li>
					 <li><a href="vocational.php" onmousedown="bleep.play()">VOCATIONAL COURSES</a></li>
                          
                </ul>
                    
                    </li>
                    
                </ul>
            </li>
            <li><a href="notices.php" onmousedown="bleep.play()">NOTICES</a></li>
            <li><a href="gallery.php" onmousedown="bleep.play()">PHOTO GALLERY</a></li>
            <li><a href="contact.php" onmousedown="bleep.play()">CONTACT US</a></li>
        </ul>
    </div>
    <div id="clear"></div>
    <!--contener-->
    
    <div id="contener_staff_g">
        <div id="staffs_i">
        <h1>POSTGRADUATE &nbsp COURSES</h1>
          </div>
        <div id="under_g_Sec1">
       <p>The college offers the following courses for the Master degree, based on the PG curriculum of the Dr. Shyama Prasad Mukherjee University, Ranchi</p>
        </div>
        <div id="undergarduate_sec1">
         <h3>DEGREE COURSES</h3>
        <ul class="square">
            <li>M. Com. (Master of Commerce)</li>
            <li>M. A. (Master of Arts)</li>
            <li>M. Sc. (Master of Science)</li>
        </ul>
        </div>
        <div id="undergarduate_sec1">
         <h3>VOCATIONAL DEGREE COURSES</h3>
        <ul class="square">
            <li>M. B. A. (Master of Business Administration)</li>
            <li>M. C. A. (Master of Computer Applications)</li>
        </ul>
        </div>
        <div id="clear"></div>
        <div id="undergarduate_sec2">
            <h1>ELIGIBILITY</h1>
        <p>
           The prescribed Application Form & Declaration Form attached with the prospectus (detach it carefully) may be obtained from the college on payment of Rs. 5000/- in cash after the publication of the results (Any subject in UNDERGRADUATION). Separate application must be submitted in case a candidate wishes to apply for more than One Faculty/Course. Duly filled Application Form for admission to Arts/Science/Commerce must reach the college office by the prescribed date. An application for admission must be accompanied by duly attested copy of marks sheet only.
        </p>

            
        </div>
         <div id="undergarduate_sec2">
            <h1>ADMISSION</h1>
        <p>
            A Student may be admitted to the course of instructions for the degree of Master
            of Arts/Science/Commerce (General/Honours) if he/she has passed the Graduation
            Examination of a University established or incorporated by law, or any other
            examination recognized by the University. 
        </p>
        <p>
            For seeking of the Honours degree in any subject it shall be necessary for a student
            to have obtained <strong>not less than 45% marks</strong> at the Graduation Examination in
            the subject concerned or in an allied subject. 
        </p>

            
        </div>
        <div id="clear"></div>
            <div id="inter_Sec5">
        <h1>COURSE STRUCTURE</h1>
        <h2>Course of Study for M. Com. (General)</h2>
        <div id="gard_Sec_tbl1">
            <h3>SEM-I</h3>
            <h2>Compulsory</h2>
            
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              <div class="p_inter">
                    <p>Financial Accounts</p>
                    <p1>100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Business Organisation</p>
                    <p1>100 Marks</p1>
                </div>
              <div class="p_inter">
                    <p>Principle of Economics</p>
                    <p1>100 Marks</p1>
                </div>
            
             <h4>SEM-II</h4>
            <h2>Compulsory</h2>
           
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              <div class="p_inter">
                    <p>Business Law</p>
                    <p1>100 Marks</p1>
            </div>
               
              <div class="p_inter">
                    <p>Money & Banking</p>
                    <p1>100 Marks</p1>
                </div>
				
				<h4>SEM-III</h4>
            <h2>Compulsory</h2>
           
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              
                 <div class="p_inter">
                    <p>Management and Financial Accounting.</p>
                    <p1>100 Marks</p1>
                </div>
              <div class="p_inter">
                    <p>Marketing Management.</p>
                    <p1>100 Marks</p1>
                </div>
            
            <h4>SEM-IV</h4>
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	Environmental Science and Ethics</p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Business Mathematics & Statistics</p>
                    <p1>100 Marks</p1>
            </div>
             <div id="clear"></div>
                    <h2>2. Optional</h2>
              <div class="p_inter">
                    <p>Advance Account</p>
                    <p1>100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Auditing</p>
                    <p1>100 Marks</p1>
                </div>
             
        </div>
                
        </div>
        
            <div id="clear"></div> 
   
         <div id="inter_Sec5">
        <h2>Course of Study for M.A. (General)</h2>
        <div id="gard_Sec_tbl2">
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	M.I.L. Hindi <strong>OR</strong></p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
             
             <div id="clear"></div>
                    <h2>2. Optional (Any Three):</h2>
              <div class="p_inter">
                    <p>Any three subjects among these - History, Political Sc., Economics, Philosophy, Geography, Anthropology, </p>
                    <p1>100 Marks</p1>
            </div>
               <div class="p_inter">
                    <p> Anthropology, Psychology, English, Hindi, Bengali, Urdu, Nagpuri, Kurukh, Mundari, Kurmali </p>
                    <p1>100 Marks</p1>
            </div>
             
        </div>
                
        </div>
        
            <div id="clear"></div> 
        <div id="inter_Sec5">
        <h2>Course of Study for Science (General)</h2>
        <div id="gard_Sec_tbl3">
            <h2>Compulsory</h2>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
             
             <div id="clear"></div>
            
             <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	Environmental Science</p>
                    <p1>100 Marks</p1>
               </div>
             
             <div id="clear"></div>
            
                    <h2>2. Optional (Any One Set):</h2>
              <div class="p_inter">
                    <p>a) Maths, Physics, Chemistry </p>
                    <p1>3*100 Marks</p1>
            </div>
               <div class="p_inter">
                    <p> b) Zoology, Botany, Chemistry </p>
                    <p1>3*100 Marks</p1>
            </div>
             
        </div>
                
        </div>
        
            <div id="clear"></div> 


    </div>
   
  
  <div id="footer">
    <div id="footer_size">
     <div class="footer_B">
         <h2>About Us</h2>
         <ul> <li><a href="home.php">Home</a></li>
        <li><a href="contact.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li></ul>
      </div>
      
      <div class="footer_B">
         <h2>Services</h2> 
        <ul>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="book_details.php">Library</a></li>
        <li><a href="registration.php">Online Form</a></li></ul>
      </div>
      
      <div class="footer_B">
         <h2>Contact Us</h2>
         <div class="fsocial">
         <a href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.youtube.com" title="Youtube"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         
			 <a href="https://plus.google.com" title="Google+"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
        <address>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<b>Dr. Shyama Prasad Mukherjee University</b><br> &nbsp;&nbsp;&nbsp; Morabadi, Ranchi Jharkhand, 834008</p> 
           <p> <i class="fa fa-envelope " aria-hidden="true"></i>rcrprincipal@gmail.com</p>
            <p><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;&nbsp;0651-2233803</p>
            <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;www.dspmuranchi.ac.in</p>
        </address> 
      </div> 
      </div>  
   </div>
   <div id="buttom_footer">
      <h1>Dr. SHYAMA PRASAD MUKHERJEE UNIVERSITY, RANCHI</h1>
      <H2>RANCHI JHARKHAND, 834008</H2> 
      <div class="footer_nav">
      <ul> <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </ul>
        </div>
        <div id="footer_devloper">
      <span>Designed & Maintained by: <i>Mukesh Kumar Yadav.</i></span>
      </div>
   </div>
   
</body>
</html>