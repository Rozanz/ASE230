<html lang="en">
<?php
	$className = "ASE230";
	$classSeason = "Fall";
	$classYear = 2021;
	
	$students = array(
	 ["name"=>"Rojan KC",
			"major"=>"CIT",
			"year"=>"Junior",
			"photo"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWv7FkFT_9_BJa_WYGS_29NoITxFMxAx2-rQ&usqp=CAU",
			"job"=>"Student",
			"funfact"=>"I can eat spicy food",
			"social"=>"https://www.youtube.com/watch?v=vPUlDludbXQ",			
			"dream_job"=>"Pilot",
			"intro"=>"Here I am",
			"dream_company"=>"My Company",
			"yearpic"=>"he.png",
			"email"=>"kcr2@nku.edu",
			"skills"=>[
				["name"=>"Python", "value"=>"75%"],
				["name"=>"Java", "value"=>"78%"]
				]
			
			],
	 ["name"=>"Darren Till",
			"major"=>"Karate",
			"year"=>"Senior",
			"photo"=>"https://a.espncdn.com/combiner/i?img=/i/headshots/mma/players/full/3897436.png&w=350&h=250",
			"funfact"=>"I have a good humor",
			"job"=>"Fighter",
			"intro"=>"I will win for sure",
			"dream_job"=>"UFC Welter weight champion",
			"social"=>"https://www.youtube.com/watch?v=J9h95d8M6GM",
			"dream_company"=>"UFC",
			"yearpic"=>"ca.png",
			"email"=>"tilldarren@gmail.com",
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
			"funfact"=>"I want to become 2 fight division champion",
			"social"=>"https://www.youtube.com/watch?v=J9h95d8M6GM",
			"dream_job"=>"I want to be UFC heavyweight champion",
			"dream_company"=>"One FC",
			"yearpic"=>"iron.png",
			"email"=>"jonjones@gmail.com",
			"intro"=>"I will knock everyone out",
			"skills"=>[
				["name"=>"MMA", "value"=>"75%"],
				["name"=>"Cooking", "value"=>"18%"]
				]
			]
			);
		$array = $_GET["student"];
?>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
		<a  href="index.php" style=" color: black;"><b>HOME</b></a>
		
	<body>
		
			<link rel="stylesheet" href="assets/css/detail.css" />
			<title><?=$className;?> - <?=$students[$array]["name"]?></title>
			<div class="container text-center mb-5">
				<h1><?=$className;?> - <?=$students[$array]["name"]?></h1>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6">
					<div class="mb-2">
					  <img class="w-100" src="<?=$students[$array]["photo"];?>" alt="">
					</div>
					<div class="mb-2 d-flex">
					  <h4 class="font-weight-normal"><?=$students[$array]["name"]?></h4>
						<div class="social d-flex ml-auto">
							<p class="pr-2 font-weight-normal">Follow on:</p>
							<a href="<?=$students[$array]["social"]?>" class="text-muted mr-1">
							  <i class="fab fa-facebook-f"></i>
							</a>
							<a href="<?=$students[$array]["social"]?>" class="text-muted mr-1">
							  <i class="fab fa-twitter"></i>
							</a>
							<a href="<?=$students[$array]["social"]?>"class="text-muted mr-1">
							  <i class="fab fa-instagram"></i>
							</a>
							<a href="<?=$students[$array]["social"]?>" class="text-muted">
							  <i class="fab fa-linkedin"></i>
							</a>
						</div>
					</div>
					
					<div class="mb-2">
					  <ul class="list-unstyled">
						<li class="media">
						  <span class="w-25 text-black font-weight-normal">Dream profession:</span>
						  <label class="media-body"><?=$students[$array]["dream_job"]?></label>
						</li>
						<li class="media">
						  <span class="w-25 text-black font-weight-normal">Dream company: </span>
						  <label class="media-body"><?=$students[$array]["dream_company"]?></label>
						</li>
						<li class="media">
						  <span class="w-25 text-black font-weight-normal">Email: </span>
						  <label class="media-body"><?=$students[$array]["email"]?></label>					  
						</li>
					  </ul>
					</div>
					
					
				</div>
			
				<div class="col-lg-7 col-md-6 pl-xl-3">
					<h5 class="font-weight-normal">Short intro</h5>	
					<p><?=$students[$array]["intro"]?></p>
					<div class="my-2 bg-light p-2">
					  <p class="font-italic mb-0"><?=$students[$array]["intro"]?></p>
					</div>
					<div class="mb-2 mt-2 pt-1">
					  <h5 class="font-weight-normal">Top skills</h5>
					</div>
					
					<?php
					foreach($students[$array]["skills"] as $skill){
					?>
					<div class="py-1">
					  <div class="progress">
						<div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
						  <div class="progress-bar-title"><?=$skill["name"]?></div>
						  <span class="progress-bar-number"><?=$skill["value"]?></span>
						</div>
					  </div>
					</div>
					<?php } ?>
					
					<h5 class="font-weight-normal">Fun fact</h5>
					<p><?=$students[$array]["funfact"]?></p>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>