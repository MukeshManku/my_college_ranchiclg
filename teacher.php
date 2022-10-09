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
                    <li><a href="registration.php" onmousedown="bleep.play()">ADMISSION FORM</a></li>
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
    
    <div id="contener_staff_t">
        <div id="staffs">
        <h1>TEACHERS&nbsp; DETAILS </h1>
        </div>
        <div id="tech_detail">
            <fieldset>
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>QUALIFICATION</th>
                <th>CONTACT</th>
                <th>PHOTO</th>
            </tr>
                 <tr>
                     <td>1</td>
                     <td>DR. S N MUNDA</td>
                        <td>PROFESSOR INCHARGE</td>
                      <td>Ph.D</td>
                        <td>-</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
					
					                 <tr>
                     <td>2</td>
                     <td>DR. A. K. MAHTO</td>
                        <td>Co-Ordinator of MCA</td>
                      <td>Ph.D</td>
                        <td>akmahto@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
              
          
           
        </table>
         </fieldset>
        </div>
          <div id="tech_detail">  
            
            <fieldset>
                <legend>VOCATIONAL TEACHERS</legend>
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>QUALIFICATION</th>
                <th>CONTACT</th>
                <th>PHOTO</th>
            </tr>
                 <tr>
                     <td>1</td>
                     <td>DR. INDRA NATH SAHU</td>
                        <td>Department of Vocational Courses	</td>
                      <td>Ph.D</td>
                        <td>rc.insahu@gmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
                <tr>
                     <td>2</td>
                     <td>ASIT KUMAR MOHAPATRA</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>asitkm77@rediffmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            
            <tr>
                     <td>3</td>
                     <td>VIKASH RANJAN</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>vikashranj@gmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
					
					<tr>
                     <td>4</td>
                     <td>POOJA KUMARI JHA</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>scr.pooja@gmail.com</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
					
					<tr>
                     <td>5</td>
                     <td>SURABHI KACHHAP</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>surabhikachhap1991@gmail.com</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
					
					<tr>
                     <td>6</td>
                     <td>KHUSHBOO RANI</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>khushboo20rani@gmail.com</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
					
					<tr>
                     <td>7</td>
                     <td>DR. RAHIDAS KUMAR</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>kumarrahidas@gmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
					
					<tr>
                     <td>8</td>
                     <td>CHANDRAY SOREN</td>
                        <td>Department of Vocational Courses</td>
                        <td> - </td>
                        <td>sorenjrs@gmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
           
        </table>
         </fieldset>
        </div>
        
    
        
        <div id="tech_detail">  
            
            <fieldset>
                <legend>SCIENCE TEACHERS</legend>
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>QUALIFICATION</th>
                <th>CONTACT</th>
                <th>PHOTO</th>
            </tr>
                 <tr>
                     <td>1</td>
                     <td>DR. R.K.JHA</td>
                        <td>Department of Botany</td>
                      <td>Ph.D.</td>
                        <td>rkjha@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
                <tr>
                     <td>2</td>
                     <td>DR. (Mrs.)ANITA KUMARI</td>
                        <td>Department of Mathematics</td>
                        <td>Ph.D</td>
                        <td>anitakumari@dspmuranchi.ac.in</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
            
            <tr>
                     <td>3</td>
                     <td>DR. ASHOK K. ACHARYA</td>
                        <td>Department of Chemistry</td>
                        <td>P.hD</td>
                        <td>akacharya@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            
            <tr>
                     <td>4</td>
                     <td>MS. ANJALI KUMARI</td>
                        <td>Department of Physics</td>
                        <td>Ph.D.</td>
                        <td>dada1@gmail.com</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
					<tr>
                     <td>5</td>
                     <td>DR. J.P. SHARMA</td>
                        <td>Department of Physics</td>
                        <td>Ph.D.</td>
                        <td>jpsharma@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
               <tr>
                     <td>7</td>
                     <td>DR. N.D.GOSWAMI</td>
                        <td>Department of Zoology</td>
                      <td>Ph.D.</td>
                        <td>ndgoswami@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
        </table>
         </fieldset>
        </div>
        
        <div id="tech_detail">  
            
            <fieldset>
                <legend>COMMERCE TEACHERS</legend>
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>QUALIFICATION</th>
                <th>CONTACT</th>
                <th>PHOTO</th>
            </tr>
                 <tr>
                     <td>1</td>
                     <td>MADANJIT KUMAR SINGH</td>
                        <td>Department of Commerce</td>
                      <td>Ph.D.</td>
                        <td>singhmadanjit@yahoo.co.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
                <tr>
                     <td>2</td>
                     <td>PRATYUSH NATH</td>
                        <td>Department of Commerce</td>
                        <td> - </td>
                        <td>pratyushnath2018@gmail.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            
            <tr>
                     <td>3</td>
                     <td>DR. REKHA JHA</td>
                        <td>Department of Commerce</td>
                        <td>Ph.D.</td>
                        <td>rjha@dspmuranchi.ac.in</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
            <tr>
                     <td>4</td>
                     <td>VIKAS CHANDRA SHARMA</td>
                        <td>Department of Commerce</td>
                        <td> - </td>
                        <td>vikaspaota@live.com</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
           
        </table>
         </fieldset>
        </div>
        <div id="tech_detail">  
            
            <fieldset>
                <legend>ARTS TEACHERS</legend>
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>NAME</th>
                <th>DEPARTMENT</th>
                <th>QUALIFICATION</th>
                <th>CONTACT</th>
                <th>PHOTO</th>
            </tr>
                 <tr>
                     <td>1</td>
                     <td>DR. ABHAY SAGAR MINZ</td>
                        <td>Department of Anthropology</td>
                      <td>Ph.D.</td>
                        <td>asminz@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
                <tr>
                     <td>2</td>
                     <td>DR. REKHA JHA</td>
                        <td>Department of Economics</td>
                        <td>M.A.</td>
                        <td>rjha@dspmuranchi.ac.in</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
            
            <tr>
                     <td>3</td>
                     <td>DR. ARUN GANG DEB</td>
                        <td>Department of Economics</td>
                        <td>P.hD</td>
                        <td>agdeb@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            <tr>
                     <td>4</td>
                     <td>DR. ABHAY KRISHA SINGH</td>
                        <td>Department of Geography</td>
                        <td>Ph.D.</td>
                        <td>aksingh@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            <tr>
                     <td>5</td>
                     <td>DR. ANIL KUMAR</td>
                        <td>Department of History</td>
                        <td>P.hD</td>
                        <td>anilkumar@dspmuranchi.ac.in</td>
                     <td><img src="image/stf-img.png" height="40px" width="50px"></td>
                    </tr>
            <tr>
                     <td>6</td>
                     <td>DR. KIRAN JHA</td>
                        <td>Department of Political Science</td>
                        <td>M.A.</td>
                        <td>kjha@dspmuranchi.ac.in</td>
                     <td><img src="image/st-img.png" height="40px" width="50px"></td>
                    </tr>
        </table>
         </fieldset>
        </div>
        
    </div>
 <div id="clear"></div>
    <!--footer-->
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
       <ul> <li><a href="about.php">Facility</a></li>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="book_details.php">Library</a></li>
        <li><a href="time.php">Routine</a></li>
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
           <p> <i class="fa fa-envelope " aria-hidden="true"></i> rcrprincipal@gmail.com</p>
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