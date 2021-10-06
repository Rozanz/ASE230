<!<DOCTYPE html>
<?php include 'data.php';
	include 'functions.php';
    include 'json_util.php';
?>
	
	
<html lang="en">
	<head>
	<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/index.css" />
	<title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
		
	</head>
		<body>
			<div class="container text-center">
				<h1>This is ASE230 - class of Fall 2021</h1>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-sm-8 col-lg-6">
						<!-- Section Heading-->
						<div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
							<h3>Our Creative <span> Team</span></h3>
							<p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
							<div class="line"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
                        $fighterArr = read_content('class.json');
						$i=0;
						foreach($fighterArr as $student){			#using foreach loop to display card for every item using the createcard function with respect to each index of the array
                            createCard($student, $i);				#calling createCard function to display cards
						 $i++; }
					?>
				</div>
			</div>	
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
			<a href = "create.php">Clone</a><br>
			<a href = "restore.php">Restore</a><br>
		
		</body>
</html>