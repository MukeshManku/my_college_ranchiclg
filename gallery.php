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
     <script type="text/javascript" src="src/js/core.js"></script>
    <link rel="stylesheet" href="src/css/core.css" type="text/css" media="screen" />
    <script src="js/ism-2.2.min.js"></script>
    <link rel="stylesheet" href="css/my-slider.css"/>

    <script src="js/index.js"></script>
     
    <!--script start .......
    //image slide....  -->
     <script type="text/javascript">
    $(document).ready(function(){
        $('.pics').cycle('fade');
    })   
    </script>
    <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
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
    
    <div id="contener_staff3">
      <div id="imageadd1">
        <div id="staffs2">
        <div id="heading"><b><i>Photo Gallery</i></b></div>
          </div>
          
          <div id="slider_photo">
          <div class='container'>

<div class="ism-slider" data-play_type="loop" data-interval="3000" data-image_fx="zoompan" data-radio_type="thumbnail" id="my-slider">
  <ol>
    <li>
      <img src="image/g/1.png">
    </li>
	
    <li>
      <img src="image/g/2.jpg">
    </li>
	
    <li>
      <img src="image/g/3.jpg">
   </li>
   
    <li>
      <img src="image/g/4.jpg">
    </li>
	
    <li>
      <img src="image/g/5.jpg">
    </li>
	
    <li>
      <img src="image/g/6.jpg">
    </li>
	
    <li>
      <img src="image/g/7.jpg">
    </li>
	
    <li>
      <img src="image/g/8.jpg">
    </li>
	
    <li>
      <img src="image/g/9.jpg">
    </li>
	
  </ol>
</div>

</div>
          
          </div>
        
<div class="wrapper">
    <div class="box item-1"> <a class="fancybox" rel="group" href="image/open/1.jpg"><img src="image/open/1.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-1"></div>
      <div class="overlay ovrl-right ovrl-1"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
       
    </div>
    <div class="box item-2"><a class="fancybox" rel="group" href="image/open/2.jpg"><img src="image/open/2.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-2"></div>
      <div class="overlay ovrl-right ovrl-2"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-3"><a class="fancybox" rel="group" href="image/open/3.jpg"><img src="image/open/3.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-3"></div>
      <div class="overlay ovrl-right ovrl-3"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-4"><a class="fancybox" rel="group" href="image/open/.jpg"><img src="image/open/4.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-4"></div>
      <div class="overlay ovrl-right ovrl-4"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-5"><a class="fancybox" rel="group" href="image/open/5.jpg"><img src="image/open/5.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-5"></div>
      <div class="overlay ovrl-right ovrl-5"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-6"><a class="fancybox" rel="group" href="image/open/6.jpg"><img src="image/open/6.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-6"></div>
      <div class="overlay ovrl-right ovrl-6"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-7"><a class="fancybox" rel="group" href="image/open/7.jpg"><img src="image/open/7.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-7"></div>
      <div class="overlay ovrl-right ovrl-7"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-8"><a class="fancybox" rel="group" href="image/open/8.jpg"><img src="image/open/8.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-8"></div>
      <div class="overlay ovrl-right ovrl-8"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>
    <div class="box item-9"><a class="fancybox" rel="group" href="image/open/9.jpg"><img src="image/open/9.jpg" alt=""></a>
      <div class="overlay ovrl-left ovrl-9"></div>
      <div class="overlay ovrl-right ovrl-9"></div>
      <div class="locker"><i class="arrow fa fa-arrows-h" aria-hidden="true"></i></div>
    </div>

  </div>
        </div>
        
        
    </div>
   
   <div id="clear"></div>
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