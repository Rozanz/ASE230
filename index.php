<!<DOCTYPE html>
<?php
	$className = "ASE230";
	$classSeason = "Fall";
	$classYear = 2021;
	
	$students = array(
			["name"=>"Rojan KC",
			"major"=>"CIT",
			"year"=>"Junior",
			"job"=>"Student",
			"social"=>"https://www.youtube.com/watch?v=vPUlDludbXQ",
			"photo"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWv7FkFT_9_BJa_WYGS_29NoITxFMxAx2-rQ&usqp=CAU",
			"funfact"=>"I can eat spicy food",
			"email"=>"kcr2@nku.edu",
			"dream_company"=>"My Company",
			"dream_job"=>"Pilot",
			"intro"=>"Here I am",
			"yearpic"=>"he.png",
			"skills"=>[
				["name"=>"Python", "value"=>"75%"],
				["name"=>"Java", "value"=>"78%"]
				]
			],
			["name"=>"Darren Till",
			"major"=>"Karate",
			"year"=>"Senior",
			"job"=>"Fighter",
			"photo"=>"https://a.espncdn.com/combiner/i?img=/i/headshots/mma/players/full/3897436.png&w=350&h=250",
			"funfact"=>"has a good humor",
			"social"=>"https://www.youtube.com/watch?v=J9h95d8M6GM",
			"email"=>"tilldarren@gmail.com",
			"dream_job"=>"I want to be UFC Welter weight champion",
			"dream_company"=>"UFC",
			"yearpic"=>"ca.png",
			"intro"=>"I will win for sure",
			"skills"=>[
				["name"=>"Karate", "value"=>"75%"],
				["name"=>"Judo", "value"=>"78%"]
				]
			],
			["name"=>"Jon Jones",
			"major"=>"Ju Jitsu",
			"year"=>"Sophomore",
			"job"=>"Wrestler",
			"photo"=>"https://cdn.shopify.com/s/files/1/0276/7008/5711/collections/UFC_JONES_JON_2468_grande.png?v=1600095855",
			"funfact"=>"I want to be 2 fight division champion",
			"social"=>"https://www.youtube.com/watch?v=J9h95d8M6GM",
			"email"=>"jonjones@gmail.com",
			"dream_job"=>"UFC heavyweight champion",
			"dream_company"=>"One FC",
			"yearpic"=>"iron.png",
			"intro"=>"Face me",
			"skills"=>[
				["name"=>"MMA", "value"=>"75%"],
				["name"=>"Cooking", "value"=>"18%"]
				]
			],
			)
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
						<h1>This is <?=$className;?> - class of <?=$classSeason;?> <?=$classYear?></h1>
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
							$index=0;
							foreach($students as $student){
							?>
								<!-- Single Advisor-->
								<div class="col-12 col-sm-6 col-lg-3">
									<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
										<!-- Team Thumb-->
										<div class="advisor_thumb"><a href="detail.php?student=<?=$index?>"><img src="<?=$student["photo"];?>" alt=""></a>
											<!-- Social Info-->
											<div class="social-info"><a href="detail.php"><i class="fa fa-facebook"></i></a><a href="detail.php?student=<?=$index?>"><i class="fa fa-twitter"></i></a><a href="detail.php"></a></div>
										</div>
										<img src="<?=$student["yearpic"];?>">
										<!-- Team Details-->
										<div class="single_advisor_details_info">
											<h6><?=$student["name"]; ?></h6>
											<p class="designation"><?=$student["job"]; ?></p>
										</div>
									</div>
								</div>
							<?php $index++; }
							?>
						</div>
					</div>	
					<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
				
			</body>
	</html>