<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Instalatii.Tech | Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>
<body>
<div id="container" class="grid">
	<header>
		<div class="col_6 column">
			<h1><a href="index.html"><strong>Instalatii.</strong>Tech</a></h1>
		</div>
		<div class="col_6 column right">
			<form id="add_job_link">
				<button class="large green"><i class="icon-plus"></i>Adauga Job</button>
			</form>
		</div>
	</header>
	
	<div class="col_12 column">
		<!-- Menu Horizontal -->
		<ul class="menu">
		<li class="current"><a href="index.html"><i class="icon-home"></i> Home</a></li>
		<li><a href="jobs.html"><i class="icon-desktop"></i> Joburi</a></li>
		<li><a href="register.html"><i class="icon-user"></i> Cont Nou</a></li>
		<li><a href="login.html"><i class="icon-key"></i> Intra In Cont</a></li>
		</ul>
	</div>
	
	<div id="search_area" class="col_12 column">
			<form class="horizontal" method="post" action="#">
				<input id="keywords" type="text" placeholder="Enter Keywords..." /> 
				<select id="state_select">
					<option>Alege Judet</option>
                    <option value="B">Bucuresti</option>
					<option value="AB">Alba</option>
					<option value="AR">Arad</option>
					<option value="AG">Arges</option>
					<option value="BC">Bacau</option>
					<option value="BH">Bihor</option>
					<option value="BN">Bistrita-Nasaud</option>
					<option value="BT">Botosani</option>
					<option value="BR">Braila</option>
					<option value="BV">Brasov</option>
					<option value="BZ">Buzau</option>
					<option value="CL">Calarasi</option>
					<option value="CS">Caras-Severin</option>
					<option value="CJ">Cluj</option>
					<option value="CT">Constanta</option>
					<option value="CV">Covasna</option>
					<option value="DB">Dambovita</option>
					<option value="DJ">Dolj</option>
					<option value="GL">Galati</option>
					<option value="GR">Giurgiu</option>
					<option value="GJ">Gorj</option>
					<option value="HR">Harghita</option>
					<option value="HD">Hunedoara</option>
					<option value="IL">Ialomita</option>
					<option value="IS">Iasi</option>
					<option value="IF">Ilfov</option>
					<option value="MM">Maramures</option>
					<option value="MH">Mehedinti</option>
					<option value="MS">Mures</option>
					<option value="NT">Neamt</option>
					<option value="OT">Olt</option>
					<option value="PH">Prahova</option>
					<option value="SJ">Salaj</option>
					<option value="SM">Satu Mare</option>
					<option value="SB">Sibiu</option>
					<option value="SV">Suceava</option>
					<option value="TR">Teleorman</option>
					<option value="TM">Timisoara</option>
					<option value="TL">Tulcea</option>
					<option value="VL">Valcea</option>
					<option value="VS">Vaslui</option>
					<option value="VN">Vrancea</option>					
				</select>
				<select id="category_select">
					<option>FILTREAZA REZULTATE</option>
					<option>Instalator apa-canal</option>
					<option>Instalator incalzire-centrala</option>
					<option>Instalator alimentari cu apa </option>
					<option>Instalator tehnico-sanitar </option>
					<option>Instalator gaze</option>
					<option>Electrician</option>
					<option>Tehnician instalator CATV</option>
				</select>
				<button type="submit">Trimite</button>
			</form>
		</div>
		
		<div class="col_12 column">
			<h3>Latest Job Listings</h3>
			<ul id="listings">
				<li>
					<div class="type">
						<span class="green">Full Time</span>
					</div>
					<div class="description">
						<h5>Senior Graphic Designer (Burlington, MA)</h5>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
						ut laoreet dolore magna aliquam erat volutpat.<a href="details.html"> <i class="icon-plus"></i> Read More</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="green">Full Time</span>
					</div>
					<div class="description">
						<h5> UX Designer (Newburyport, MA)</h5>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
						ut laoreet dolore magna aliquam erat volutpat.<a href="details.html"> <i class="icon-plus"></i> Read More</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue">Part Time</span>
					</div>
					<div class="description">
						<h5>Registered Nurse (Brooklyn, NY)</h5>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
						ut laoreet dolore magna aliquam erat volutpat.<a href="details.html"> <i class="icon-plus"></i> Read More</a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="green">Full Time</span>
					</div>
					<div class="description">
						<h5>House Painter(Boston, MA)</h5>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
						ut laoreet dolore magna aliquam erat volutpat.<a href="details.html"> <i class="icon-plus"></i> Read More</a>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
		<footer>
			<p>Copyright @copy; 2021, instalatii.tech, All Rights Reserved</p>
		</footer>
</div> <!-- End Grid -->
</body>
</html>
