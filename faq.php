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
            .panel-body{
                padding: 20px;
                padding-left: 50px;
                padding-right: 50px;
            }
            .panel a {
                color: black;
                transition: 0.5s;
                opacity : 1;
            }
            .panel a:hover{
                color: #FA8072;
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
							<li class="active"><a href="faq.php">FAQ</a></li>
						</ul>
				</div>
			</nav>
        </nav>
        <br/><br/><br/><br/>

        <div class="container">
            <header>
                <div class="page-header text-center">
                    <h1>FAQ</h1>
                    <p class="text-muted">Find the answers for frequently asked questions below </p>
                </div>
            </header>
            <br/><br/>
            <div class="panel-group" id="faqone">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>Why would someone buy your product/service?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap1" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap1">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>What is your best product line?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap2" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap2">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>What is your company about?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap3" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap3">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>What customer represents the majority of your customer base?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap4" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap4">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>How long does it take for my order to be delivered?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap5" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap5">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="col-md-6">
                            <i>How to request a refund?</i>
                        </h4>
                        <h4 class="text-right">
                            <a href="#colap6" data-toggle="collapse" data-parent="#faqone">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </h4>
                    </div>
                    <div class="collapse panel-collapse" id="colap6">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
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