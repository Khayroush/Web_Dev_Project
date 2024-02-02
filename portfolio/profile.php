<?php

include 'confi.php';


if(isset($_POST['save1'])){
    
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $job = mysqli_real_escape_string($con, $_POST['job']);
    $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
    $adress = mysqli_real_escape_string($con, $_POST['adress']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $des = mysqli_real_escape_string($con, $_POST['des']);
    $quote = mysqli_real_escape_string($con, $_POST['quote']);
    $exp = mysqli_real_escape_string($con, $_POST['exp']);
   
    $insert = "INSERT INTO tb_freelancer (age ,job,citizenship,adress,phone,email,elaborate,quote,exphobbies) VALUES('$age','$job','$citizenship','$adress','$phone','$des','$quote,'$exp')";
    $quer = mysqli_query($con, $insert);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Profile</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- Load Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/basic.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/ionicons.css" />
	
	
	
	

	
</head>

<body>
	
	<!-- Page -->
	<div class="page" id="home-section">

	
		<!-- Started Background -->
		<div class="started-bg">
			<div class="slide" style="background-image: url(images/123.jpeg);"></div>
		</div>

		
		
		<!-- Container -->
		<div class="container">

			<!-- Started -->
			<div class="section started">
				<div class="st-box">
					
					<div class="st-image"><img src="images/resized-image-Promo.jpeg" alt="" /></div>
					<div class="st-title">Achref Khairi</div>
					<div class="st-subtitle">UX/UI Designer & Front-end Developer</div>
					<div class="st-soc">
						<a target="blank" href="https://www.facebook.com/KhairiAchref" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-facebook"></i></span>
						</a>
						<a target="blank" href="https://www.instagram.com/interfacely/" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-instagram"></i></span>
						</a>
						<a target="blank" href="https://twitter.com/achrefkhairi12" class="btn_animated">
							<span class="circle"><i class="icon ion ion-social-twitter"></i></span>
						</a>
						
						</a>
						
					</div>
				</div>
			</div>

			<!-- Wrapper -->
			<div class="wrapper">

				<!-- Section About -->
				<form class="section about" id="about-section" action="" method="post">
					<div class="content-box">
						<div class="row">
							<div class="col col-m-12 col-t-5 col-d-5">
								<div class="info-list">
									<ul>
                                        <li><strong><span>age:</span></strong><input type="text" name='age'> </li>
										<li><strong><span>Job:</span></strong><input type="text" name='job'> </li>
										<li><strong><span>Citizenship:</span></strong> <input type="text" name='citizenship'></li>
										<li><strong><span>Address:</span></strong> <input type="text" name='adress'></li>
										<li><strong><span>Phone:</span></strong> <a href="tel:12562548456"><input type="text" name='phone'></a></li>
										<li><strong><span>E-mail:</span></strong> <a href="mailto:smorgan@domain.com"><input type="text" name='email'></a></li>
                                        <br>
                                        <input class="btn btn_animated" type="submit" name='save1' value="save">
									</ul>
								</div>
							</div>
							<div class="col col-m-12 col-t-7 col-d-7">
								<div class="text-box">
									<p><strong>Description<input type="text" placeholder="exp: Hello! I’m Achref Khairi" name='des'></strong></p>
									<p>
										<input type="text" placeholder="A quote or a motto you believe in" name='quote'>
									</p>
									<p>
										<input type="text" placeholder="Please tell us about any hobbies, experience , or anything else you'd like to add" name='exp'>
									</p>
								</div>
								<div class="bts">
									
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Skills -->
				<div class="section skills" id="skills-section">
					<div class="title">Skills</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-gear-b"></i></div>
									<div class="name">Professional</div>
								</div>
								<div class="skills">
									<ul>
										<li> 
											<div class="name"><strong>UX Design</strong></div>
											
												  <input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong> Application</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li>
											<div class="name"><strong> Application</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong>Writing</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong>Photography</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-person"></i></div>
									<div class="name">Personal</div>
								</div>
								<div class="skills">
									<ul>
										<li> 
											<div class="name"><strong>Communication</strong></div>
											
												  <input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong> Team Work</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li>
											<div class="name"><strong> Leadership</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong>Creativity</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
										<li> 
											<div class="name"><strong>Language</strong></div>
											<input type="number" placeholder="rate your skills on 100%">                 	
											
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				<!-- Service -->


				<div class="section service" id="service-section">
					<div class="title">Services</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-android-color-palette"></i></div>
									<div class="name">UI/UX Design</div>
								</div>
								<p>
									<input type="text" placeholder=" ! tel us about your experience in this field">
								</p>
                                <a href="#" class="btn btn_animated" type="submit"><span class="circle">Save</span></a>
							</div>
                            
						</div>
						<div class="col col-m-12 col-t-6 col-d-6">
							<div class="content-box animated">
								<div class="i_title">
									<div class="icon"><i class="icon ion ion-social-chrome"></i></div>
									<div class="name">Web Development</div>
								</div>
								<p>
									<input type="text" placeholder=" ! tel us about your experience in this field">
								</p>
                                <a href="#" class="btn btn_animated" type="submit"><span class="circle">Save</span></a>
							</div>
						</div>
					</div>
					
			
				
				<!-- Section Pricing -->



				<div class="section pricing" id="pricing-section">
					<div class="title">Pricing</div>
					<div class="row">
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-empty"></i></div>
										<div class="pt-title">Basic</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">DT</span>
										<span class="amount">15</span>
										
									</div>
									<div class="pt-feature-list">
										<ul>
											<li class="disable">UI/UX Design</li>
											<li>Web Development</li>
											<li class="disable">IOS Application <strong>New</strong></li>
											<li class="disable">Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="#" class="btn btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-low"></i></div>
										<div class="pt-title">Start-Up</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">DT</span>
										<span class="amount">29</span>
										
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li class="disable">IOS Application <strong>New</strong></li>
											<li class="disable">Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="#" class="btn btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-half"></i></div>
										<div class="pt-title">Business</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">DT</span>
										<span class="amount">49</span>
										
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li>IOS Application <strong>New</strong></li>
											<li>Android Application</li>
											<li class="disable">Writing</li>
											<li class="disable">Photography <strong>New</strong></li>
										</ul>
									</div>
									<a href="#" class="btn extra btn_animated"><span class="circle">Buy Now</span></a>
								</div>
							</div>
						</div>
						<div class="col col-m-12 col-t-6 col-d-3">
							<div class="content-box animated">
								<div class="pricing-table">
									<div class="i_title">
										<div class="icon"><i class="icon ion ion-battery-charging"></i></div>
										<div class="pt-title">Enterprise</div>
									</div>
									<div class="pt-amount">
										<span class="dollar">DT</span>
										<span class="amount">89</span>
										
									</div>
									<div class="pt-feature-list">
										<ul>
											<li>UI/UX Design</li>
											<li>Web Development</li>
											<li>IOS Application <strong>New</strong></li>
											<li>Android Application</li>
											<li>Writing</li>
											<li>Photography <strong>New</strong></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

	

</body>
</html>