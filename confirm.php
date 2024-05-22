  <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Confirm Page</title>
        <link rel="stylesheet" href="confirm.css">
    </head>
    <body>

        <div class="text">
            <p>Thank you !</p> 
            <br/>
            <p>Your Order Has Been Confirmed</p>
            <br/>
            <h3>Your Reference Id is :


                <?php
                $con = mysqli_connect("localhost", "root", "", "doortodoor_db");
                $sql = "SELECT id FROM sender order by id DESC limit 1";
                $result = $con->query($sql);
  // $row= mysqli_fetch_row($sql);


                if ($result->num_rows >= 0) {
                    while ($sql = $result->fetch_assoc()) {
                        echo $sql['id'];
                    }
                } else {
                    echo "no results";
                }
                $con->close();
                ?>
            </h3>
        </div>


        <div>
            <input type="checkbox" id="check">
            <label for="check">
                <div class="check-icon"></div>
            </label>
        </div>
    </body></html>