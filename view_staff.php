<?php
include('dbconnection.php');





	// initialize variables
	
$results = mysqli_query($conn, "SELECT * FROM staff");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM staff WHERE id=$id";
     mysqli_query($conn, $sql);
   
   // header('location: view_staff.php');
    
    echo '<script language="javascript">alert("Employee record Delete Sucessfully !!!")</script>';
        echo '<script language="javascript">window.location = "view_staff.php"</script>';
}


?>


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
     
   
        
</head>
<body>
    <!--college logo and college name-->
   <div id="record_admin">
      <a href="Admin.php"><img src="image/Admin2.png" ></a>
  </div> 
  <div style="margin-top:20px;" id="recordheding">
      <h1><a href="Admin.php">STAFFS RECORDS</a></h1>
  </div> 
    <div id="clear"></div>
   
   
    
        <!--contener-->
   
   
     <div id="record1">
        <h2><a style="color:white;" href="view_staff.php">View Staffs Record</a> | <a style="color:white;" href="employee_add.php">Add Staffs Record</a></h2>
        <table>
           <thead>
              <tr>
                  <th>ID</th>
				  <th>NAME</th>
				  <th>DEPARTMENT</th>
                  <th>CONTACT</th>
                  <th>ACTION</th>
				  
				 
                  
                  
              </tr> 
               
           </thead>
            <tbody>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Department'] ?></td>
					<td><?php echo $row['Contact'] ?></td>
					
					
                
				

                       <td><a href="view_staff.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                    
                   
                </tr>
                <?php    
                }
                ?>
            </tbody>
            
            
            
        </table>
       
        
    </div>

    
  
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