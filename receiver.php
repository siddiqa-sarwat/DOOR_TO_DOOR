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
        $checkbox= $_REQUEST['checkbox'];
       
        $sql = "INSERT INTO  receiver VALUES ('$name',$contact,'$address','$pincode','$checkbox')";
        
         
         if(mysqli_query($con, $sql))
                    {
                     
                   header('Location:confirm.php');
             }
                else
                {
			echo "ERROR: Hush! Sorry $sql " . mysqli_error($con);
		}
                ?>
	</center>
</body>

</html>
