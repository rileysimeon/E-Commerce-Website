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
            .midnav .active{
                text-decoration : red underline;
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

            <br/><br/><br/><br/><br/><br/><br/>
            
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
            </div><hr/><br/><br/>

            <aside>
                <div class="col-md-2 col-md-offset-2">
                    <div class="cont1 container-fluid">
                        <p>Sort by</p>
                        <div class="dropdown text-center">
                            <button class="btn btn-default dropdown-toggle btn1" data-toggle="dropdown">Newest <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">A-Z</a></li>
                                    <li><a href="#">Z-A</a></li>
                                    <li><a href="#">Newest</a></li>
                                    <li><a href="#">Oldest</a></li>
                                    <li><a href="#">Highest Price</a></li>
                                    <li><a href="#">Lowest Price</a></li>
                                </ul>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="cont2 container-fluid">
                        <p>Filter by</p>
                        <div class="form-group">
                            <label>Range</label>
                            <div class="checkbox">
                                <label><input type="checkbox">DSLR(EOS)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Mirrorless(EOS M)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Popularity</label>
                            <div class="checkbox">
                                <label><input type="checkbox">Best Seller</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Coming Soon</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Discontinued</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Popular</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <div class="checkbox">
                                <label><input type="checkbox">Beginner</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Enthusiast</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Professional</label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="container contprod">
                <div class="col-md-8">
                    <div class="page-header">
                        <h3 class="text-center">Interchangeable Lens Cameras</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam1.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4><a href="product.php">EOS M50 Mark II (EF-M15-45mm f/3.5-6.3 IS STM)</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, 
                                </p>
                                <b><p class="text-right">PHP 85,000</p></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam9.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4><a href="product.php" >EOS R7 (Body)</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <b><p class="text-right">PHP 130,000</p></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam10.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4><a href="product.php" >EOS 3000D Kit</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <b><p class="text-right">PHP 125,000</p></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam4.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4><a href="product.php" >EOS R10 (RF-S18-150mm f/3.5-6.3 IS STM)</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident.
                                </p>
                                <b><p class="text-right">PHP 115,000</p></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam5.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4><a href="product.php" >EOS M50 Mark II (EF-M15-45mm f/3.5-6.3 IS STM)</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident. 
                                </p>
                                <b><p class="text-right">PHP 105,000</p></b>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="img/cam6.png" style="width: 100%;"/>
                            <div class="caption prodlink">
                                <h4 class="text-muted"><a href="product.php">EOS R5 (RF24-105mm f/4L IS USM)</a></h4>
                                <p> 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                    Excepteur sint occaecat cupidatat non proident. Mollit anim id est laborum.
                                </p>
                                <b><p class="text-right">PHP 95,000</p></b>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
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