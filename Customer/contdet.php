<?php
			include("conn.php");
			
			if(isset($_POST['submit']))
				{
					
					$nam = $_POST['nam'];
					$em = $_POST['emai'];
					$flt = $_POST['fla'];
					$are = $_POST['are'];
					$lnd = $_POST['lndmr'];
					$tow = $_POST['tow'];
					$sta = $_POST['stat'];
					$zip = $_POST['zipcod'];
					$con = $_POST['contn'];
					
				$query = "insert into cont_details (name, email, flat, area, lndmrk, town, state, zipcode, contno) values ( '$nam', '$em', '$flt', '$are', '$lnd', '$tow',
								'$sta', '$zip', '$con')";
				print_r($_POST);exit();
				$data = mysqli_connect($conn, $query); 
						
					if($data)
							{
								echo "Data inserted sucessfully";
							}
							else
							{
								echo "Data inserted unsucessfully";
							} 
				}
				
?>


<!DOCTYPE html>
<html>
   <head>
   
      <!--- Basic --->
	  
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	  
      <!--- Mobile Metas --->
	  
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	  
      <!--- Site Metas --->
	  
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Welcome to Customer Registration form</title>
	  
      <!--- bootstrap core css --->
	  
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	  
      <!--- font awesome style --->
	  
      <link href="css/font-awesome.min.css" rel="stylesheet" />
	  
      <!--- Custom styles for this template --->
	  
      <link href="css/style.css" rel="stylesheet" />
	  
      <!--- responsive style --->
	  
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
	  
         <!--- header section strats --->
		 
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="50" src="images/logo.jpg" alt="#" /></a><h1>Healthy Pharmacy</h1>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>                      
                          
                        <li class="nav-item">
                           <a class="nav-link" href="product.php">Products</a>
                        </li>
						
						<li class="nav-item">
                           <a class="nav-link" href="about.php">About</a>
                        </li>
						
						<li class="nav-item">
                           <a class="nav-link" href="rg.php">Register</a>
                        </li>
						                        										
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact</a>
                        </li>
						
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
		 </div>
		 
         <!--- end header section --->
      
	  
      <!--- inner page section --->
	  
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Register yourself</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!--- end inner page section --->
	  
      <!--- Contact section --->
	  
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
				  <div class="col-md-6">
				  <form method="POST" id="contactForm" name="contactForm" class="contactForm" action = "">
				  
						<fieldset>
						
					<label class="label" for="name">Full Name</label>
					<input type="text" class="form-control" name="nam" placeholder="Name">
						
											
					
					<label class="label" for="email">Email Address</label>
					<input type="email" class="form-control" name="emai" placeholder="Email">
					
											
					
					<label class="label" for="address">	Flat, House no., Building, Company, Apartment</label>
					<input type="text" class="form-control" name="fla" placeholder="Flat, House no., Building, Company, Apartment">
						
										
					
					<label class="label" for="area">Area, Colony, Street, Sector, Village</label>
					<input type="text" class="form-control" name="are" placeholder="Area, Colony, Street, Sector, Village">
											
									
					
					<label class="label" for="area">Landmark</label>
					<input type="text" class="form-control" name="lndmr" placeholder="Landmark">
						
					
					
					<label class="label" for="town">Town/City</label>
					<input type="text" class="form-control" name="tow" placeholder="Town/City">
												
									
					
					<label class="label" for="town">State / Province / Region</label>
					<input type="text" class="form-control" name="stat" placeholder="State / Province / Region">
							
												
					
					<label class="label" for="zipcode">Zipcode</label>
					<input type="text" class="form-control" name="zipcod" placeholder="zipcode">
						
																							
					
					<label class="label" for="contno">Contact No</label>
					<input type="text" class="form-control" name="contn" placeholder="contact no"></textarea>
					
						<input type="submit" value="Submit" />
						
					</fieldset>
					
				</form>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
		
	  
      <!--- end why section --->
     
      <!--- footer section --->
	  
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +91 0987654321
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        healthypharmacy@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.html" class="footer-logo">
                     Healthy Pharmacy
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     Healthy Pharmacy
                  </p>
               </div>
            </div>
         </div>
      </footer>
	  
      <!--- footer section --->
	  
      <!--- jQery --->
	  
      <script src="js/jquery-3.4.1.min.js"></script>
	  
      <!--- popper js --->
	  
      <script src="js/popper.min.js"></script>
	  
      <!--- bootstrap js --->
	  
      <script src="js/bootstrap.js"></script>
	  
      <!--- custom js --->
	  
      <script src="js/custom.js"></script>
   </body>
</html>