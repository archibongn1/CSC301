<?php
require_once('functions.php');
$pets=jsonToArray('data.json');

$title='All our pets!';
require_once('header.php');
?>
   <div class="container">
		<h1>All our pets!</h1>
		<?php
		for($i=0;$i<3;$i++){
			echo '<div class="media">
              <h5 class="mt-0">'.$pets[$i]['name'].'</h5>
			  <img src="'.$pets[$i]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
			  <div class="media-body">
				
				<p><a href="detail.php?id='.$i.'">Click to see more details on '.$pets[$i]['name'].'</a></p>';
                 echo '<a href="edit.php?id='.$i.'">Edit </a>';
                 echo '<a href="details.php?id='.$i.'">Delete </a>';
                 echo '
			  </div>
			</div>';
			echo '<hr>';
            
		}
		?>
     
	</div>
 <div class="container">
  <?php           
             echo '<a href="create.php?id='.$i.'">Create </a>'; 
        ?>
</div>
<?php
require_once('footer.php');