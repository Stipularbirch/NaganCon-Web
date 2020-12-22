<?php
ini_set( 'session.cookie_secure', 1 );

session_start();

$_SESSION = array();

include("simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Employment</title>
        <meta charset="UTF-8" />
		<meta name="description" content="Nagan Construction Premier Civil Engineering Firm">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
			<link rel="stylesheet" type="text/css" href="css/Main.min.css" />
			<link rel="stylesheet" type="text/css" href="css/Page6/Style.css" />
			<link rel="icon" type="image/svg" href="images/NaganFavicon.svg"/>	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="preload" as="font" href="../images/Muli_Font/Muli-ExtraLight.woff" crossorigin="anonymous"/>
	</head>
	
	<body class="employment">
		<header id="header">
			<svg fill="rgb(0, 0, 77)" font-family="BAUHS93" preserveAspectRatio="none">
				<text y="60%" 
					textLength="150"
					style="font-size:3.25rem;">NAGAN
				</text>
				<text x="1%" y="80%"
					textLength="150"
					style="font-family:Arial; font-weight: 800;"
					lengthAdjust="spacingAndGlyphs">CONSTRUCTION, Inc.
				</text>
				<image class="logo" src="images/Nagan-Construction.png" xlink:href="">
			</svg>
			<div id="containerB">
				<label class="toggle" >
					<input type="checkbox" id="toggle" onclick="toggleMenu()">
					<div>
						<div>
							<span></span>
							<span></span>
						</div>
						<svg>
							<use xlink:href="#path">
						</svg>
						<svg>
							<use xlink:href="#path">
						</svg>
					</div>
				</label>
			</div>
			<nav id="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="naganCon-Page2.php">Select Projects</a></li>
					<li><a href="naganCon-Page3.html">Current Projects</a></li>
					<li><a href="naganCon-Page4.html">Current Bids</a></li>
					<li><a href="naganCon-Page5.html">Contact</a></li>
					<li><a href="naganCon-Page6.php">Employment</a></li>
				</ul>
			</nav>
		</header>	        
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" id="path">
				<path d="M22,22 L2,22 C2,11 11,2 22,2 C33,2 42,11 42,22"></path>
			</symbol>
		</svg>
			<div id="banner" class="container">
				<section id="application" class="application">
						<label class="header">Which form best suits you </label>
						
						<div id="form_menu">
							
							<select name="form_selection" id="form_selection">
								<option disabled selected value> -- select an option -- </option>
								<option value="1" class="a">Individual Form</option>
								<option value="2" class="b">Subcontractor Form</option>	
								<option value="3" class="c">MWBE Subcontractor Form</option>
							</select>
							
							<!--Individual Form -->
							<div id="a">
							 <form action="php/test.php" method="post" enctype="multipart/form-data">
								<div class="float-left">
									<label id="name" class="header_inside">Name <span>*</span></label>
									<input type="text" id="name" name="name" placeholder="Name" required="*"/>
								</div>
								
								<div class="float-right">
									<label id="phone" class="header_inside">Phone <span>*</span></label>
									<input type="text" id="name" name="phone" placeholder="E.g. 718-888-9999" required="*"/>
								</div>
								
								<label id="Email" class="header_inside">Email <span>*</span></label>
								<input type="email" id="email" name="email" placeholder="Mail@example.com" required="*" />
									<script>
										function checkEmail() {

											var email = document.getElementById('email');
											var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

											if (!filter.test(email.value)) {
												alert('Please provide a valid email address');
												email.focus;
											}
											return false;
										}		
									</script>
								
								<label id="type" class="header_inside">Desired Position <span>*</span></label>
								<select name="job_selection" id="job_selection">
									<option disabled selected value> -- select an option -- </option>
									<option value="Project Manager" >Project Manager</option>
									<option value="Site Supervisor" >Site Supervisor</option>	
									<option value="Site Safety Manager" >Site Safety Manager</option>
									<option value="Quality Control Manager" >Quality Control Manager</option>
									<option value="Procurement Manager" >Procurement Manager</option>
									<option value="Quality Staff" >Quality Staff</option>
									<option value="Scheduler" >Scheduler</option>
									<option value="Estimator" >Estimator</option>
									<option value="Accountant" >Accountant</option>
									<option value="Other" >Other</option>
								</select>
							
								<div id="upload_file" class="float-left">
									<label class="header_inside">Upload your resume</label>
									<input type="file" name="attachment1" id="attachment1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="attachment1">Here</label>
								</div>
								<div class="float-right"><br>
									<input id="captcha1" maxlength="5" type="text"/>
									<div class="advise">Enter Captcha Code <button id="check" type="button" onclick="validate(captcha1.id,ok1.id)">Check</button><br><br>  
										<?php
											echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
										?>
									</div>
									<input id="ok1" name="submit" type="submit" value="Submit" disabled="true" />
								</div>
							 </form>
							</div>
							
							<!--Subcontractor Form-->
							
							<div id="b">
							 <form action="php/test2.php" method="post" enctype="multipart/form-data">
								<div class="float-left">
									<label id="name" class="header_inside">Company Name <span>*</span></label>
									<input type="text" id="name" name="name" placeholder="Name" required="*"/>
								</div>
								<div class="float-right">
									<label id="phone" class="header_inside">Phone <span>*</span></label>
									<input type="text" id="name" name="phone" placeholder="E.g. 718-888-9999" required="*"/>
								</div>
									
								<label id="Address" class="header_inside">Address <span>*</span></label>
								<input type="address" id="address" name="address" placeholder="420 Penn Ave Brooklyn, NY 11223" required="*" />
								
								<div class="float-left">
									<span id="Union" style="width:100%;">Is Your Company Unionized?</span>
										<input type="radio" id="radio" name="Union" value="yes" /> Yes
										<input type="radio" id="radio" name="Union" value="no" checked /> No
								</div>
								<div class="float-right">
									<span id="Wage" style="width:100%;">Have Prevailing Wage?</span>
									<div style="width:100%;">
										<input type="radio" id="radio" name="Wage" value="yes" checked /> Yes
										<input type="radio" id="radio" name="Wage" value="no" /> No
									</div>
										<div id="popup" >If Not Sure, Select No</div>
								
								</div>
								
								<label id="Insurance_Liability" class="header_inside">Insurance Liability <span>*</span></label>
								<input type="Insurance" id="Insurance" name="Insurance" placeholder="General Aggregate Limit e.g. $1,000,000" required="*" />
							
								
								
								<div id="upload_file" class="float-left">
									<label class="header_inside">Upload Relevant Documents</label>
									<input type="file" name="attachment2" id="attachment2" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="attachment2">Here</label>
									<div id="popup" >Past work experiences, References, etc. <br> In one pdf</div>
								</div>
								<div class="float-right"><br>
									<input id="captcha2" maxlength="5" type="text"/>
									<div class="advise">Enter Captcha Code <button id="check" type="button" onclick="validate(captcha2.id,ok2.id)">Check</button><br><br>  
										<?php
											echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
										?>
									</div>
									<input id="ok2" name="submit" type="submit" value="Submit" disabled="true" />
								</div>
							 </form>
							</div>
							
						
							<!--MWBE Subcontractor Form -->
							
							
							<div id="c">
							 <form action="php/test3.php" method="post" enctype="multipart/form-data">
								<div class="float-left">
									<label id="name" class="header_inside">Company Name <span>*</span></label>
									<input type="text" id="name" name="name" placeholder="Name" required="*"/>
								</div>
								<div class="float-right">
									<label id="phone" class="header_inside">Phone <span>*</span></label>
									<input type="text" id="name" name="phone" placeholder="E.g. 718-888-9999" required="*"/>
								</div>
									
								<label id="Address" class="header_inside">Address <span>*</span></label>
								<input type="address" id="address" name="address" placeholder="420 Penn Ave Brooklyn, NY 11223" required="*" />
								
								<div class="float-left">
									<span id="Union" style="width:100%;">Is Your Company Unionized?</span>
										<input type="radio" id="radio" name="Union" value="yes" /> Yes
										<input type="radio" id="radio" name="Union" value="no" checked /> No
								</div>
								<div class="float-right">
									<span id="Wage" style="width:100%;">Have Prevailing Wage?</span>
									<div style="width:100%;">
										<input type="radio" id="radio" name="Wage" value="yes" checked /> Yes
										<input type="radio" id="radio" name="Wage" value="no" /> No
									</div>
										<div id="popup" >If Not Sure Hit No</div>
								
								</div>
								
								<label id="Insurance_Liability" class="header_inside">Insurance Liability <span>*</span></label>
								<input type="Insurance" id="Insurance" name="Insurance" placeholder="General Aggregate Limit e.g. $1,000,000" required="*" />
								
								<div id="cert" style="margin-top:1em; display:block; border:1px solid #fff">
									<label id="cert_ask" class="header_inside">What Certifications Apply </label>
									<div class="certfication">
										<input type="checkbox" name="check_list[]" value="WBE"> NYS WBE </input>
									</div>
									<div class="certfication">
										<input type="checkbox" name="check_list[]" value="MBE"> NYS MBE </input>
									</div>
									<div style="margin-bottom: 1em;"class="certfication">
										<input type="checkbox" name="check_list[]" value="DVBE"> NYS DVBE </input>
									</div>
								</div>
								
								<div id="upload_file" class="float-left">
									<label class="header_inside">Upload Relevant Documents</label>
									<input type="file" name="attachment3" id="attachment3" class="inputfile" data-multiple-caption="{count} files selected" multiple />
									<label for="attachment3">Here</label>
									<div id="popup" >Past work experiences, References, etc. <br> In one pdf</div>
								</div>
								
								<div class="float-right"><br>
									<input id="captcha3" maxlength="5" type="text"/>
									<div class="advise">Enter Captcha Code <button id="check" type="button" onclick="validate(captcha3.id,ok3.id)">Check</button><br><br>  
										<?php
											echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
										?>
									</div>
									<input id="ok3" name="submit" type="submit" value="Submit" disabled="true" />
								</div>
							 </form>	
							</div>
						</div>
					</form>
					<div id="reminder">
						*Nagan Construction is an Equal Opportunity Employer*
					</div>
				</section>
			</div>
				<!--Reveal Options-->
					<script>

					$(document).ready(function () {
						$("#a,#b,#c").hide();
						$('#form_selection').change(function() {
							$("#a,#b,#c").hide();
							var a = "#"+$(this).find('option:selected').attr('class');
							$(a).show();
							
							if($("div#current_info").css('display') == 'block'){
								
								$("div#current_info").css("display", "none");
							}
						});
					});
					$(window).on("load", function() {
						$('#form_selection').prop('selectedIndex', 0); 
						$('#job_selection').prop('selectedIndex', 0); 
					});
					
					$("[type=file]").on("change", function(){
						  // Name of file and placeholder
						var file = this.files[0].name;
						var dflt = $(this).attr("placeholder");
						if($(this).val()!=""){
							$(this).next().text(file);
						} else {
							$(this).next().text(dflt);
						}
					});

					function validate(captcha,ok) {
						var captcha_code = <?php echo json_encode($_SESSION['captcha']['code']); ?>;
						var user_input = document.getElementById(captcha).value
									
						if(captcha_code === user_input){
							$("#"+ok).prop("disabled",false);
							document.getElementById(ok).style.display = 'inline-block';
						} else {
							alert ("Incorrect Captcha");
						}
					}
	
					</script>	
		<script type="text/javascript" src="js/hamburger.js"></script>
	</body>
