


<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
     
	 <link rel="stylesheet" href="record.css" type="text/css">
   <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
   
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
             <div style="margin-top:20px; font-size: 13px;" id="recordheding">
      <h1><a href="#">ABOUT US</a></h1>
  </div>
        <div id="about">
         
        <h1>WELCOME</h1>
        <h2>ABOUT THE COLLEGE</h2>
<p>Situated on the tropic of cancer, at an altitude of 651m from sea level amidst tropical flora and fauna, Ranchi College, Ranchi (now upgraded as a Unitary State University and known as Dr. Shyama Prasad Mukherjee University, Ranchi) had been established during the Pre- Independent India. Established in 1926 as a Government Intermediate College, it marched ahead and began Under-Graduate and post–graduate Courses in various subjects of Arts/Science in the year 1946.

Even after Independence, Ranchi College continued to celebrate its recognition as Government College. Till the creation of Ranchi University, Ranchi on 12th July, 1960, it functioned as a Unit of Patna University, imparting quality Higher Education in faculties of Humanities, Science and Social Science..</p>

<p><i>Following the creation of Ranchi University, Ranchi on Saturday, July 12th, 1960, Ranchi College had been placed as a Unit of Ranchi University by the then Government of Bihar. Meanwhile, a new 28th state of India, Jharkhand was carved out of the Southern part of Bihar on November 15, 2000. Now the pressure was high on it. And, it took the responsibility well. Based on its performance, the UGC accorded it the status of an “Autonomous College” in 2009. Also, it had been recognized by the UGC as “College with Potential for Excellence”. This primer college of the Capital has set its mood and it never looked back.

And, on Tuesday, April 11, 2017 Ranchi College, Ranchi scripts a history and is upgraded as Unitary University, named as Dr. Shyama Prasad Mukherjee University,Ranchi.</i></p>    
        </div>
  
  <div id="clear"></div>
  <!--footer-->
  
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
