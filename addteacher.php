<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>

    <!--[if gte mso 9]><xml>
    <mso:CustomDocumentProperties>
        <mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers
            msdt:dt="string">UA92.132.B2.23/24Back end Development Members</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
        <mso:SharedWithUsers msdt:dt="string">7;#UA92.132.B2.23/24Back end Development Members</mso:SharedWithUsers>
    </mso:CustomDocumentProperties>
    </xml><![endif]-->
</head>

<body>
    <div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="viewpupil.php">Pupil</a>
                <a href="viewparent.php">Parent</a>
                <a href="viewteacher.php">Teacher</a>
                <a href="viewclass.php">Class</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="addpupil.php">Pupil</a>
                <a href="addparent.php">Parent</a>
                <a href="addteacher.php">Teacher</a>
                <a href="addclass.php">Class</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Delete
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="deletepupil.php">Pupil</a>
                <a href="deleteparent.php">Parent</a>
                <a href="deleteteacher.php">Teacher</a>
                <a href="deleteclass.php">Class</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="updatepupil.php">Pupil</a>
                <a href="updateparent.php">Parent</a>
                <a href="updateteacher.php">Teacher</a>
                <a href="updateclass.php">Class</a>
            </div>
        </div>
        <a href="Contact.html">Contact Us</a>
    </div>
    
    <h2>Add teacher</h2>

    <form method="post" action="addteacher.php">

        <label for="tid">Teacher ID:</label>
        <input type="text" name="tid" ><br>

        <label for="name">Teacher Name:</label>
        <input type="text" name="name" ><br>

        <label for="address">address:</label>
        <input type="text" name="address" ><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" ><br>

        <label for="salary">Teacher salary:</label>
        <input type="text" name="salary" ><br>


        <input type="submit" name="submit" value="Add teacher">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $tid = $_POST['tid'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $salary = $_POST['salary'];

        $link = mysqli_connect("localhost", "root", "", "alphanousschool");

        if ($link === false) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO teacher (tid ,name, address, phone, salary) VALUES ('$tid', '$name', '$address', '$phone', '$salary')";

        if ($link->query($sql) === TRUE) {
            echo "teacher added successfully";
        } else {
            echo "Error adding teacher: " . $link->error;
        }

        $link->close();
    }
    ?>
</body>

</html>
