<html>
<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
            <?php
            error_reporting(0);
           include "config.php";
            
            // Check connection
		if($con === false){
			die("ERROR: Could not connect ". mysqli_connect_error());
		}
                
       
        $name = $_REQUEST['name'];   
        $contact = $_REQUEST['contact'];
        $email = $_REQUEST['email'];
        
       
        $sql = "INSERT INTO  deliverylist VALUES ('$name','$contact','$email')";
        
          if(mysqli_query($con, $sql ))
                    {
                     
               //    header('Location:confirm.php');
             }
                else
                {
			echo "ERROR: Hush! Sorry $sql ". mysqli_error($con);
		}
                ?>
	</center>
</body>

</html>
