<html>

<head>
    <meta charset="UTF-8">
    <title>DELIVERY BOY LIST</title>
    <style type="text/css">
        body {
            background-color:#fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: black; 
            font-size: 20px;
            text-align: center;
            margin-top: 5%;
            margin-left: 30%;
            background-color:#fff;
            caption-side: top;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: normal;
        }

        table,
        th,
        td {
            border: 1px solid;
            border-style: solid;
            padding: 15px;
            width: 20px;
            text-align: center;
            border-spacing: 5px;
        }

        th {
            background-color:white;
            color: coral;
            font-weight: bold;
            font-size: 19px;
        }

        tr:nth-child(even) {
            background-color:#fff;
            color: black;

        }

    </style>

</head>

<body>

    <table>
        <h2 align="center">DELIVERY BOY LIST</h2>
        <tr>
          
            <th> NAME</th>
            <th>CONTACT</th>
            <th>EMAIL</th>
           
        </tr>

        <?php
        $con = mysqli_connect("localhost", "root", "", "doortodoor_db");
        $sql = "SELECT * FROM deliverylist";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo  "<tr><td>" . $row["name"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["email"] . "</td></tr>";
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

    $query = "INSERT INTO receiver (checkbox) VALUES (  '$checkbox' )";
    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
       
        echo "Inserted Successfully";
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

</html