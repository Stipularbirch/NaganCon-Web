<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Select Projects</title>
        <meta charset="UTF-8" />
		<meta name="description" content="Nagan Construction Premier Civil Engineering Firm">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/Main.min.css" />
			<link rel="stylesheet" type="text/css" href="css/Page2/Style.css" />
			<link rel="stylesheet" type="text/css" href="css/Page2/Carousel.css" />
			<link rel="stylesheet" type="text/css" href="css/Page2/VideoControls.css" />
			<link rel="icon" type="image/svg" href="images/NaganFavicon.svg"/>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="preload" as="font" href="../images/Muli_Font/Muli-ExtraLight.woff" crossorigin="anonymous"/>
	<head>
	<body class="slideshow">
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
		
		<!--Skip Intro Directive-->
		<?php
			$preface = '<section id="preface" class="preface">
							<div id="userGuidance">
								<p>Use Arrow Keys to Navigate</p></br>
								<p>⇅</p>
							</div>
						</section>';
										
			if(!isset($_COOKIE["skip_direction"])) {
				echo $preface;
			}
		?>			
		<div class="slideshow-container">
			<aside id="index-bar" style="visibility:hidden;">
				<div class="index-bar-container">
					<div class="index-slide">
						<span id="item_count">&nbsp;</span>
					</div>
				</div>
			</aside>
	
			<div id="content-container"class="content-container" style="visibility: hidden;">
				<!--First item-->
				<div class="content-item">
					<!-- Images -->
					<div id="first" class="left">
						<div class="carousel">
							<a class="prev">&#10094;</a>
							<a class="next">&#10095;</a>

							<div class="comp fade">
								<img src="../images/select_projects/comp1/comp1A.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp1/comp1B.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp1/comp1C.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp1/comp1D.jpg">
							</div>
							<div id="videoContainer1" class="comp fade videoCon">
								<video id="video1" class="video" controls playsinline autoplay loop muted preload="metadata"> 
									<source src="../videos/southbronx.webm" type=video/webm> 
								</video>
								<div id="video-controls1" class="controls" data-state="hidden">
									<button id="playpause1" class="play" type="button" data-state="play">Play/Pause</button>
									<button id="mute1" class="mute" type="button" data-state="mute">Mute/Unmute</button>
									<button id="volinc1" class="volinc" type="button" data-state="volup">Vol+</button>
									<button id="voldec1" class="voldec" type="button" data-state="voldown">Vol-</button>
									<button class="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
									<div class="progress">
										<progress id="progress1" class="prog" value="0" min="0">
											<span id="progress-bar1" class="progress-bar"></span>
										</progress>
									</div>
								</div>
							</div>
							
							<div class="dot-layout" style="text-align:center">
								
							</div>
						</div>	
					</div>
					<!-- Info -->
					<div id="second" class="right">
						<div class="content-info">
							<h1>South Bronx Job Corps Center</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">RENOVATIONS TO THE SOUTH BRONX JOB CORPS CENTER</p>
								<p class="title">Project Location</p>
									<p class="description">Bronx, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">CONSTRUCTION SERVICES TO PERFORM HISTORIC RESTORATION OF EXTERIOR ENVELOPE, HVAC, AND ELECTRICAL UPGRADES</p>
								<p class="title">Coordinated Trades</p>
									<p class="description">Contact Nagan Construction for more infomation</p>
							</div>
						</div>
					</div>
				</div>
				<!--Second item -->
				<div class="content-item">
					<!-- Images -->
					<div id="first" class="left">
						<div id="comp2" class="comp fade" >
							<img src="../images/select_projects/comp2/comp2.jpg">
						</div>
					</div>
					<!-- Info -->
					<div id="second" class="right">
						<div class="content-info">
							<h1>Merchant Marine Academy</h1><hr>
							<!--Description-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">US Merchant Marine Academy – Delano Hall Kitchen Renovation</p>
								<p class="title">Project Location</p>
									<p class="description">Kings Point, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">Renovation of 3-Story Kitchen Building while it remains in operation by providing state-of-the-Art Kitchen Equipment and Ventilation System. A few high lights of the project included installation of 6 walk-in coolers in two floors, 60’ x 30’ Caddy hood with MeLink Controls tied into 6 VFDs serving 4 exhaust fans and 2 Make-up Air Units, Utility Distribution System for new cooking equipment, completely new dry and wet cooking areas, food prep area, serving area, ware washing area; also, to support the new equipment, installation of new Cleaver Brooks Steam Generator and 2 ea PVI water heaters, Gas Supply Upgrades, new transformer and switch gear.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal<p>
									<p class="inline-stack">•Asbestos Abatement<p>
									<p class="inline-stack">•Concrete incl. foundation and grade beams for a new addition and Light Weight Slab Infill throughout 1 st Fl.<p>
									<p class="inline-stack">•Masonry incl. colored CMU parapet wall and Cast Stone<p>
									<p class="inline-stack">•Structural Steel<p>
									<p class="inline-stack">•Solid Surfaces and Carpentry<p>
									<p class="inline-stack">•Spray on Fire Proofing and Fire Stopping<p>
									<p class="inline-stack">•PVC Roofing<p>
									<p class="inline-stack">•Doors, Hardware, Windows and AL Entrances<p>
									<p class="inline-stack">•Interior finishes<p>
									<p class="inline-stack">•Toilet Accessories, Partitions, Lockers, Signage<p>
									<p class="inline-stack">•Kitchen Equipment<p>
									<p class="inline-stack">•Fire Suppression<p>
									<p class="inline-stack">•Plumbing incl. Gas Piping and Connections<p>
									<p class="inline-stack">•HVAC incl. Steam Piping, Roof Top Equipment, Duct Work and Controls<p>
									<p class="inline-stack">•Electric and Fire Alarm<p>
							</div>
						</div>
					</div>
				</div>
				<!--Third Item-->
				<div class="content-item">
					<div id="first" class="left">
						<div id="comp3" class="comp"></div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>Wild Life Refuge Visitor Center</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">Jamaica Bay Wild Life Refuge Visitor Center</p>
								<p class="title">Project Location</p>
									<p class="description">Howard Beach, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description"> Additions (3,500 sf) and alterations (3,500 sf) to the existing Visitor Center Building. Building designed and built to achieve LEED-GOLD certification.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Landscaping, Access Roads and Pavements<p>
									<p class="inline-stack">•Earthworks, Underground Utilities and Pile Driving<p>
									<p class="inline-stack">•Selective Demolition and Removals<p>
									<p class="inline-stack">•Cast in Place Concrete<p>
									<p class="inline-stack">•Brick Façade<p>
									<p class="inline-stack">•Structural Steel<p>
									<p class="inline-stack">•Gluelam Curved Wooden Beams<p>
									<p class="inline-stack">•Roof and Skylights (Tubular, Pyramid, Dome) Reclaimed Wooden Doors & Windows<p>
									<p class="inline-stack">•Aluminum Windows<p>
									<p class="inline-stack">•Hollow Metal Doors and Hardware<p>
									<p class="inline-stack">•ACT and Gypsum Board Ceiling Finishes<p>
									<p class="inline-stack">•Cork, Bamboo, Ceramic Floor Finishes<p>
									<p class="inline-stack">•Gypsum Board Wall Partitions<p>
									<p class="inline-stack">•Paint and Ceramic Wall Finishes<p>
									<p class="inline-stack">•Toilet Partitions, Accessories and Specialties<p>
									<p class="inline-stack">•Window Treatments and Sun Shading Devices<p>
									<p class="inline-stack">•Geothermal Heating and Cooling System<p>
									<p class="inline-stack">•Radiant Floor Heating<p>
									<p class="inline-stack">•HVAC and Building Automation<p>
									<p class="inline-stack">•Desuper heaters, Solar Domestic Water Heater and Plumbing<p>
									<p class="inline-stack">•Electric, Communications and Fire Alarm System<p>
									<p class="inline-stack">•Photo Voltaic Panels and Peripherals<p>
							</div>
						</div>
					</div>
				</div>	
				<!--Fourth Item-->
				<div class="content-item">
					<div id="first" class="left">
						<div id="comp4" class="comp"></div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>Sagamore Children’s Psychiatric Center</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">Sagamore Children’s Psychiatric Center Fire System Upgrades</p>
								<p class="title">Project Location</p>
									<p class="description">Dix Hills, NY</p>
								<!--<p class="title">Project Value</p>
									<p class="description">$ 2,678,000</p>-->
								<p class="title">Description of the Project</p>
									<p class="description">Replacement of 70,000sf ceiling finishes and installation of fire stopping products in an occupied psychiatric facility. Project completed in twelve phases.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal<p>
									<p class="inline-stack">•Asbestos Abatement<p>
									<p class="inline-stack">•Millwork – Trim and Moulding<p>
									<p class="inline-stack">•Fire Stopping<p>
									<p class="inline-stack">•Fire Proofing<p>
									<p class="inline-stack">•Aluminum Doors and Windows<p>
									<p class="inline-stack">•Acoustical Ceiling Tiles<p>
									<p class="inline-stack">•Metal Ceiling Tiles<p>
									<p class="inline-stack">•Gypsum Board Ceilings and Soffits<p>
									<p class="inline-stack">•VCT and Rubber Floor Finishes<p>
									<p class="inline-stack">•Painting<p>
									<p class="inline-stack">•Wall Ceramic<p>
									<p class="inline-stack">•Pipe Insulation</p>
							</div>
						</div>
					</div>
				</div>	
				<!--Fifth  Item-->
				<div class="content-item">
					<div id="first" class="left">
						<div id="comp5" class="comp"></div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>Jacobi Medical Center</h1><hr>
							<!--Description-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">Jacobi Children Psychiatric Emergency Program</p>
								<p class="title">Project Location</p>
									<p class="description">Bronx, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">Construction of 12,000 sf Psychiatric Emergency unit according to OMH Safety Standards</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal<p>
									<p class="inline-stack">•Structural Steel Support<p>
									<p class="inline-stack">•Fireproofing / Firestopping<p>
									<p class="inline-stack">•Automated Sliding Doors<p>
									<p class="inline-stack">•HM Doors / Borrow-Light Windows<p>
									<p class="inline-stack">•Tamperproof Glazing<p>
									<p class="inline-stack">•Wausau Security Windows<p>
									<p class="inline-stack">•Acrovyn Wall Coverings<p>
									<p class="inline-stack">•Sheetrock Partitions<p>
									<p class="inline-stack">•Acoustical Ceilings<p>
									<p class="inline-stack">•VCT, Linoleum and Rubber Flooring<p>
									<p class="inline-stack">•Terrazzo Flooring<p>
									<p class="inline-stack">•Ceramic Tile</p>
									<p class="inline-stack">•Toilet Partitions, Accessories and Specialties</p>
									<p class="inline-stack">•Hospital Millwork</p>
							</div>
						</div>
					</div>
				</div>
				<!--Sixth Item-->
				<div class="content-item">
					<div id="first" class="left">
						<div id="comp6" class="comp"></div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>St. Joachim School</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">Aircraft Noise Abatement Program at St. Joachim School</p>
								<p class="title">Project Location</p>
									<p class="description">Cedarhurst, NY 11516</p>
								<p class="title">Description of the Project</p>
									<p class="description">FAA & PANYNJ funded aircraft noise abatement of 3 story, 20,000 sf of occupied school building.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Removal<p>
									<p class="inline-stack">•Asbestos Abatement<p>
									<p class="inline-stack">•In Ground Fuel Tank Removal<p>
									<p class="inline-stack">•Site Work<p>
									<p class="inline-stack">•Masonry<p>
									<p class="inline-stack">•Structural Steel Dunnage<p>
									<p class="inline-stack">•Roofing<p>
									<p class="inline-stack">•Sound Proof Windows<p>
									<p class="inline-stack">•Acoustical Ceiling Finishes<p>
									<p class="inline-stack">•Soundproof GWB Furring and Ceilings<p>
									<p class="inline-stack">•HVAC<p>
									<p class="inline-stack">•Plumbing<p>
									<p class="inline-stack">•Electric<p>
									<p class="inline-stack">•Fire Alarm System<p>
							</div>
						</div>
					</div>
				</div>	
				<!--Seventh Item-->
				<div class="content-item">
					<div id="first" class="left">
						<div id="comp7" class="comp"></div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>Floyd Bennett Field</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">Floyd Bennett Field Historical Hangar Rehabilitation</p>
								<p class="title">Project Location</p>
									<p class="description">Brooklyn, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">Restoration of Exterior Envelop of Historical Aircraft Hangar</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal<p>
									<p class="inline-stack">•Lead and Asbestos Abatement<p>
									<p class="inline-stack">•Brick Façade Wall<p>
									<p class="inline-stack">•Pointing<p>
									<p class="inline-stack">•Cast Stone<p>
									<p class="inline-stack">•Repair of brick wall clusters by using existing material<p>
									<p class="inline-stack">•Replacement of rotten structural steel elements EPDM Roofing</p>
									<p class="inline-stack">•Copper Roof and Sheet Metal Flashings<p>
							</div>
						</div>
					</div>
				</div>	
				<!--Eighth Item-->
				<div class="content-item">
					<div id="first" class="left">
						<!-- Images -->
						<div class="carousel">
							<a class="prev">&#10094;</a>
							<a class="next">&#10095;</a>

							<div class="comp fade">
								<img src="../images/select_projects/comp8/comp8A.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp8/comp8B.jpg">
							</div>

							<div class="dot-layout" style="text-align:center">
								
							</div>
						</div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>BNL Building 924</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">RENOVATE TO INCREASE OPERATIONAL EFFICIENCY AT BUILDING 924</p>
								<p class="title">Project Location</p>
									<p class="description">BROOKHAVEN NATIONAL LABORATORY, UPTON, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">This safety oriented project completed by Nagan 
									Construction in 2017 at Brookhaven National Laboratory. Work included
									installation of new mezzanine, new doors, partitions, ceiling, flooring,
									painting and trench cover. Qualified subcontractors of Nagan construction
									Inc completed HVAC, plumbing and electrical scope of the project. Owner
									of the project evaluated Nagan construction Inc as excellent after the completion of the project.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal</p>
									<p class="inline-stack">•Concrete</p>
									<p class="inline-stack">•Carpentry</p>
									<p class="inline-stack">•Painting</p>
									<p class="inline-stack">•Fire Suppression Piping</p>
									<p class="inline-stack">•Plumbing</p>
									<p class="inline-stack">•HVAC</p>
									<p class="inline-stack">•Electric and Fire Alarm</p>
							</div>
						</div>
					</div>
				</div>
				<!--Ninth Item-->
				<div class="content-item">
					<div id="first" class="left">
						<!-- Images -->
						<div class="carousel">
							<a class="prev">&#10094;</a>
							<a class="next">&#10095;</a>

							<div class="comp fade">
								<img src="../images/select_projects/comp9/comp9A.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp9/comp9B.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp9/comp9C.jpg">
							</div>
							
							<div class="dot-layout" style="text-align:center">
								
							</div>
						</div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>OGS MacArthur Airport</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">REPAIR EXTERIOR ENVELOPE AT RONKONKOMA AASF #1</p>
								<p class="title">Project Location</p>
									<p class="description">MACARTHUR AIRPORT, RONKONKOMA, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description"> Repairs to the exterior envelope of an army aircraft
									hangar. Nagan Construction Inc successfully conducted its role as the prime
									contractor and completed all requirements of this contract with the best value
									to the government. The project location, Army aviation support facility in MacArthur
									airport remained operational during the project and Nagan Construction provided maximum
									safety, security and caution at the entire duration. Qualified key personnel managed
									the jobsite and coordinated multiple subcontractors with a close proximity to the
									sensitive army areas and equipment.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition and Removal</p>
									<p class="inline-stack">•Hazmat Removal</p>
									<p class="inline-stack">•Unit Masonry </p>
									<p class="inline-stack">•Metal Fabrications</p>
									<p class="inline-stack">•Carpentry</p>
									<p class="inline-stack">•Fluid-Applied Roofing and Flashing</p>
									<p class="inline-stack">•SBS Modified Bitumen Roofing System</p>
									<p class="inline-stack">•Painting</p>
							</div>
						</div>
					</div>
				</div>
				<!--Tenth Item-->
				<div class="content-item">
					<div id="first" class="left">
						<!-- Images -->
						<div class="carousel">
							<a class="prev">&#10094;</a>
							<a class="next">&#10095;</a>

							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10A.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10B.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10C.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10D.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10E.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10F.jpg">
							</div>
							<div class="comp fade">
								<img src="../images/select_projects/comp10/comp10G.jpg">
							</div>
							
							<div class="dot-layout" style="text-align:center">
								
							</div>
						</div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>Ryan Center Phase II</h1><hr>
							<!--Descriptions-->
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description">HISTORIC REHABILITATION OF RYAN CENTER PHASE II</p>
								<p class="title">Project Location</p>
									<p class="description">FLOYD BENNETT FIELD, BROOKLYN, NY</p>
								<p class="title">Description of the Project</p>
									<p class="description">Historic Rehabilitation of Ryan Visitors Center at
									Floyd Bennett Field. Work included exterior brick masonry rehabilitation,
									total interior renovations and associated HVAC, Plumbing and Electrical work.
									This complex historical restoration project provided repairs for storm damages
									to the building. Nagan Construction Inc’s experience in sensitive historical
									areas played a key role in successful execution of this project. Nagan Construction
									overcame the unforeseen conditions and successfully completed the project after
									a collaborative approach with the government. Effective coordination of subcontractors
									expedited the completion of changes in scope.</p>
								<p class="title">Coordinated Trades</p>
									<p class="inline-stack">•Selective Demolition</p>
									<p class="inline-stack">•Asbestos Abatement</p>
									<p class="inline-stack">•Masonry</p>
									<p class="inline-stack">•Carpentry</p>
									<p class="inline-stack">•Roofing</p>
									<p class="inline-stack">•Doors, Hardware, Windows</p>
									<p class="inline-stack">•Interior finishes</p>
									<p class="inline-stack">•Fire Suppression</p>
									<p class="inline-stack">•Plumbing</p>
									<p class="inline-stack">•HVAC including Roof Top Equipment, Duct Work and Controls</p>
									<p class="inline-stack">•Electric and Fire Alarm</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer">
					<div class="footer-left">
						<button id="nextButton" aria-label="Next Button">
							<img class="iconImage" src="../images/select_projects/Icons/arrow-down.svg">
						</button>
					</div>
					
					<div class="footer-middle"></div>
					
					<div class="footer-right">		
						<button id="prevButton" aria-label="Previous Button">
							<img class="iconImage" src="../images/select_projects/Icons/arrow-up.svg">
						</button>
					</div>
				</div>
			</div>
			<!--Template (What number item here)
				<div class="content-item">
					<div id="first" class="left">
						<!-- Images 
						<div class="carousel">
							<a class="prev">&#10094;</a>
							<a class="next">&#10095;</a>

							<div class="comp fade">
								<img src="../images/select_projects/comp9/comp9A.jpg">
							</div>

							<div class="dot-layout" style="text-align:center">
								
							</div>
						</div>
					</div>
					<div id="second" class="right">
						<div class="content-info">
							<h1>NYS Office of General Services</h1><hr>
							<!--Descriptions--><!--
							<div class="project-box">
								<p class="title">Project Name</p>
									<p class="description"></p>
								<p class="title">Project Location</p>
									<p class="description"></p>
								<p class="title">Project Value</p>
									<p class="description"></p>
								<p class="title">Description of the Project</p>
									<p class="description"></p>
								<p class="title">Coordinated Trades</p>
							</div>
						</div>
					</div>
				</div>
			-->
		</div>
		<script>
			var eachProject = 1;
			var wrapper_height = 0;
			var cookie_name = "skip_direction";
			
			$(document).ready(function(){
				function start(e){
					$('.content-item').slice(1).each(function(){
						 $(this).hide();
					});
					$("#center2").removeClass("center2");
					$('.preface').hide();
					$("#header").addClass("specialHeader");
					$("#index-bar").addClass("index-bar");
					$("#first").addClass("active-left");
					$("#second").addClass("active-right");
					e.stopPropagation();
				}
				function stop(e){
					$("#header").css("animation","none");
					$("#first").removeClass("active-left");
					$("#second").removeClass("active-right");
					e.stopPropagation();
				}
				function setCookie(cname, bool, exdays) {
					var d = new Date();
					d.setTime(d.getTime() + (exdays*24*60*60*1000));
					var expires = "expires=" + d.toGMTString();
					document.cookie = cname + "=" + bool + ";" + expires + ";path=/";
				}
				function getCookie(cname) {
					var which_index;
					var segment_array = document.cookie.split(';');
					for(var id in segment_array){
						var cookie = segment_array[id].split('=')
						if(cookie[0].trim() == cname){
							 which_index = id;
						}
					}
					if(which_index === undefined){
						return "";
					}
					var pair_array = segment_array[which_index].split('=');
					return pair_array[1] == "true" ? pair_array[1] : "";	
				}
				
				var content = $('.content-container').first();
				var preface = document.getElementById('preface');

				content.removeAttr('style');
				content.css("visibility", "visible !important");
				
				
				/* Check/Set Cookie */
				/*Cookie does not exist*/
				if ( preface ) {

					var elem = document.getElementById("userGuidance");
					$("#userGuidance").addClass("userGuidance")
					elem.addEventListener("animationend", start);
					
					var stopAnimation = document.getElementById("index-bar");
					stopAnimation.addEventListener("animationend", stop);
					setCookie(cookie_name, true, 7);
					
				/*Cookie exist*/
				} else {
					
					$('.content-item').slice(1).each(function(){
						 $(this).hide();
					});
					$("#header").addClass("specialHeader");
					$("#index-bar").addClass("index-bar");
					$("#first").addClass("active-left");
					$("#second").addClass("active-right");
					
					var stopAnimation = document.getElementById("index-bar");
					stopAnimation.addEventListener("animationend", stop);
				}
			});
		</script>
		<script src="js/video-player.js" defer></script>
		<script src="js/slider.js"></script>
		<script src="js/carousel.js"></script>
		<script type="text/javascript" src="js/hamburger.js"></script>
	</body>
</html>
