<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>HP Hotel-BEST IN PUNEs </title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
  
  
               
    <!-- ***** Main Banner Area Start ***** -->
    <?php 
         
         include("main_banner.php");      
  ?>
    <!-- ***** Main Banner Area End ***** -->
  

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">7057032697</a><br><a href="#">7038761177</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hphotel@gmail.com</a><br><a href="#">homesh@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="index.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-12 ">
                                
                                
 <!------ Php section--------------------->

 
    <?php
         $con = mysqli_connect('localhost', 'root', '', 'hphotel',330);
         if(!$con){
             echo 'connection error';
         }
         # form section
         if(isset($_POST["submit"])){
             $name = $_POST["name"];
             $email = $_POST["email"];
             $phone = $_POST["phone"];
             $seat = $_POST["seat"];
             $date = $_POST["date"];
             $time = $_POST["time"];
             $message =$_POST["message"];
            
             $sql="SELECT * FROM reservation WHERE email='$email'";
             $run_query=mysqli_query($con,$sql);
             $count=mysqli_num_rows( $run_query);
             if ($count > 0) 
             {
                   echo "<div class=' text-center text-danger mt-3' id='error'>
                     <h5> Email Already exist , please check your seat status </h5>
              </div>";
             }else{

                $sql="INSERT INTO `reservation` (`seatid`, `name`, `email`, `phone`, `date`, `seatcount`, `time`, `message`) VALUES (NULL,'$name', '$email', '$phone', '$date', '$seat', '$time', '$message')";
                $run_query=mysqli_query($con,$sql);
                if ($run_query) {
                    echo "<div class=' text-center text-primary mt-3' id='error'>
                    <h5> Successfully your seat reserved , Thank You </h5>
                  </div>" ;
                }

             }


          }

    ?>

                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="" autocomplete="off"/>
                              </fieldset>
                            </div>
                             <div class="col-lg-12 col-sm-12">
                              <fieldset>
                              <input name="email" type="text"  pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="" autocomplete="off"/>
                            </fieldset>
                            </div>

                            <div class="col-lg-6 col-sm-12">
    <fieldset>
        <input name="phone" type="text" id="phone" placeholder="Phone Number*" pattern="\d{10}" title="Please enter a 10-digit phone number" required autocomplete="off"/>
    </fieldset>
</div>

</option>
<div class="col-md-6 col-sm-12">
    <fieldset>
        <input type="number" name="seat" id="number-guests" placeholder="Enter Number Of Guests" autocomplete="off" required min="1">
    </fieldset>
</div>

                               
<div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy" autocomplete="off"/>
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time" autocomplete="off">
                                    <option value="time">Time</option>
                                    <option name="Breakfast" id="Breakfast">Breakfast</option>
                                    <option name="Lunch" id="Lunch">Lunch</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""autocomplete="off"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" name="submit">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
   
    <!-- ***** Chefs Area Ends ***** --> 
    
 

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>