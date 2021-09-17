<?php
function getAge($dob){							#creating a function names getAge wh
	$date1 = new DateTime($dob);                 #getting the DOB of each item of the array
	$present = new DateTime(date('y-m-d'));      #getting the present date using new DateTime function
	$difference = $date1->diff($present);        # calculating the difference in age using diff function
	echo 'Age: ', $difference->y, ' years old';	 #echoing the age
}


						
function fullAge($dob){							  #creating a function names fullAge which calculates year, month and day
	$date1 = new DateTime($dob);                  #getting the DOB of each item of the array
	$today = new DateTime(date('y-m-d'));		  #getting the present date using new DateTime function
	$difference = $date1->diff($today);			  # calculating the difference in age using diff function
	echo 'Born Ago: ', $difference->y, ' years ', $difference->m, ' months ', $difference->d, ' days';  #Now echoing the month as well as the days and years
}


function createCard($student, $index){				#creating function named createCard which displays card for every item with respect to every index of the array ($student) which is denoted by $index
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
					<h6><?= $student["name"]; ?></h6>
					<p class="designation"><?=$student["job"]; ?></p>
					<p class="Age"><?=getAge($student["DOB"]); #calling the function getAge to calculate the total Age?></p>          
					<p class="Born Ago"><?=fullAge($student["DOB"]);#calling the function fullAge to calculate the year, month and day ?></p>
				</div>
		</div>
	</div>
<?php
}

