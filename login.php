			
												<!--- php part --->
			
	<?php
		
		include("conn.php");
		error_reporting (0);
		if(isset($_POST['submit']))
			{
				 $user = $_POST['userName'];
			     $pass = $_POST['pasword'];
				 
					$query = "Select * from login where username = '$user' and password = '$pass'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);
						
						if($row["user_type"] == "customer")
							{
									header("location:Customer/custmr.php");
							}
							elseif($row["user_type"] == "admin")
								{
									header("location:Admin/admin.php");
								}
								else
									{
										echo "Usernam or Password is incorrect";
									}
			}
			
	?>
	
												<!--- End of PHP --->

								<!--- HTML part --->
		<!DOCTYPE html>
			<html>
				<head>
					<title>Welcome to Login page</title>

						 <meta name="viewport" content="width=device-width, initial-scale=1">
						 
						  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
						  <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
						  
						  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
						  
								<!--- CSS part --->
						  
					<style>
					
						@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

						   *{
							 margin: 0;
							 padding: 0;
							 box-sizing: border-box;
							 font-family: 'Poppins', sans-serif
							}

						  body
							 {
							  background: #12b864
							 }

					  .wrapper 
							 {
							   max-width: 350px;
							   min-height: 500px;
							   margin: 80px auto;
							   padding: 40px 30px 30px 30px;
							   background-color: #b5f7d6;
							   border-radius: 15px;
							   box-shadow: 13px 13px 20px #a6bf97, -13px -13px 20px #fff
							 }

						.logo 
						    {
							 width: 80px;
							 margin: auto
						    }

			     	.logo img 
							{
							  width: 100%;
							  height: 80px;
							  object-fit: cover;
							  border-radius: 50%;
							  box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #c9e6ba, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
							}

               .wrapper .name 
			                {
                             font-weight: 600;
                             font-size: 1.4rem;
                             letter-spacing: 1.3px;
                             padding-left: 10px;
                             color: #555
                            }

   .wrapper .form-field input
                            {
							 width: 100%;
							 display: block;
							 border: none;
							 outline: none;
							 background: none;
							 font-size: 1.2rem;
							 color: #666;
							 padding: 10px 15px 10px 10px
                            }

		 .wrapper .form-field
				            {
					         padding-left: 10px;
					         margin-bottom: 20px;
					         border-radius: 20px;
					         box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
				            }

    .wrapper .form-field .fas
                            {
                             color: #555
                            }

                    .wrapper.
					        {
                             box-shadow: none;
                             width: 100%;
                             height: 40px;
                             background-color: #39ed84;
                             color: #fff;
                             border-radius: 25px;
                             box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
                             letter-spacing: 1.3px
                            }

            .wrapper .:hover
                            {
                             background-color:#39ed84
                            }
 
              .wrapper .btn
                           {
                            box-shadow: none;
                            width: 100%;
                            height: 40px;
                            background-color: #39ed84;
                            color: #fff;
                            border-radius: 25px;
                            box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
                            letter-spacing: 1.3px
                           }

        .wrapper .btn:hover
                           {
                            background-color: #219c60
                           }

                 .wrapper a 
                           {
                            text-decoration: none;
                            font-size: 0.8rem;
                            color: #39ed84
                           }

           .wrapper a:hover
                           {
                            color: #219c60
                           }

   @media(max-width: 380px)
                           {
                            .wrapper
	                       {
                            margin: 30px 20px;
         padding: 40px 15px 15px 15px
                           }
                           }
						   
                    </style>

							<!--- End CSS part --->

		</head>
				
			<body>

				<div class="wrapper">
					<div class="logo">
						<img src="log.jpg">
					</div>
					<div class="text-center mt-4 name"> Healthy Pharmacy </div>
				<form method="post" action="#">
				
					<div class="form-field d-flex align-items-center"> 
						<span class="far fa-user">
						</span> 
						<input type="text" name="userName" placeholder="Username">
					</div>
					
					<div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> 
						<input type="password" name="pasword" placeholder="Password"> 
					</div> 
					
						<div class="text-center fs-6">
						<button class="btn mt-3" input type="submit" name="submit" value="Login">Login</button>
						</div>
				</form>
					<div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="rg.php">Register</a> </div>
				</div>


			</body>
			
            </html>
			
											<!--- END of HTML PART --->