<?php
define('BASE_URL', 'http://localhost/CMS/');
require_once('./conn/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>styles/styles.css" />
    <script src="<?php echo BASE_URL; ?>script/script.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CSM Management System</title>
</head>

<body>
    <div class="container">
        <div class="container1" style="border-radius:50%;height:20px;">
            <img src="<?php echo BASE_URL; ?>images/blogo.jpg" alt="Can't open the image!!" width="90px" height="90px" />
        </div>

        <div style="text-align:center; border: 2px;" class="container2">
            <h1>COMPANY NAMMME</h1>
        </div>

        <div class="container3">

            <div class="profile" style="text-align:right; ">
                <img src="<?php echo BASE_URL; ?>images/profile.png" alt="" width="75px" height="75px" />
            </div>
            <div>
                <div class="divDate">
                    <?php
                    echo date("d/m/Y");
                    ?>
                </div>
            </div>
            <div class="profile" style="text-align:right; font-size: 18px;">
                <p>UserName</p>
                <button type="button" id="btn1" class="btn1" style="background-color: white; color: black; border: 1px solid #555555; border-radius: 5px;">Log Out</button>
            </div>
        </div>
    </div>
    <br />
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Estimates</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Operations</a></li>
        <li><a href="#">Admin</a></li>
    </ul>

    <br>

</html>