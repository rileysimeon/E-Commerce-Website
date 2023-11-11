<!DOCTYPE html>
<html>
    <head>
        <title>Final_proj</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
            .carousel-inner> .item> img{
                margin: auto;
            }
        </style>


    </head>
    <body>
        <nav class="navbar navbar-doublerow navbar-trans navbar-fixed-top">
            <nav class="navbar-default navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar, #myNavbar2">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">E-Commerce</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li class="hidden-xs"><a>|</a></li>
                            <li>
                                <a><input type="text" class="search-click" name="" placeholder=" Search here..."/></a>
                            </li>
                        </ul> 
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-down navbar-inverse">
				<div class="container">
					<div class="collapse navbar-collapse" id="myNavbar2">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Products</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="faq.php">FAQ</a></li>
						</ul>
				</div>
			</nav>
        </nav>
        <br/><br/><br/><br/><br/><br/>
        
        <div class="container midnav">
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="img/cam1.png" style="width:100px; height:90px;"/>
                        <div class="caption text-center">
                            <a href="prod1.php" class="active">Interchangeable Lens Camera</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="img/cam2.png" style="width:100px; height:90px;"/>
                        <div class="caption text-center">
                            <a href="prod2.php">Digital Cameras</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="img/lens.png" style="width:100px; height:90px;"/>
                        <div class="caption text-center">
                            <a href="prod3.php">Lenses</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="img/accs.png" style="width:100px; height:90px;"/>
                        <div class="caption text-center">
                            <a href="prod4.php">Camera Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
        <div class="container-fluid">
            <br/>
            <br/>
            <div class="container col-md-12">
                <div class="container col-md-3  col-md-offset-2 ">
                    <h2 class="col-md-offset-1">EOS R5 (RF24-105mm f/4L IS USM)</h2><br/>
                    <p class="col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br/>
                    <p class="col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p><br/>   
                                       
                    <br/>
                </div>

                <div class="container col-md-3 col-md-offset-1 text-center">
                    <br/>
                    <div class="carousel slide" data-ride="carousel" id="c1">
                        <ol class="carousel-indicators">
                            <li data-target="#c1" data-slide-to="0"></li>
                            <li data-target="#c1" data-slide-to="1"></li>
                            <li data-target="#c1" data-slide-to="2"></li>
                            <li data-target="#c1" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/camcar1.png"/>
                            </div>
                            <div class="item">
                                <img src="img/camcar2.png"/>
                            </div>
                            <div class="item">
                                <img src="img/camcar3.png"/>
                            </div>
                            <div class="item">
                                <img src="img/camcar4.png"/>
                            </div>
                        </div>
                        <a href="#c1" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#c1" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="container">
                <div class=" col-md-12">
                    <div class="page-header">
                        <h3 class="text-center">Specifications</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs1.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4>Dual CardSlots</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs2.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4>Shutter Durability</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs3.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                
                                <h4>Strong & Durable</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs4.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4>High Battery Capacity</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs5.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                
                                <h4>Improved Ergonomics</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/specs6.jpg" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4>High-Precision EVF</h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div><hr/>
            <div class="container">
                <button class="btn btncontact text-right  pull-right" data-toggle="modal" data-target="#myModal" >Buy this product</button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4>EOS R5 (RF24-105mm f/4L IS USM)</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="Enter Your Name"> 
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-lg" placeholder="Enter Your Email"> 
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-lg" placeholder="Enter Your Contact Number"> 
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" style="font-size: 20px; color:gray;">Address...</textarea> 
                                    </div>
                                    <div class="form-group">
                                        <b class="col-md-3">Payment Details</b>
                                        <div class="checkbox text-right">
                                            <label><input type="checkbox">Remember me</label>
                                        </div>                                        
                                    </div><hr/>

                                    <div class="col-md-offset-3">
                                        <label for="cardnumber ">Card Number</label>
                                    </div>
                                    <div class="input-group col-md-6 col-md-offset-3">
                                        <input type="password" class="form-control" placeholder="Enter your Card Number...">      
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </div>      
                                    </div><br/>
                                    <div class="col-md-offset-3">
                                        <label for="expiry date">Expiry date</label>
                                    </div>
                                    <div class="input-group col-md-offset-3">
                                        <div class="col-md-3 ">
                                            <input type="number" class="form-control" placeholder="MM">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" placeholder="YY">
                                        </div>
                                                  
                                    </div><br/>
                                    <div class="col-md-offset-3">
                                        <label for="expiry date">CV Code</label>
                                    </div>
                                    <div class="input-group col-md-offset-3">
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" placeholder="CV">
                                        </div>    
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btncontact " data-dismiss="modal">Confirm Payment</button>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>
            <br/><br/><br/>
            <br/><br/><br/><br/>
            <hr>

            <footer class="footer">
                <div class="container-fluid fcont1">
                    <div class="col-md-3">
                        Connect with us on Social Networks:
                    </div>
                    <ul class="list-inline text-right socmeds">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="#"><i class="bi bi-google"></i></a></li>
                        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
                <br/>
                    <div class="container-fluid">
                        <div class="col-md-2 col-md-offset-2" >
                            <ul class="list-unstyled list-group borderless">
                                <li class="nav-header disabled"><p style="color:#FA8072;">Company</p></li>
                                <li class="list-group-item"><a href="about.php">About Us</a></li>
                                <li class="list-group-item"><a href="contact.php">Contact Us</a></li>
                                <li class="list-group-item"><a href="faq.php">FAQ</a></li>
                                <li class="list-group-item"><a href="#">Terms of Use</a></li>
                                <li class="list-group-item"><a href="#">Privacy Policy</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-2" >
                            <ul class="list-unstyled list-group borderless">
                                <li class="nav-header disabled"><p style="color:#FA8072;">Products</p></li>
                                <li class="list-group-item"><a href="prod1.php">Interchangeable Lens Cameras</a></li>
                                <li class="list-group-item"><a href="prod2.php">Digital Cameras</a></li>
                                <li class="list-group-item"><a href="prod3.php">Lenses</a></li>
                                <li class="list-group-item"><a href="prod4.php">Accessories</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-2 " >
                            <ul class="list-unstyled list-group borderless">
                                <li class="nav-header disabled"><p style="color:#FA8072;">Useful Links</p></li>
                                <li class="list-group-item"><a href="#">Your Profile</a></li>
                                <li class="list-group-item"><a href="#">Return Policies</a></li>
                                <li class="list-group-item"><a href="#">Shipping Rates</a></li>
                                <li class="list-group-item"><a href="#">Help</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-2 " >
                            <ul class="list-unstyled list-group borderless">
                                <li class="nav-header disabled"><p style="color:#FA8072;">Contacts</p></li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-home"></span> 123 St. Quezon City</li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span> ecomm@email.com</li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-earphone"></span> +63 123 456 88</li>
                                <li class="list-group-item"><span class="glyphicon glyphicon-send"></span> +63 123 456 77</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <hr>
                    </div>
                    
                    <div class="container">
                        <p class="text-left text-muted">Copyright @ Sample (Philippines), Inc. All rights reserved</p>
                    </div>
                    
            </footer>

    </body>
</html>