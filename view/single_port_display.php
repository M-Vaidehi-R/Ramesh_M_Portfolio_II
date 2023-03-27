

<div class="user_details_profile_box">
	<a style="text-align:left;color:orange;font-family:Poppins;font-weight:bold;text-decoration:none;" href="javascript:history.back()"><- Go Back</a>
	<?php
	echo 
	'
		<div class="user_details" style="font-family:Poppins; margin-left:2rem; margin-right:2rem;">
			
			<div class="user_detail_info">
				<div class="user_info">
					<h2 class="Project_Title" style="text-align:center; color:orange;" > '.$ports[0]->title.'</h2> <br>
					<p class="label"><span style="color:orange; font-weight:bold; font-size:1rem" >About Project:</span></p> '.$ports[0]->project_desc.'<br>
					<p class="label"><span style="color:orange; font-weight:bold; font-size:1rem">Project Description:</span></p> '.$ports[0]->about_desc.'<br>
					<p class="label"><span style="color:orange; font-weight:bold; font-size:1rem">Role Description:</span></p> '.$ports[0]->role_desc.'<br>	

					</div>
				</div>
			</div>
		</div>
	';


	echo '<div class="project-images" style=" margin-top: auto;
	display: grid;
	grid-column: 2 / span 2;
	grid-template-columns: repeat(4, 1fr);
	justify-content: space-evenly;
	row-gap: 2em;
	column-gap: 2em;">';
    $image_names = explode(',', $ports[0]->images);
    foreach($image_names as $image_name) {
        echo '<img src="../public/images/project_images/'.$image_name.'" alt="'.$ports[0]->title.'">';
    }
	?>
</div>
<div>
<img style="left:50%; position:relative; width:30%;margin-top:2rem;" src="../public/images/dog.svg" alt="dog">
</div>
<br><br><br>
<p style="text-align:center; color:orange; font-size:medium;">Thank you for visiting my page!</p>

</body>

</html>

