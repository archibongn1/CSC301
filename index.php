<?php
$pets=[
	[
		'name'=>'Scooby-Doo',
		'picture'=>'scooby.png',
		'type'=>'Dog',
		'age'=>2,
	],
	[
		'name'=>'Garfield',
		'picture'=>'garfield.png',
		'type'=>'Cat',
		'age'=>4,
	],
	[
		'name'=>'Peppa',
		'picture'=>'peppa.jpeg',
		'type'=>'Pig',
		'age'=>3,
	]
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>All the hotels</title>
  </head>
  <body>
   <div class="container">
		<h1>Our pets!</h1>
		<?php
		for($i=0;$i<count($pets);$i++){
			echo '<div class="media">
			  <img src="'.$pets[$i]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
			  <div class="media-body">
				<h5 class="mt-0">'.$pets[$i]['name'].'</h5>
				<p><a href="detail.php?id='.$i.'">Click to see more about info about '.$pets[$i]['name'].' </a></p>
			  </div>
			</div>';
			echo '<hr>';
		}

		?>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>