<div class="user_list">
	<div class="user_list_box">
		<ul class="project-thumb">
			<?php
			
			for($i = 0; $i < $rows; $i++) { 
				echo '<a class="" href="view/projects.php?id='.$ports[$i]->id.'">
						<div class="project-thumb-box">
								<li>
									<img src="./public/images/thumbnails/'.$ports[$i]->thumbnail.'" alt="'.$ports[$i]->title.'">

									<div class="image-text">
							 			'.$ports[$i]->thumb_text.'
								  </div>
								</li>
						</div>
					</a>';
			}
			?>
		</ul>
	</div>