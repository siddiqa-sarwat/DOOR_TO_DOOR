<html>
<head>
	<title>Insert Page page</title>
</head>

<body>
     
    
	<center>
            
            <?php
           
           include "config.php";
            
            // Check connection
		if($con === false){
			die("ERROR: Could not connect. ". mysqli_connect_error());
		}
                
       
        $name = $_REQUEST['loginname'];   
        $contact = $_REQUEST['contact'];
        $address = $_REQUEST['address'];
        $pincode = $_REQUEST['pincode'];
        $parcel=$_REQUEST['parcel'];
        $vehicle=$_REQUEST['vehicle'];
        $id=$_REQUEST['id'];
        $id= rand(100,999);
      //  $checked=$_REQUEST['checked'];
    //    $checked=$_REQUEST['checked'];

           $checked=$_POST['checked'];

        //$changestatus=rand(collected, delivered);
     //   $id=$_REQUEST['id'];
        $sql = "INSERT INTO  sender VALUES ('$name','$contact','$address','$pincode','$parcel','$vehicle','$id','$checked')";
       
        
     //$checkbox=$_REQUEST['checkbox'];
     
     
        
         
         if(mysqli_query($con, $sql))
                    {
                     
                   header('Location:receiver.html');
             }
                else
                {
			echo "ERROR: Hush! Sorry $sql ". mysqli_error($con);
		}
                ?>
	</center>
</body>

</html>
