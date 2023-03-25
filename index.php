<?php
$servername = "localhost";
$username = "SYSTEM";
$password = "password";
$dbname = "ORCL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">E-Housing</a>
                <a class="btn btn-primary" href="#AgentSignup">Sign Up</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Search results:</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#"><div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>Find Houses</h3>
                            <p class="lead mb-0">Click here to view all houses! (Q1)</p>
                            <php mysqli_query("SELECT * FROM AGENT");></php>
                        </div>
                    </div></a>
                    <div class="col-lg-4">
                        <a href="#"><div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>Find Owners</h3>
                            <p class="lead mb-0">Click here to see who owns the most expensive houses in the city! (Q9)</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"><div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Become an Agent</h3>
                            <p class="lead mb-0">Click here to view homes that have the same e-appliance manufacturer! (Q4)</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/affordable_house.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Find Affordable Houses</h2>
                        <p class="lead mb-0">Look here to find all houses below $200,000 locally by selecting your city below! (Q8)</p>
                        <br></br>
                        <div class="dropdown">
                            <button onclick="dropDown()" class="dropbtn">Click me!</button>
                            <div id="myDropdown" class="dropdown-content">
                              <a href="#">Troy, MI</a>
                              <a href="#">San Diego, CA</a>
                              <a href="#">Boston, MA</a>
                            </div>
                          </div> 
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/neighborhood.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Find Owners</h2>
                        <p class="lead mb-0">Find owners who no longer own homes, those who own apartments and mansions, or the owners with the most expensive houses in the city! (Q7)</p>
                        <br></br>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">Find Owners</a>
                        </div> 
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/older_house.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Re-Discover Homes</h2>
                        <p class="lead mb-0">Are you a real-estate Agent? View homes that have been sold more than once here! (Q2)</p>
                        <br></br>
                        <div class="dropdown">
                            <a href="#" class="dropbtn">View Re-Sold Homes</a>
                        </div> 
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">What people are saying...</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Margaret E.</h5>
                            <p class="font-weight-light mb-0">"Just bought my most expensive house through E-Housing! Check it out! (Q3)"</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Fred S.</h5>
                            <p class="font-weight-light mb-0">"So glad I was able to sell this home I used to own using E-Housing. (Q5)"</p>
                        </div></a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"><div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Sarah W.</h5>
                            <p class="font-weight-light mb-0">"From an Agent here on E-Housing, thanks so much for putting the customer first! (Q6)"</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form to add Agent to database -->
        <section id="AgentSignup" class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Are you an Agent? Sign up below to be added to our official list!</h2>
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Agent Form input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="AgentNameField" type="name" placeholder="Full name" data-sb-validations="required,name" /><br>
                                    <input class="form-control form-control-lg" id="AgentEmailField" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                            </div><br>
                            <div class="col-auto"><a href="#" class="dropbtn btn btn-primary btn-lg" id="addAgentButton" type="submit">Sign Up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><br>
        <!-- Form to add house to database -->
        <section id="HouseSignup" class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Fill in your details and click "add house" to add your house to our database!</h2>
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Housing Form input-->
                            <div class="row">
                                <div class="col">
                                    <!-- Owner / Agent Details -->
                                    <h1>Owner / Agent Details:</h1>
                                    <input class="form-control form-control-lg" id="House_Floorspace" placeholder="Social Security Number" /><br>
                                    <input class="form-control form-control-lg" id="House_Floorspace" placeholder="Owner Name" /><br>
                                    <input class="form-control form-control-lg" id="House_Floorspace" type="number" placeholder="Dependents" /><br>
                                    <input class="form-control form-control-lg" id="House_Floorspace" type="number" placeholder="Income (estimate)" /><br>
                                    <input class="form-control form-control-lg" id="Owner_SSN" type="number" placeholder="Owner Age" /><br>
                                    <input class="form-control form-control-lg" id="Owner_SSN" placeholder="Owner Profession" /><br>
                                    <input class="form-control form-control-lg" id="Agent_Name" placeholder="Agent Name" /><br>
                                    <input class="form-control form-control-lg" id="Agent_Email" placeholder="Agent Email" /><br>
                                    <!-- House Location Details -->
                                    <h1>Location Details:</h1>
                                    <input class="form-control form-control-lg" id="Location_Address" placeholder="House Address" /><br>
                                    <input class="form-control form-control-lg" id="Location_Apt/Unit" placeholder="Apartment / Unit number (if applicable)" /><br>
                                    <input class="form-control form-control-lg" id="Location_City" placeholder="City" /><br>
                                    <input class="form-control form-control-lg" id="Location_State" placeholder="State" /><br>
                                    <input class="form-control form-control-lg" id="Location_Zipcode" type="number" placeholder="Zipcode" /><br>
                                    <input class="form-control form-control-lg" id="Location_Country" placeholder="Country" /><br>
                                    <!-- House details -->
                                    <h1>House Details:</h1>
                                    <input class="form-control form-control-lg" id="House_Floorspace" type="number" min="0" placeholder="Floorspace (in square feet)" /><br>
                                    <input class="form-control form-control-lg" id="House_Floors" type="number" min="0" placeholder="Number of Floors" /><br>
                                    <input class="form-control form-control-lg" id="House_Bedrooms" type="number" placeholder="Number of Bedrooms" /><br>
                                    <input class="form-control form-control-lg" id="House_Bathrooms" type="number" placeholder="Number of Bathrooms" /><br>
                                    <input class="form-control form-control-lg" id="House_Landsize" type="number" placeholder="Yard Size (in square feet)" /><br>
                                    <input class="form-control form-control-lg" id="House_YearConstructed" type="number" placeholder="Year Constructed" /><br>
                                    <input class="form-control form-control-lg" id="House_Category" placeholder="Category" /><br>
                                    <input class="form-control form-control-lg" id="House_Price" type="number" placeholder="Value of House" /><br>
                                    <!-- Contact Form input
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                    -->
                                </div>
                            </div>
                            <div class="col-auto"><a href="#" class="dropbtn btn btn-primary btn-lg" id="addHouseButton" type="submit">Add House</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; E-Housing 2022. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
