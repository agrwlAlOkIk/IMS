<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Data Display</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div id="data-container">
        <?php
        // echo "Hey how are you";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inventory";

         // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);

         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }

          // Fetch data
        $sql = "SELECT * FROM PurchaseOrder";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr> 
    <th>PO_ID</th> 
    <th>S_ID</th> 
    <th>ORDERDATE</th> 
    <th>ORDERSTATUS</th> 
    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["po_id"] . "</td><td>" . $row["s_id"] . "</td><td>" . $row["orderDate"] . "</td><td>" . $row["order_status"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

        echo json_encode($data);
    ?>
    </div>

   <script src="scripts.js"></script>
</body>

</html>