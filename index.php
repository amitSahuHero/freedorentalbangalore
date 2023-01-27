<!DOCTYPE html>
<html>

<head>
   <title>Freedo Rental</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/responsive.css">
   <link rel="stylesheet" type="text/css" href="css/animation.css">
   <script src="js/wow.min.js"></script>
   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <!-- header -->
   <div class="container-fluid navbar-info">
      <!-- <div class="container"> -->
      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-default navbar-me">
               <div class="container main-nav ">

                  <div class="col-md-3">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed menu-collapsed-button"
                           data-toggle="collapse" data-target="#navbar-primary-collapse" aria-expanded="false">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand site-logo1" href="index.php"><img src="img/index.png"
                              class="img-responsive"> </a>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="collapse navbar-collapse navbar-right  header-right-menu" id="navbar-primary-collapse">
                        <ul class="nav navbar-nav">
                           <li class="page-scroll"><a class="header" href="#" id="about-menu">Home</a></li>
                           <li><a class="" href="#" id="project-menu">About</a></li>
                           <li><a class="" href="#" id="project-menu">Rent</a></li>
                           <li><a class="" href="#" id="project-menu">Contact</a></li>
                           <!-- <li class="dropdown"><i class="nav-icon-products add-user "></i><a href="#"> MakeUp Types <b
                                 class="caret"></b></a>
                           <ul class="dropdown-menu gallery">
                              <li><a class="dropdown-item" href="#">Bridal Makeup</a></li>
                              <li><a class="dropdown-item" href="#">Engagement Makeup</a></li>
                          
                           </ul>
                        </li> -->
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <ul class="cbp-hsmenu">
                        <li class="chat">
                           <a class="top-btn sign" href="#">Sign Up</a>
                        </li>
                        <li class="chat">
                           <a class="top-btn" href="#">Login</a>
                        </li>
                     </ul>
                  </div>
               </div>


            </nav>
         </div>
      </div>
      <!-- </div> -->
   </div>

   <!-- end -->
   <!-- banner -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12" style="padding: 0px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

               <!-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
               </ol> -->

               <div class="carousel-inner">
                  <div class="item active">
                     <img src="img/Freedo-Banner-New.jpg" alt="" class="img-responsive wow zoomIn"
                        data-wow-duration="1s" width="100%">
                     <div class="bg-bann">
                        <div class="carousel-caption d-none d-md-block ban-text">
                           <h4>Explore The Best Of Bangalore<br> With Freedo</h4>
                           <p>Get the best two-wheeler rental solution for your travel needs</p>
                        </div>
                        <div id="contct" class="ftr-form">
                           <h3>Book Your Vehicle </h3>
                           <form id="frm">
                               <input type="hidden" name="action_type" value="enquiry">
                              <div class="form-group">
                                 <input id="name" name="name" type="text" class="form-control sdr-frs" placeholder="Name">
                                  <span class="message" id="msgname"></span>
                              </div>
                              <div class="form-group">
                                 <input id="phone" name="phone" type="text" class="form-control sdr-frs"
                                    placeholder="Phone Number">
                                  <span class="message" id="msgphone"></span>
                              </div>
                              <div class="form-group">
                                 <select name="state" id="state" class="form-control choose">
                                    <option>Select Location</option>
                                    <option>Bangalore</option>
                                 </select>
                                  <span class="message" id="msgstate"></span>
                              </div>

                              <div class="form-group">
                                 <select name="vehicle" id="vehicle" class="form-control choose">
                                    <option>Select Vehicle</option>
                                     <option value="Destini">Destini</option>
                                     <option value="Pleasure">Pleasure</option>
                                     <option value="HF 100">HF 100</option>
                                     <option value="Splendor">Splendor</option>
                                 </select>
                                  <span class="message" id="msgvehicle"></span>
                              </div>
                              <div class="form-group">
                                 <input id="email" name="email" type="text" class="form-control sdr-frs" placeholder="Email Address">
                                  <span class="message" id="msgemail"></span>
                              </div>
                              <!-- <div class="form-group">
                                 <textarea id="txt_Message_7" class="form-control sdr-frs"
                                    placeholder="Message"></textarea>
                              </div> -->
                              <div class="form-group">
                                 <input type="button" id="isValidate" class="btn btn-green ftr-btn1" value="Submit">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="item">
                     <img src="img/banner-design-new-2.jpg" alt="" class="img-responsive wow zoomIn" data-wow-duration="1s" width="100%">
                     <div class="bg-bann">
                        <div class="carousel-caption d-none d-md-block ban-text ">
                           <h4>“One Body, One Life, One Choice!”</h4>
                           <h5><span>EmpowerUSA's </span> Kickboxing Fitness<br> Instructor Training</h5>
                          
                        </div>
                     </div>
                  </div> -->

               </div>


            </div>
         </div>
      </div>
   </div>
   <!-- end -->

   <div class="training courses">
      <div class="container">

         <div class="chooseboxes">
            <div class="row">
               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-3.png">
                     </div>
                     <div class="ch-content">
                        <h4>Govt. Authorized Two Wheeler Rentals </h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-2.png">
                     </div>
                     <div class="ch-content">
                        <h4>Free Service and Maintenance </h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-9.png">
                     </div>
                     <div class="ch-content">
                        <h4>Free Insurance </h4>
                     </div>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-4.png">
                     </div>
                     <div class="ch-content">
                        <h4>Wide Range of Vehicles </h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-8.png">
                     </div>
                     <div class="ch-content">
                        <h4>Guaranteed Lower Prices</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ch-box-new">
                     <div class="ch-img">
                        <img src="img/p-7.png">
                     </div>
                     <div class="ch-content">
                        <h4>Home Delivery Available</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--Mission-->
   <div class="about-us">
      <div class="container">
         <div class="row">
            <div class="col-md-6  wow fadeInLeft" data-wow-duration="3s">
               <div class="about-img">
                  <img src="img/about.png" class="img-responsive">
               </div>
            </div>
            <div class="col-md-6">
               <div class="about-info main-pi">
                  <h5>Enjoy Hassle-Free Travel</h5>
                  <h4>Freedo - Best Bike And Scooter Rentals In Bangalore </h4>
                  <p>Freedo introduces smart, affordable, and easily accessible mobility options by offering its premium
                     range of <b>two-wheeler on rent in Bangalore.</b> Travel effortlessly within the city by choosing
                     the model of your choice.
                  </p>
                  <br>
                  <h6>Rent a motorcycle and enjoy the freedom it brings! </h6>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="gi-box">
                           <div class="gi-img">
                              <img src="img/Circle_2.gif" class="img-responsive">
                           </div>
                           <div class="gi-co">
                              <h3>Freedom from Ownership Hassles</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gi-box">
                           <div class="gi-img">
                              <img src="img/Helmet.gif" class="img-responsive">
                           </div>
                           <div class="gi-co">
                              <h3>Complimentary<br> Helmet </h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="gi-box">
                           <div class="gi-img">
                              <img src="img/KYC.gif" class="img-responsive">
                           </div>
                           <div class="gi-co">
                              <h3>Instant KYC and Payments
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!--end-->
   <!--Our Fleets-->
   <div class="program">
      <div class="container">
         <div class="top-title">
            <h3>Our <span>Renting Fleet</span></h3>
         </div>
         <div class="row">
            <section class="client-logos slider clg-sldr">

               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-10.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Splendor Plus </h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-3.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Xtreme 160</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>

               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-7.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Xpulse 200 </h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>


               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-6.jpg" class="img-responsive">
                     <h5>Royal Enfield</h5>
                     <h3> Classic 350</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-1.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Destini 125</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-8.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Pleasure +XTEC</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-4.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Pleasure Plus</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
               <div class="col-md-3 slide">
                  <div class="pr-box">
                     <img src="img/bk-9.png" class="img-responsive">
                     <h5>Hero</h5>
                     <h3>Maestro Edge 125</h3>
                     <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
                        <span>Get Quote</span>
                     </button>
                  </div>
               </div>
            </section>
         </div>
      </div>

   </div>
   <!--end-->
   <!--Faq-->
   <div class="container-fluid qpth">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="fq-i">
                  <img src="img/FAQ.png" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-md-6 demo">
               <div class="hdnhg">
                  <h2>Do you have questions? We've got you covered!</h2>
                  <p>Whether you need help with a two-wheeler rental booking or have a question, our team is here to
                     help you. See some of the most frequently asked questions below. If you still cannot find what you
                     need, please let us know.
                  </p>
               </div>
               <div class="fq-tr">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                 aria-expanded="true" aria-controls="collapseOne">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 How to book our bike rentals in Bangalore?
                              </a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingOne">
                           <div class="panel-body">
                              Well, you have landed at the right place for booking the best bike rentals in
                              Bangalore. Our two-wheeler rental platform gives you access to the latest range of
                              bike models at affordable rates. Just complete the registration process. Once done, go
                              through the models, select a bike of your choice, and make an easy online payment, and
                              voila, your two-wheeler will be delivered to your preferred location.
                              <br>

                              For faster and easier booking bike and scooter rentals, you can download our App. Please
                              feel free to reach out to our customer support team if you have any questions or concerns
                              during the bike rental booking process.


                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 Do Freedo Rentals give helmets with vehicles?
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingTwo">
                           <div class="panel-body">
                              For Freedo Rentals, the safety and security of its riders matter the most. In fact, we are
                              known for our best-in-class safety standards in our two-wheeler rental services. You will
                              get a complimentary helmet with every bike and scooter rental. However, all other
                              accessories and gear must be purchased independently by the rider.<br>

                              Keeping the COVID situation in mind, we take necessary precautions while delivering
                              scooter and bike rentals in Bangalore. You will get a safe and sanitized vehicle at
                              every booking! Enjoy your ride within the city hassle-free with Freedo two-wheeler rental
                              services. Connect with us for further queries.


                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 What are the documents required for online two-wheeler rental booking?
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingThree">
                           <div class="panel-body">
                              Booking bike and scooter rentals at Freedo is quite easy. All you have to do is provide
                              your original driving license (a learner license is not applicable) and submit any
                              original government ID proof by the end of the booking.
                              best bike
                              rentals in Bangalore, make sure you have these documents. <br>

                              Once you provide these documents and complete the registration procedure, you can continue
                              with the online booking of your favorite two-wheeler rental on our platform. In case of
                              any queries, you can connect with us. Our customer support team will take all your
                              concerns with expertise.


                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfour">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 Why is Freedo the best platform to book 2-wheeler rentals in Bangalore?

                              </a>
                           </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingfour">
                           <div class="panel-body">
                              Freedo offers a smart, affordable, and accessible mobility option to its riders by coming
                              with a wide range of two-wheeler rentals. On this platform, you get access to a variety of
                              bikes like Classic 350, Xpulse 200, Xtreme 160R Stealth, and a lot more.
                              <br>

                              With Freedo bike and scooter rentals in Bangalore, you get: <br>

                              <ul>
                                 <li>The Freedom to choose the bike of your choice</li>
                                 <li>No more hassles of ownership of the vehicle</li>
                                 <li>Free monthly service and maintenance with doorstep vehicle delivery </li>
                                 <li>Affordable packages on two-wheeler rentals </li>
                              </ul>

                              If you want to ease your travel journey, you must book your bike rentals at Freedo!

                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 What locations are available for picking up and dropping off the vehicle?
                              </a>
                           </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingfive">
                           <div class="panel-body">
                              We have multiple locations for the pick-and-drop facility for bike rentals in
                              Bangalore. Your vehicle can be picked up from any location you prefer, but it must
                              be returned to the same location as it was picked up. <br>

                              If you book a bike rental online, just select the preferred location for delivery of your
                              bike rental while making payment. The vehicle will be delivered to you at the soonest time
                              possible. We would suggest you select a pick up location according to your own
                              convenience. If you still have queries, you can reach out to our customer support team for
                              better guidance.

                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingsix">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapsesix" aria-expanded="false" aria-controls="collapsefive">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 What type of two-wheelers does Freedo offers?
                              </a>
                           </h4>
                        </div>
                        <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingsix">
                           <div class="panel-body">
                              Freedo comes with an impressive range of bike and scooter rentals. On our two-wheeler
                              rental platform, you get Maestro Edge 110, Destini 125, Xtreme 200S, HF Deluxe, Pleasure
                              Plus Xtec, Xtreme 160R Stealth, Glamour, Splendor I smart, Classic 350, and many other
                              models. These two-wheelers models can cater to the diverse mobility demands of today's
                              travel enthusiasts.
                              <br>

                              You can choose the model based on your travel demands and ease your journey to a great
                              extent. Explore our range of two-wheelers, pick the bike model of your choice, make an
                              online payment, and enjoy your ride within the city. What are you waiting for? Book your
                              bike rental now!


                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingseven">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                 href="#collapseseven" aria-expanded="false" aria-controls="collapsefive">
                                 <i class="more-less glyphicon glyphicon-plus"></i>
                                 What is the cost of our two-wheeler rental services?
                              </a>
                           </h4>
                        </div>
                        <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                           aria-labelledby="headingseven">
                           <div class="panel-body">

                              The cost of our two-wheeler rentals depends from model to model. Some bike models are
                              available at low-cost. While some may be on a higher rental price. We provide hourly,
                              daily, weekly,
                              or monthly bike rentals in Bangalore.A 24-hour rental plan is also
                              available!<br>

                              Therefore, before booking a bike rental, you must explore our range of two-wheelers and
                              choose the model that fits your travel demands and budget. Pick the vehicle of your
                              choice, select the package, and enjoy the ride for as many days as you want. In case of
                              further assistance, connect with our customer support team.


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end-->
   <div class="blog-page">
      <div class="container">
         <div class="top-title">
            <h3>Latest Blog</h3>
            <div class="heading-separator" style=" margin: 0 auto;"><span> </span></div>
         </div>
         <div class="row">
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="3s">
               <div class="media-bx">
                  <div class="md-img">
                     <img src="img/blog-1.png">
                  </div>
                  <div class="md-content">
                     <h3>Hill Stations near Bangalore to visit with Freedo </h3>
                     <!-- <h5><i class="fa fa-calendar cl-nd" aria-hidden="true"></i> April 15, 2022</h5> -->
                     <p>Bike trips are a dream of every traveler. What can be a better ride than exploring mother nature
                        and experiencing beautiful scenarios of hill stations?!
                     <div class="readmore">
                        <a target="_blank"
                           href="https://freedo.rentals/blog-page/Hill-Stations-near-Bangalore-to-visit-with-Freedo-">Read
                           More
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="3s">
               <div class="media-bx">
                  <div class="md-img">
                     <img src="img/blog-2.png">
                  </div>
                  <div class="md-content">
                     <h3>Take a bike or scooter rental in Bangalore and make your next road trip adventurous!</h3>
                     <!-- <h5><i class="fa fa-calendar cl-nd" aria-hidden="true"></i> April 25, 2022</h5> -->
                     <p>The bike or any two-wheeler ride experience creates the best travel memories. The vibe hits
                        differently when you feel the beauty of Bangalore
                     </p>
                     <div class="readmore">
                        <a target="_blank"
                           href="https://freedo.rentals/blog-page/Take-a-bike-or-scooter-rental-in-Bangalore-and-make-your-next-road-trip-adventurous-">
                           Read More
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="3s">
               <div class="media-bx">
                  <div class="media-bx">
                     <div class="md-img">
                        <img src="img/blog-3.png">
                     </div>
                     <div class="md-content">
                        <h3>Top reasons to rent a two-wheeler at Freedo </h3>
                        <!-- <h5><i class="fa fa-calendar cl-nd" aria-hidden="true"></i> May 19, 2022</h5> -->
                        <p>
                           Riding a motorcycle or a scooter gives you the freedom to enter every nook and corner of the
                           city. Traveling becomes more fun
                        </p>
                        <div class="readmore">
                           <a target="_blank"
                              href="https://freedo.rentals/blog-page/Top-reasons-to-rent-a-two-wheeler-at-Freedo">Read
                              More
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="testimonials">
      <div class="container">
         <div class="row">
            <div class="col-md-6 tst09">
               <h3 class="trt-h2"><strong>Testimonials</strong></h3>
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">It is very nice to have FREEDO to make my journey easy and
                              trouble free. Thanks to Freedo.</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Sachin</h4>
                              <p class="cust-profession">Customer</p>
                           </div>

                        </div>
                     </div>
                     <div class="item">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">A very good initiative by Team Freedo at a time when its most
                              needed. Keep it UP!</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Sudhir</h4>
                              <p class="cust-profession">Customer</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">A much needed service at a much needed time. I am happy with the
                              scooter and service provided Thanks to Team Freedo.</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Rishab</h4>
                              <p class="cust-profession">Customer</p>
                           </div>
                        </div>

                     </div>
                     <div class="item">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">The scooter condition & the service is very good. I am thankful
                              for this opportunity at this time for providing the personal vehicle.</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Shruti</h4>
                              <p class="cust-profession">Customer</p>
                           </div>
                        </div>

                     </div>
                     <div class="item">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">Thanks for the assistance at midnight 00:15 PM, as whistling
                              noise observed in Destini Scooter and issue resolved. This is really appreciable</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Harsh</h4>
                              <p class="cust-profession">Customer</p>
                           </div>
                        </div>

                     </div>
                     <div class="item">
                        <div class="row" style="padding: 20px">

                           <p class="testimonial_para">Its Black-Panther colour is very pretty. Acceleration and braking
                              is very good, seat and helmet are comfortable. Helmet quality is also very good</p>
                           <br>

                           <div class="profile">
                              <h4 class="cust-name">Sanjay</h4>
                              <p class="cust-profession">Customer</p>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="controls testimonial_control pull-right">
                  <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                     data-slide="prev"></a>
                  <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                     data-slide="next"></a>
               </div>
            </div>
            <div class="col-md-6">
               <div class="ts7">
                  <img src="img/Freedo Testimonial.png" alt="" class="img-responsive">
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- Top footer -->
   <div class="footer-top_content">
      <div class="container">
         <div class="top-tittle">
            <h3>Freedo bike and scooter rental in Bangalore </h3>
         </div>
         <div class="more">
            India's third most populous city is Bangalore, the state capital of Karnataka. This cosmopolitan city is
            also known as the 'IT Capital' and serves a wide range of people from diverse backgrounds. Aside from its
            exuberance and busy lifestyle, the city is also known for its high traffic. Therefore, the concept of
            renting two-wheelers makes so much sense. If you are on the road, moving through the gaps of what can be an
            hour-long traffic, you will be glad that you rented a bike/scooter. It's a reasonable and exciting way to
            commute in the city!
            <br>
            <br>

            <p>With Freedo bike rentals in Bangalore, you will be able to ride throughout the city at a much lower cost.
               In addition, you won't have to deal with the headaches that come with owning a bike. Whether you are
               heading out on a small trip or want to venture out for a long ride, our range of two-wheeler rentals will
               perfectly suit your travel needs.
            </p>

            <p>For ardent riders, bike or scooter rentals in Bangalore are a blessing. Several different types of bikes
               are available, from economical models to medium-powered bikes to cruisers to seriously powerful
               superbikes like the Classic 350.
            </p>

            <h3>Hire a two-wheeler on rent in Bangalore with confidence at Freedo!
            </h3>
            <p>Taking a bike ride or riding a two-wheeler is the most fun way to create travel memories. You get a
               completely different vibe when you see the scenic views of Bangalore and feel its beauty. If you want to
               explore the best of Bangalore, rent a two-wheeler. </p>
            <p>Two-wheeler rentals are an easy, hassle-free, and affordable alternative to owning a vehicle, as they do
               not require huge investments. Aside from that, you won't have to worry about maintenance and insurance.
               Whenever you want, you can travel anywhere without being dependent on anyone! We at Freedo Rentals
               endeavor to deliver the best to the customer and serve beyond expectation by offering the best bike
               rentals in Bangalore.
            </p>
            <p>Wouldn't it be nice to be free of Bangalore's daily traffic and just travel wherever you want? Visiting
               the Freedo website or picking up a bike from our nearest two-wheeler rental store would be a smart place
               to start! As a company, we work hard to make travel safer and more convenient. In comparison to costly
               cab rides and taxis, our 2-wheeler rentals in Bangalore provide you with exciting packages and additional
               privileges. Here's
            </p>
            <h3> What you will get at Freedo:</h3>
            <ul class="list">
               <li>Safe and sanitized vehicle </li>
               <li>Complementary helmet </li>
               <li>Fully insured ride </li>
               <li>24*7 assistance </li>
               <li>Instant and secure payments</li>
            </ul>
            <p>In addition to these facilities, we offer customer-friendly, passionate, and honest bike rentals in
               Bangalore with minimal processing steps, easy document verification, and convenient pick-ups and drops.
               Changing riders' perceptions and promoting their true passion is our goal.

            </p>
            <h3>Benefits of taking Freedo bike rentals in Bangalore! </h3>
            <p>Bangalore is one of the best cities in the world for travelers. Two-wheelers are the most convenient way
               to explore the coolest places here! Taking scooters or bikes for rent in Bangalore doesn't require a lot
               of money.

            </p>
            <p>Freedo two-wheeler rentals will make your travel easy, smooth, and affordable. Choose this travel option
               and tap these benefits:
            </p>

            <h3>Flexibility to travel wherever you want</h3>

            <p>No matter what your travel plans are, a bike is a reliable travel companion, whether you want to take the
               same route every day or explore the city more. Nevertheless, not everyone can afford a two-wheeler. These
               problems can be solved with bike/scooter rental services.


            <p>With Freedo 2-wheeler rental in Bangalore, you can rent a bike of your choice and enjoy the feeling of
               riding in a city without having to worry about ownership. You don't even have to worry about maintenance
               or pending EMIs.


            <h3>A wide range of two-wheeler rentals</h3>

            <p>Getting scooter or bike rentals in Bangalore saves you from the setbacks of vehicle maintenance. From
               Pleasure Plus to Royal Enfield Classic 350, you get access to a variety of bikes at Freedo.
            </p>

            <p>We offer hourly, daily, weekly, or monthly bike rentals in Bangalore. You can even opt for a 24-hour
               rental plan! According to your budget and preferences, you can choose high-quality and well-maintained
               bikes. Just pick your favorite vehicle, select a package, and enjoy the ride for as many days as you
               want.
            </p>

            <h3>Budget-friendly travel within the city</h3>

            <p>Traveling outside your city requires you to take care of your own vehicle. When you're heading out on
               road trips, it's a wise idea to take a bike and scooter rental in Bangalore. The cost is lower than
               owning one. A two-wheeler rental offers you the opportunity to try something new in the city, whether you
               want to experience the top attractions of Bangalore or commute to work each day.
            </p>

            <p>What's the point of investing your hard-earned money in a bike or scooter that will lose its value in a
               few years? Explore the must-see places in Bangalore hassle-free by renting two-wheelers at Freedo!
            </p>

            <h3>Connect with Freedo to get the best bike rentals in Bangalore</h3>

            <p>There is a lot to see and do in Bangalore for travelers. You can make the most of your next Bangalore
               road trip if you know a few helpful places and have the right vehicle. You are probably making the right
               decision if you plan on renting a bike or scooter while on vacation.
            </p>

            <p>You'll have a lot of fun renting a two-wheeler because it's an easy, convenient, and stress-free travel
               option. Freedo Rentals allows you to get up and move whenever you want, whether it's for everyday travel
               or a road trip. With our bike/scooter rental in Bangalore, you can explore this city without relying on
               anyone else.
            </p>

            <p>For seamless or faster two-wheeler rental booking, you can also download our App. You will also get
               exclusive deals on our bike and scooter rentals. </p>
            <P>Give our two-wheeler rentals a try. Send us an email, call us, or use our website to submit an inquiry.
               Creating a safe, passionate, and happy riding community is what we love to do!
            </P>
         </div>
      </div>
   </div>
   <!-- End Top footer -->
   <!-- footer -->
   <div class="container-fluid">
      <div class="row ftr-wp">
         <div class="container">
            <div class="row">
               <div class="col-md-3 ">
                  <div class="ftr-1a">
                     <img src="img/footer-logo.ba971767.svg" alt="" class="img-responsive"><br>
                     <p>Freedo Rental is Two wheeler rentals company engaged in the business of short term and long term
                        rentals.

                  </div>
               </div>
               <div class="col-md-3 ">
                  <div class="ftr-1a">
                     <h3>Company</h3>
                     <ul class="tree-list">
                        <li><a href="https://freedo.rentals/aboutus">About Us</a></li>
                        <li><a href="https://freedo.rentals/faq">FAQs</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="https://freedo.rentals/contactus">Contact details</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-2 ">
                  <div class="ftr-1a">
                     <h3>Policies</h3>
                     <ul class="tree-list">
                        <li><a href="https://freedo.rentals/privacy-policy">Privacy Policy</a></li>
                        <li><a href="https://freedo.rentals/term-condition">Terms And Conditions</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ftr-1a">
                     <h3>Contact Us </h3>
                     <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                           <i class="fa fa-map-marker frr-ic" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                           <p>Freedo,
                              Plot No: 47, Udyog Vihar, Phase 4,
                              Sector 18, Gurugram - 122015, Haryana
                           </p>
                           <p>Freedo Rentals,
                              Basement-Lohit Building,
                              H-193, Sector 63,
                              Noida, Gautam Buddha Nagar,
                              Uttar Pradesh, 201301</p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                           <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                           <p><span><a href="tel: +91 9599819940"> +91 9599819940
                                 </a></span>
                           </p>
                        </div>
                     </div>
                     <h3>We are on</h3>
                     <div class="social">
                        <a target="_blank" class="share-facebook" href="https://www.facebook.com/freedorentals/"><i
                              class="fa fa-facebook"></i></a>
                        <a target="_blank" class="share-linkedin" href="https://www.instagram.com/freedorentals/"><i
                              class="fa fa-linkedin"></i></a>
                        <a target="_blank" class="share-insta" href="https://www.linkedin.com/company/freedorentals"><i
                              class="fa fa-instagram"></i></a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="row ftr-wp1">
         <div class="container">
            <p class="cpy-p">Copyright © 2022 Makeup Aura. All Rights Reserved.</p>
         </div>
      </div> -->
   </div>
   <!-- end -->

   <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="js/main.js"></script>
   <script src="dist/sweetalert.min.js"></script>
   <script src="dist/sweetalert.js"></script>
   <link rel="stylesheet" href="dist/sweetalert.css">
   <script src="js/wowslider.js"></script>
   <!-- <script src="js/script.js"></script> -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>


   <!-- menu -->
   <!-- The Modal -->
   <div class="modal" id="freeModal">
      <div class="modal-dialog">
         <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">

               <center>
                  <h3>Book Your Vehicle</h3>
               </center>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
               <div class="ftr-a">
                  <form id="getaquote">
                      <input type="hidden" name="action_type" value="getquotes">
                     <div class="form-group">
                        <input id="getname" name="getname" type="text" class="form-control sdr-frs" placeholder=" Name">
                         <span class="message" id="msggetname"></span>
                     </div>
                     <div class="form-group">
                        <input id="phone" name="getphone" type="text" class="form-control sdr-frs" placeholder="Phone Number">
                         <span class="message" id="msggetphone"></span>
                     </div>
                     <div class="form-group">
                        <select name="getstate" id="getstate" class="form-control choose">
                           <option>Select Location</option>
                           <option>Bangalore</option>>
                        </select>
                         <span class="message" id="msggetstate"></span>
                     </div>

                     <div class="form-group">
                        <select name="getvehicle" id="getvehicle" class="form-control choose">
                           <option>Select Vehicle</option>
                            <option value="Destini">Destini</option>
                            <option value="Pleasure">Pleasure</option>
                            <option value="HF 100">HF 100</option>
                            <option value="Splendor">Splendor</option>
                        </select>
                         <span class="message" id="msggetvehicle"></span>
                     </div>
                     <div class="form-group">
                        <input id="getemail" name="getemail" type="text" class="form-control sdr-frs" placeholder="Email Address">
                         <span class="message" id="msggetemail"></span>
                     </div>
                     <!-- <div class="form-group">
                        <textarea id="txt_Message_7" class="form-control sdr-frs" placeholder="Message"></textarea>
                     </div> -->
                     <div class="form-group">
                        <input type="button" id="isValidateGetQuotes" class="btn btn-green ftr-btn1" value="Submit">
                     </div>
                  </form>
               </div>
            </div>

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div> -->

         </div>
      </div>
   </div>
   <script src="js/get.js"></script>
   <script type="text/javascript">
      $(window).scroll(function () {
         if ($(this).scrollTop() > 5) {
            $(".navbar-me").addClass("fixed-me");
         } else {
            $(".navbar-me").removeClass("fixed-me");
         }
      });
   </script>
   <!-- end -->
   <script>
      $(document).ready(function () {
         // Configure/customize these variables.
         var showChar = 500;  // How many characters are shown by default
         var ellipsestext = "";
         var moretext = "Read More";
         var lesstext = "Read Less";


         $('.more').each(function () {
            var content = $(this).html();

            if (content.length > showChar) {

               var c = content.substr(0, showChar);
               var h = content.substr(showChar, content.length - showChar);

               var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

               $(this).html(html);
            }

         });

         $(".morelink").click(function () {
            if ($(this).hasClass("less")) {
               $(this).removeClass("less");
               $(this).html(moretext);
            } else {
               $(this).addClass("less");
               $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
         });
      });
   </script>

   <script>
      new WOW().init();
   </script>
   <script>
      wow = new WOW(
         {
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: true        // default
         }
      )
      wow.init();
   </script>


   <!-- logo slider -->
   <script src="js/slick.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
         $('.client-logos').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            nextArrow: '<i class="fa fa-angle-right nextarr" aria-hidden="true"></i>',
            prevArrow: '<i class="fa fa-angle-left prevarr" aria-hidden="true"></i>',
            dots: false,
            pauseOnHover: true,
            responsive: [{
               breakpoint: 768,
               settings: {
                  slidesToShow: 1
               }
            }, {
               breakpoint: 520,
               settings: {
                  slidesToShow: 1
               }
            }]
         });
      });
   </script>
   <!--FAQ -->
   <script type="text/javascript">
      function toggleIcon(e) {
         $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
      }
      $('.panel-group').on('hidden.bs.collapse', toggleIcon);
      $('.panel-group').on('shown.bs.collapse', toggleIcon);
   </script>

   <!-- END -->
   <div class="enquire-form">
      <button type="button" class="thm-btn" data-toggle="modal" data-target="#freeModal">
         <span>Enquire Now!</span>
      </button>
   </div>


</body>

</html>