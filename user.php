<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width , initial-scale = 1.0">
        <title>Travaliac_User_Name
        </title>
        <link rel="stylesheet" type="text/css" href="./Style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!--....................Header..................................-->
    <section class="sub-headerU">

        <nav>
            <a href="index.php"><img src="./Images/Traveliac logo.png" ></a> 
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="Index.php" class="active">HOME</a></li>
                    <li><a href="stays.php">STAYS</a></li>
                    <li><a href="travel.php">TRAVEL</a></li>
                    <li><a href="location.php">LOCATIONS</a></li>
                    <li><a href="contactUs.php">CONTACT</a></li>
                    <li><a href="aboutUs.php">ABOUT</a></li>
                </ul>
                <div class=logout>
                    <a href="logout.php"><i class="fa fa-user-circle" aria-hidden="true"></i> <span>Logout</span></a>
                </div>
            </div>   
        </nav>
        <img src="./Images/usericon.png" height="100px" width="100px">
        <h3><?php echo $_SESSION['First_name'] . ' ' . $_SESSION['Last_name']; ?></h3>
        <!-- 5 star rating -->
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>

    </section>
<!--..............User Page..........................-->

<div class="main-container">
    <div class="main-leftU">
        <aside>
           <img src="./Images/9arch.jpg" alt="">
           <img src="./Images/colombo.jpg" alt="">
           <img src="./Images/apartments.jpg" alt="">
        </aside>
    </div>
    
    <!--============Main Middle Start============-->
    <div class="main-middle">
        <div class="middle-container">
    
        <!--Feed Aria Start-->
            <!--Bookings-->

            <div class="feeds">
                <div class="feed">
                    <div class="bookigs">
                        <h3>Bookings</h3><br>
                       <table>
                           <tr>
                               <td><img src="./Images/bookig1.jpg"></td>
                               <td><b>Blue Moon Residency <br></b>Opens in new window
                                   Nuwara Eliya City Centre, Nuwara EliyaShow on map1.7 km from centre
                                   Attractively set in the centre of Nuwara Eliya, Blue Moon Residency features free WiFi, a shared lounge and free private parking for guests who drive.</td>
                           </tr>
                           <tr>
                               <td><img src="./Images/booking2.jpg"></td>
                               <td><b>Camelot Beach Hotel<br></b>Opens in new window
                                   NegomboShow on map250 m from centre
                                   Beachfront
                                   Travel Sustainable Level 1
                                   Just 100 metres from Negombo Beach, Camelot Hotel boasts 3 dining options including a pool bar at the beachfront pool.</td>
                           </tr>
               
               
               
               
                       </table>
                   </div>
                </div>
            </div>


            <!--Bookings-->
            <!--Tavel history.............-->  
            <div class="feeds">
                <div class="feed">
                    <!--feed Top-->
                    <div class="Uright">
                        <h2>Travel History</h2>
                        <table>
                            <tr>
                                <td><img src="./Images/sigiriya.jpg"></td>
                                <td>Sigiriya is an ancient rock fortress located in northern Sri Lanka.This megalithic rock was formed by a hard magma plate left behind by an extinct volcano.The local people consider it as the “eighth wonder of the world.”</td>
                            </tr>
                
                            <tr>
                                <td><img src="./Images/kandy.jpg"></td>
                                <td>Kandy was the capital of the Sinhalese Kings from 1592 to 1815, fortified by the terrain of the mountains and the difficult approach. The city is a world heritage site declared by UNESCO, in part due to the temple.</td>
                            </tr>
                
                            <tr>
                                <td> <img src="./Images/9arch.jpg"></td>
                                <td>The bridge was built at Gotuwala between the Ella and Demodara stations during the British Colonial period. Locally it is known as 'Ahas Namaye Palama' meaning nine skies bridge in Sinhala. The name derives from the visual experience.</td>
                            </tr>
                
                
                        </table>
                
                    </div>
                    
                </div>
            </div> 
            <!--travel history end-->
            
        </div>    
    
    </div>

    <!--right======================================-->

    <div class="main-right">
        <div class="right-containerC">
            <!--Edit personal details=============================================-->
            <div class="editPersonal">
                <h3>Edit Personal Dettails</h3><br>
                <form action="">
                    <li>
                        <label for="">Password</label>
                        <input type="password" >
                    </li>
                    <li>
                        <label for="">First name</label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Last name</label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Email</label>
                        <input type="email">
                    </li>
                    <br>
                    <button class="save">Save</button>
                </form>
            </div>
        </div>
    </div>
    
    <!--Feed Aria End-->
</div>

    <!--============Main Middle End============-->
<!--..............footer..........................-->
<section class="footer">
    <hr>
    <h4>About Us</h4>
    <p>We are online broker to help you to find destinations, hotels, vehicles and all about travelling. You can book hotels,check<br>
        availability, make plans and fully enjoy your vacation via help of us.</p>

        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>

            <p>Solution by <i class="fa fa-heart-o"></i> MLB_WD_05.01_11</p>
            
        </div>
</section>

</body>


</html>
