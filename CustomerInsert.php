<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Data Display</title>
    <style>
        body {
    background-image: url(images/wallpaperflare.com_wallpaper-5.jpg);
    background-size: cover;
    background-position: center;
}

.outer-div {
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
/* width: 900px; */
}
/* Style for form container */
.form-container {
/* height: 100px; */
width: 370px;
height: 440px;
margin: 0 auto;
padding: 20px;
background-color: transparent;
border-radius: 5px;
box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
}

.form-container:hover {
width: 380px;
height: 455px;
transition-duration: .5s;
}

.heading {
text-align: center;
color: white;
font-size: 40px;
font-family: Arial, Helvetica, sans-serif;
}

.form {
font-family: Arial, Helvetica, sans-serif;
color: white;
}

/* Style for form input fields */
input[type="text"] {
width: 100%;
padding: 10px;
margin: 5px 0;
box-sizing: border-box;
border: 1px solid #ccc;
border-radius: 4px;
}

/* Style for submit button */
input[type="submit"] {
margin-top: 10px;
width: 100%;
padding: 12px;
font-size: 16px;

background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
border-radius: 8px;
border-style: none;
box-sizing: border-box;
color: #FFFFFF;
cursor: pointer;
flex-shrink: 0;
font-family: "Inter UI", "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
font-size: 18px;
font-weight: 500;
height: 4rem;
padding: 0 1.6rem;
text-align: center;
text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
transition: all .5s;
user-select: none;
-webkit-user-select: none;
touch-action: manipulation;
}

/* Style for submit button on hover */
input[type="submit"]:hover {
box-shadow: rgba(255,255,255, 0.4) 0 1px 30px;
transition-duration: .1s;
font-size: 19.5px;
}
    </style>
</head>

<body>
    <div class="outer-div">
        <div class="form-container">
        <h2 class="heading">Add New User</h2>
        <form class="form" method="post" action="CustomerInsert.php">
            C_ID: <input type="text" name="c_id"><br>
            C_NAME: <input type="text" name="c_name"><br>
            C_CONTACT: <input type="text" name="c_contact"><br>
            C_ADDRESS: <input type="text" name="c_address"><br>
            <input type="submit" value="Submit">
        </form>
        </div>
    </div>
    <div id="data-container">
        <?php
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

        // Insert data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $C_ID = $_POST['c_id'];
            $C_NAME = $_POST['c_name'];
            $C_CONTACT = $_POST['c_contact'];
            $C_ADDRESS = $_POST['c_address'];

            $sql = "INSERT INTO Customer (c_id, c_name, c_contact, c_address ) VALUES ('$C_ID', '$C_NAME' ,  '$C_CONTACT' , '$C_ADDRESS')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>
     </div>

    <script src="scripts.js"></script>
</body>

</html>