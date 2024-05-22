<?php include './config.php';
?>
<?php include ('header.php');
?>
    <body>
         <form action="delivery_recieverlist.php" method="post">
        <h2>
        <center>
            RECEIVER LIST
        </center>
            
        </h2>
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

        th {
            background-color:white;
            color: coral;
/*            font-weight: bold;
*/            font-size: 19px;
        }

        tr:nth-child(even) {
            background-color: #fff;
            color: black;
        }
        button{
            color: coral;
        }
        .popup{
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%,-50%)scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: coral;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }
        
        .popup img{
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            
        } 
                   
       
            
       
               
      

    </style>
           <div class="container">
            <div class="button">
               
                
        <table class="table table-hover table-bordered table-stiped">
            <thead>
                  <tr>
           
                      
           
              
                      
            <th>USER NAME</th>
            <th>CONTACT</th>
            <th>ADDRESS</th>
            <th>PIN CODE</th>
            <th>STATUS</th>
        </tr>    
                
            <tbody>
           
                
                <?php
                $query=  "select * from `receiver` ";
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
                     
                     
         
                     <td><input type="text" class="hide" name="checkbox" id="check" onclick="enabled()" value="Delivered" autocomplete="off" /><i class="fa fa-fw fa-check-square"></i></td>
                    
                       
                 
                 
                     <td> <input id="btn" type="submit" name="save_checkbox"   class="btn btn-primary" value="save" onclick="openpopup()" style="background-color: coral"></td>
            
                 </tr>
            
                      
             <script>
//        function enabled(){
//            var check=document.getElementById("check");
//            var btn=document.getElementById("btn");
//            if(check.checked){
//                btn.removeAttribute("disabled");
//            }else{
//                btn.disabled="true";
//            }
//        }

//                    }

             ('#checkBox')
             
             
             
             
             </script>
    <script>
    let popup = document.getElementById("popup");
    function openpopup()
    popup.classList.add("open-popup");
    </script>

              <?php
                        
                    }
     }
                ?>
          
           
                 

                      </tbody>
            </thead>
        </table>

  </div>
</div> 
      <div class="popup" id="popup">
                <img src="404-tick.png">
                <h2>DELIVERY CONFIRMED</h2>
                
            </div>
                      
         </form> 
    </body>
    
      
 <?php include ('footer.php');
 ?>