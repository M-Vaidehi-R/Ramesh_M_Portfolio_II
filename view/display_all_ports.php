<div class="user_list">
	<div class="user_list_box">
		<ul>
			<?php
			
			for($i = 0; $i < $rows; $i++) { 
				echo '<a class="" href="view/projects.php?id='.$ports[$i]->id.'">
						<!--<li>'.$ports[$i]->title.'</li>
						<li><img src="./public/images/thumbnails/'.$ports[$i]->thumbnails.'.svg" alt="thumbnails"></li>
					</a>';
			}
			?>
		</ul>
	</div>