<?php include './config.php';?>
   <?php
   if(isset($_post['save']))
   {
       
       $changestatus=$_POST['checked'];
       $sql="insert into sender values ('$changestatus')";
       $res= mysqli_query($con, $sql );
       if($res)
       {               
           echo'<script =type/javascript>alert("updated")</script>';
       }

       else {
                 echo'<script =type/javascript>alert(" not updated")</script>';
 }

       }
   
           
  ?>             

<?php include ('header.php');
?>
    <body>
         <form action="delivery_senderlist.php" method="post">
        <h1>
            <center>
          
            SENDER LIST
            </center>
        </h1>
           <div class="container">
            <div class="button">
                 
                <style> 
                
                
                body {
            background-color: #fff;
        }
        heading{
            float: center;
            font-size: 15px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: black; 
            font-size: 10px;
            text-align: center;
            margin-top: 5%;
            margin-left: 6%;
            background-color: #fff;
            caption-side: top;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
         
        }

        table,
        th,
        td {
            border: 1px solid;
            border-style: solid;
            padding: 15px;
            width: 30px;
            text-align: center;
            border-spacing: 30px;
        }
tr
{
    text-align: right;
    top:50px;
}
        th {
            background-color:white;
            color: coral;
/*            font-weight: bold;
*/            font-size: 19px;
        }

        button{
        tr:nth-child(even) {
            background-color: #fff;
            color: black;
        }
            color: coral;
        }
        .popup{
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: coral;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        .open-popup{
            visibility: visible;
            top:50%;
             transform: translate(-50%, -50%) scale(1);
        }
        .popup img{
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0 , 0, 0, 0.4);
        }
        .popup h2{
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

    </style>

               
                
        <table class="table table-hover table-bordered table-stiped">
            <thead>
                  <tr>
            <th>USER NAME</th>
            <th>CONTACT</th>
            <th>ADDRESS</th>
            <th>PIN CODE</th>
            <th>PACKAGE</th>
            <th>REFERENCE ID</th>
         <th>STATUS</th>
         
                  </tr>    
                
            <tbody>
           
                
                <?php
                $query=  "select * from `sender` ";
                $result = mysqli_query($con, $query);
                if(!$result){
                    die("query failed".mysqli_error());
                }
 else {                    
                    while ($row = mysqli_fetch_assoc($result) ){
                      ?>
           
                                  <tr>
                        
                      <td> <?php  echo $row['name'];?></td>
                      <td> <?php  echo $row['contact'];?>   </td>
                    <td><?php  echo $row['address'];?></td>
                     <td><?php  echo $row['pincode'];?></td>
                      <td><?php  echo $row['parcel'];?></td>
                       <td><?php  echo $row['id'];?></td>

                       

             <td>  <input type="text" class="hide" id="check" name="checked" value="collected" onclick="enabled()"/><i class="fa fa-fw fa-check-square"> </i></td>

              <td> <input id="btn" type="submit" name="save"   class="btn btn-primary" value="save" onclick="openpopup()" style="background-color: coral"></td>


              
                                  </tr>
        
      
       
                  
                  
                                 
                 <?php
                        
                    }
     }
                ?>
           
                 

                      </tbody>
            </thead>
        </table>

  </div>
</div>   
       
         
             
         </form>  
    </body>
    
 <?php include ('footer.php');
 ?>