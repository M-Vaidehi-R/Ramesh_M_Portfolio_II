

<?php 
        for($i = 0; $i < $rows; $i++){
            if($ports[$i]->category == 'developing'){

                echo '<a class="" href="view/projects.php?id='.$ports[$i]->id.'">
						<li>'.$ports[$i]->title.'</li>
					</a>';
            }
        }
?>
