<?php
session_start();

?>

<html>
    <head>
        <title>Home page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        

        </head>
            
            <body1>
            <nav>
                <img style="height:50px ;width:100px;"src="logo.png" alt="logo">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us </a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    
                </ul>

            </nav>
            
                <div class="loginbox">

                    <button  class="button" onclick="window.location.href='farmer.php';">
                        Farmers
                      </button><br>
                      <button class="button" onclick="window.location.href='traders.php';">
                        Traders
                      </button><br>
                      <button class="button" onclick="window.location.href='agrovets.php';">
                        Agrovets
                      </button><br>
                      <button class="button"onclick="window.location.href='veterinaries.php';">
                        Veterinary Services
                      </button><br>
                      <button class="button"onclick="window.location.href='equipmentstores.php';">
                        Equipment Stores
                      </button><br>
                      <button class="button"onclick="window.location.href='delivery.php';">
                        Delivery Services 
                      </button><br>
                      <button class="button"onclick="window.location.href='logout.php';">
                        Log Out
                      </button>
                      

                

            </body1>
            
            </html>

