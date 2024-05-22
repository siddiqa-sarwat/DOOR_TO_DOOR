<html>

<head>
    <meta charset="UTF-8">
<center>
    
    <title>SENDER LIST</title>
    
</center>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style type="text/css">
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
            margin-left: 19%;
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

    </style>

</head>

<body>

    <table>
        <h2 align="center">SENDER LIST</h2>
        <tr>
            <th>USER NAME</th>
            <th>CONTACT</th>
            <th>ADDRESS</th>
            <th>PIN CODE</th>
            <th>PACKAGE</th>
            <th>REFERENCE ID</th>
            <th>CHECKED</th>
         
        </tr>

        
         <?php
        $con = mysqli_connect("localhost", "root", "", "doortodoor_db");
        $sql = "SELECT * FROM sender";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["address"] . "</td><td>" . $row["pincode"] . "</td><td>" . $row["parcel"] . "</td><td>" . $row["id"] . "</td><td>" . $row["changestatus"].  "</td></tr>";
            }
        } else {
            echo "no results";
        }
        $con->close();
        
        ?>
           <?php
//session_start();
$con = mysqli_connect("localhost","root","","doortodoor_db");

if(isset($_POST['save_checkbox']))
{
    
    
    $checkbox = $_POST['checkbox'];

    $query = "INSERT INTO sender (checkbox) VALUES (  '$checkbox' )";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
      //  header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
       // header("Location: index.php");
    }
}
?> 
    </table>
</body>

</html>